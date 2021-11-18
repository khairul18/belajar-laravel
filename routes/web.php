<?php

use App\Http\Controllers\PostController;
use App\Models\MPost;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "name" => "Khairul Ariandi Rida",
        "title" => "Home"
    ]);

});

Route::get('about', function () {
    return view('about', [
        "name" => "Khairul Ariandi Rida",
        "title" => "About"
    ]);

});


Route::get('article', [PostController::class, 'index']);

Route::get('{slug}', [PostController::class, 'subArticle']);