<?php

namespace App\Http\Controllers\API;

use voku\helper\HtmlDomParser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    protected $url;
    public function __construct()
    {
        $this->url = 'https://167.86.71.48/';
    }
    
    private function http_request($url) 
    {
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch); 
        return HtmlDomParser::str_get_html($output);
    }

    public function get_home()
    {
        $url = $this->http_request($this->url);
        $wrapper = $url->find('div.content');
        foreach( $wrapper as $content ) {
            $data_result[] = [
                'title' => $content->find('.title h2', 0)->innertext,
                'slug' => explode('/', $content->find('a', 0)->href)[3],
                'thumbnail' => $content->find('div.thumbnail', 0)->find('div.poster img', 0)->src,
                'desc' => [
                    'rating' =>  $content->find('div.title div.desc span', 0)->innertext,
                    'tahun' =>  $content->find('div.title div.desc span', 1)->innertext,
                ]
            ];
        }

        // return response()->json([
        //     'author' => 'Sproject Productive',
        //     'status' => 200,
        //     'result' => collect($data_result)->skip(7)
        // ]);
        return collect($data_result)->skip(7);
    }

    public function detail($slug) { 
        $url = $this->http_request($this->url . $slug . '/');
        $link_download_film = $url->find('div#dl_tab div.dl_links');
        foreach( $link_download_film as $link_download ) {
            $link_films[] = [
                'link_download' => explode(',', $link_download->find('a', 0)->href)[0]
            ];
        }

        $data_film = [
            'title' =>  $url->find('div.postdetail h1', 0)->innertext,
            'rating' => $url->find('div.absolute span', 0)->innertext,
            'thumbnail' => $url->find('div.posthumb img', 0)->src,
            'trailer' => $url->find('div#main-content', 0)->find('div#tab-2', 0)->find('div.player-embed iframe', 0)->src,
            'sinopsis' => $url->find('div#main-content', 0)->find('div#tab-1 p', 0)->innertext,
            'subtitle' => [
                'link_satu' => $url->find('div#dl_subscene a', 0)->href,
                'link_dua' => $url->find('div#dl_subscene a', 1)->href,
            ],
            'link_download_film' => (isset($link_films) ? $link_films : 'tidak ada')
        ];
        
        return response()->json([
            'author' => 'Sproject Productive',
            'status' => 200,
            'result' => $data_film
        ]);
    }
}