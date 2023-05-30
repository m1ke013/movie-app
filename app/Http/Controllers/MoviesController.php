<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $data['popularMovies']= Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $data['latestMovies'] = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/latest')
        ->json();
        
        $data['recommended'] =  Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/2023/recommendations')
        ->json()['results'];
        

        $data['popularTVshows'] = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/trending/tv/day')
        ->json()['results'];

        $data['trending'] =  Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/trending/all/day')
        ->json()['results'];

        // dump($data); // test
        return view('home.home',$data);
    }
}
