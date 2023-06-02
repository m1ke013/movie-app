<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index(string $movie_id)
    {
        $post = $movie_id;
        $data['imdb_id'] =  Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$post.'/external_ids')
        ->json()['imdb_id'];
        // https://api.themoviedb.org/3/movie/{movie_id}/external_ids
        $data['findMovie'] =  Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/find/'.$data['imdb_id'].'?external_source=imdb_id')
        ->json()['movie_results'];

        $data['popularMovies']= Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $data['genres']= Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?language=en')
        ->json()['genres'];

        $data['people']= Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?language=en')
        ->json()['genres'];
        

        // dump($data); // test
        return  view('watch.watching',$data);
        
    }
}
