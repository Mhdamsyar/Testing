<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Movie;

class MovieGenreController extends Controller
{
    public function index(Request $request)
    {
        $comedyMovies = DB::table('movie_genre')
            ->join('movies', 'movie_genre.movie_id', '=', 'movies.movie_id')
            ->join('genres', 'movie_genre.genre_id', '=', 'genres.genre_id')
            ->where('genres.name', '=', $request->genre_name)
            ->select('movies.movie_id','movies.title','genres.name','movies.description')
            ->get();

        return response()->json($comedyMovies);
    }
}
