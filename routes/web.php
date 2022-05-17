<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GameController;
use \App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $games = \App\Models\Game::all();
    $posts = \App\Models\Post::where('is_active', 1)->get();
    return view('index', 
    ['games'=> $games, 'posts' =>$posts]
);
});

Route::resource('games', GameController::class)->only([
    'index',
    'show'
]);

Route::resource('posts', PostController::class)->only([
    'index',
    'show'
]);