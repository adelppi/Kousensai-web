<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('projects', 'App\Http\Controllers\ProjectController');
Route::post('/projects/{id}/increment-vote', 'App\Http\Controllers\ProjectController@incrementVote');
Route::post('/projects/{id}/decrement-vote', 'App\Http\Controllers\ProjectController@decrementVote');
Route::get('/getTopThreeProjects', 'App\Http\Controllers\ProjectController@getTopThreeProjects');
Route::get('/getLostItems', 'App\Http\Controllers\LostFoundController@getLostItems');
Route::post('/addLostItem', 'App\Http\Controllers\LostFoundController@addLostItem');