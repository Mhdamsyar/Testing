<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;

class MoviePerformerController extends Controller
{
    public function getPerfomer(Request $request)
    {
        $name = explode(" ", $request->performer_name);
        $first_name = $name[0];
        $last_name = $name[1];
        $slot = DB::table('movie_performers')
            ->join('movies', 'movie_performers.movie_id', '=', 'movies.movie_id')
            ->join('performers', 'movie_performers.performer_id', '=', 'performers.performer_id')
            ->where('performers.first_name', $first_name)
            ->where('performers.last_name', $last_name)
            ->select('movies.movie_id','movies.title','movies.description')
            ->get();

        $movies = $slot;
        $data = array();
        foreach($movies as $movie){
            $overall_rating = "No Rating";
            $ratings = Rating::where('movie_id', '=', $movie->movie_id)->get();
            if(sizeof($ratings) > 0){
                 $count = 0;
                foreach($ratings as $r){
                     $count = $count + $r->rating;
                }
                $overall_rating = $count / sizeof($ratings);
            }

            array_push($data, [
                'Movie_ID' => $movie->movie_id,
                "Overall_rating" => $overall_rating,
                "Title" => $movie->title,
                "Description" => $movie->description
            ]);
        }

        return response()->json($data);
    }
}
