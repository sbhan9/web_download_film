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
        dd($data_film);
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
}