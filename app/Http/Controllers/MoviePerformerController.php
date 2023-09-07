<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return response()->json($slot);
    }
}
