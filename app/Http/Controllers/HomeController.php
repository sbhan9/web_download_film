<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\FilmController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $data_film;
    public function __construct()
    {
        $this->data_film = new FilmController();
    }
    
    public function index()
    {
        $home = $this->data_film->index();
        foreach( $home as $h ) {
            $films[] = [
                'title' => $h['title'],
                'slug' => $h['slug'],
                'thumbnail' => $h['thumbnail'],
                'desc' => $h['desc'],
            ];
        }

        return view('home.index', [
            'title' => 'Sproject Film - Home',
            'films' => $films
        ]);
    }

    public function detail(Request $request)
    {
        $data_film = $this->data_film->detail($request->slug);
        try {
            return view('home.detail', [
                'title' => 'Detail - ' . $data_film['title'],
                'film' => $data_film
            ]);
        } catch (\Throwable $th) {
            return view('error.404', [
                'title' => 'Detail - ' . $request->slug,
                'message_error' => 'Detail Film ' . $request->slug . ' tidak ditemukan',
                'message' => 'Beri kami detail film yang spesifik. Terimakasih'
            ]);
        }
    }

    public function search(Request $request)
    {
        $search = $this->data_film->search($request->q);
        try {
            foreach( $search as $h ) {
                $films[] = [
                    'title' => $h['title'],
                    'slug' => $h['slug'],
                    'thumbnail' => $h['thumbnail'],
                    'desc' => $h['desc'],
                ];
            }

            return view('home.index', [
                'title' => 'Search - ' . $request->q,
                'films' => $films
            ]);
        } catch (\Throwable $th) {
            return view('error.404', [
                'title' => 'Search - ' . $request->q,
                'message_error' => 'Pencarian ' . $request->q . ' tidak ditemukan',
                'message' => 'Beri kami kata kunci yang spesifik. Terimakasih'
            ]);
        }
    }

    public function tahun_release(Request $request)
    {
        $tahun_release = $this->data_film->tahun_release($request->tahun);
        try {
            foreach( $tahun_release as $r ) {
                $films[] = [
                    'title' => $r['title'],
                    'slug' => $r['slug'],
                    'thumbnail' => $r['thumbnail'],
                    'desc' => $r['desc'],
                ];
            }

            return view('home.index', [
                'title' => 'Tahun Release - ' . $request->tahun,
                'films' => $films
            ]);
        } catch (\Throwable $th) {
            return view('error.404', [
                'title' => 'Tahun Release - ' . $request->tahun,
                'message_error' => 'Tahun Release ' . $request->tahun . ' tidak ditemukan',
                'message' => 'Beri kami tahun release yang spesifik. Terimakasih'
            ]);
        }
    }
}