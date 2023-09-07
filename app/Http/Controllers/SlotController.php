<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Movie;
use App\Models\Slot;
use App\Models\Theater;

class SlotController extends Controller
{
    public function getShowTime(Request $request)
    {
        $slot = DB::table('slots')
            ->join('movies', 'slots.movie_id', '=', 'movies.movie_id')
            ->join('theaters', 'slots.theater_id', '=', 'theaters.theater_id')
            ->where('theaters.theater_name', $request->theater_name)
            ->select('movies.movie_id','movies.title','theaters.theater_name','slots.time_start','slots.time_end','movies.description','slots.room_no')
            ->get();

        return response()->json($slot);
    }

    public function getSpecificMovieTheater(Request $request)
    {
        $slot = DB::table('slots')
            ->join('movies', 'slots.movie_id', '=', 'movies.movie_id')
            ->join('theaters', 'slots.theater_id', '=', 'theaters.theater_id')
            ->where('theaters.theater_name', $request->theater_name)->
            whereDate('slots.time_start', $request->d_date)
            ->select('movies.movie_id','movies.title','theaters.theater_name','slots.time_start','slots.time_end','movies.description','slots.room_no')
            ->get();

        return response()->json($slot);
    }
}
