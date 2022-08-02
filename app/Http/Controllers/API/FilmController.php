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

    public function index()
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

        return collect($data_result)->skip(7);
    }

    public function detail($slug) {
        if( $slug == '' ) {
            return response()->json([
                'author' => 'SProject Productive',
                'status' => 500,
                'message' => 'slug tidak boleh kosong'
            ]);
        }

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

        if( $data_film['title'] !== '' ) {
            return collect($data_film);
        } else {
            return response()->json([
                'author' => 'SProject Productive',
                'status' => 404,
                'message' => 'film tidak ditemukan'
            ]);
        }
        
    }

    public function search($query)
    {
        $url = $this->http_request($this->url . '?s=' . $query);
        foreach ($url->find('div.content') as $movie) {
            $data_search[] = [
                'title' => $movie->find('div.title h2', 0)->innertext,
                'slug' => explode('/', $movie->find('a', 0)->href)[3],
                'thumbnail' => $movie->find('div.poster img', 0)->src,
                'desc' => [
                    'rating' => str_replace(['&#13;', ' '], '', $movie->find('div.desc span', 0)->innertext),
                    'tahun' => str_replace(['&#13;', ' '], '', $movie->find('div.desc span', 1)->innertext),
                ]
            ];
        }

        try {
            return collect($data_search);
        } catch (\Throwable $th) {
            return response()->json([
                'author' => 'SProject Productive',
                'status' => 404,
                'message' => 'film tidak ditemukan'
            ]);
        }
    }

    public function tahun_realese(Request $request) 
    {
        $url = $this->http_request($this->url . 'years/' . $request->tahun . '/');
        foreach ($url->find('div.content') as $movie) {
            $tahun_realese[] = [
                'title' => $movie->find('div.title h2', 0)->innertext,
                'slug' => explode('/', $movie->find('a', 0)->href)[3],
                'thumbnail' => $movie->find('div.poster img', 0)->src,
                'desc' => [
                    'rating' => str_replace(['&#13;', ' '], '', $movie->find('div.desc span', 0)->innertext),
                    'tahun' => str_replace(['&#13;', ' '], '', $movie->find('div.desc span', 1)->innertext),
                ]
            ];
        }

        try {
            return collect($tahun_realese)->skip(7);
        } catch (\Throwable $th) {
            return response()->json([
                'author' => 'SProject Productive',
                'status' => 400,
                'message' => 'tahun realese tidak boleh kosong'
            ]);
        }
    }
}