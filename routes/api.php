<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieGenreController;
use App\Http\Controllers\MoviePerformerController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SlotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Models\MoviePerformer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(array('middleware' => ['custom_auth']), function ()
{
    Route::apiResource('token', TokenController::class);
    Route::post('/token/topup', [TokenController::class, 'store']);
});

Route::post('/giverating',[RatingController::class, 'storeRating']);
Route::post('/addmovie',[MovieController::class, 'storeNewMovies']);

Route::get('/newmovie',[MovieController::class, 'getNewMovies']);
Route::get('/movie/genres',[MovieGenreController::class, 'index']);
Route::get('/timeslot',[SlotController::class, 'getShowTime']);
Route::get('/specific',[SlotController::class, 'getSpecificMovieTheater']);
Route::get('/performer',[MoviePerformerController::class, 'getPerfomer']);





