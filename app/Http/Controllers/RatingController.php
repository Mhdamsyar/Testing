<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function storeRating(Request $request)
    {
        $movies = Movie::where('title','LIKE','%'. $request->movie_title.'%');
        $movie = $movies->first();
        $rating = DB::table('ratings')->insert([
            'username' => $request->username,
            'rating' => $request->rating,
            'description' => $request->description,
            'movie_id' => $movie->movie_id,
        ]);

        return response()->json([
            'message' => "Successfully added review for ".$movie->title." by ".$request->username,
        ]);
    }
}
