<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Performer;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::all();
        return response()->json($movie);
    }

    public function getAllMoviesWithGenres()
    {
        $moviesWithGenres = Movie::with('genres')->get();

        return response()->json($moviesWithGenres);
    }

    public function getNewMovies(Request $request)
    {
        $movie = Movie::where('movies.release',"<=", $request->r_date)
        ->select('movies.movie_id','movies.title','movies.description')
        ->get();

        return response()->json($movie);
    }

    public function storeNewMovies(Request $request)
    {
        $movie_id = DB::table('movies')->insertGetId([
            'title' => $request->title,
            'release' => $request->release,
            'length' => $request->length,
            'description' => $request->description,
            'mpaa_rating' => $request->mpaa_rating,
            'language' => $request->language,
        ]);

        $genres = $request->genre;
        $performers = $request->performer;
        if(is_scalar($genres)) //If more than 1
            {$genres = array($genres);}
        if(is_scalar($performers)) //If more than 1
            {$performer = array($performers);}

        foreach($genres as $genre){
            $genrelist = Genre::where('name', 'LIKE', '%'.$genre.'%')->get();
            $genre_id = 0;
            if(sizeof($genrelist)==0){
                $genre_id = DB::table('genres')->insertGetID([
                    'name' => $genre,
                ]);
            } else {
                $genre_id = $genrelist->first()->genre_id;
            }

            $movie_genre = DB::table('movie_genre')->insert([
                'genre_id' => $genre_id,
                'movie_id' => $movie_id,
            ]);
        }

        foreach($performers as $performer){
            $name = explode(" ", $performer);
            $first_name = $name[0];
            $last_name = $name[1];
            $performerlist = Performer::where('first_name', 'LIKE', '%'.$first_name.'%')
            ->where('last_name', 'LIKE', '%'.$last_name.'%')->get();
            $performer_id = 0;
            if(sizeof($performerlist)==0){
                $performer_id = DB::table('performers')->insertGetID([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                ]);
            } else {
                $performer_id = $performerlist->first()->performer_id;
            }

            $movie_performer = DB::table('movie_performers')->insert([
                'movie_id' => $movie_id,
                'performer_id' => $performer_id,
            ]);
        }

        return response()->json([
            'message' => "Successfully Successfully added movie ".$request->title." with ".$movie_id,
            'success' => "true",
        ]);
    }

}
