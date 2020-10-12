<?php

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

Route::get('/', 'App\Http\Controllers\ProfileController@index');

Route::get('/inverse', 'App\Http\Controllers\UserController@index');

Route::get('/onetomany', 'App\Http\Controllers\PostController@index');

// Route::get('/manytomany', 'App\Http\Controllers\TagController@index');

Route::get('/manytomany', function(){
    // $posts = App\Models\Post::with('tags')->get();
    // return view('tag',compact('posts'));

    $tags = App\Models\Tag::with('posts')->get();
    return view('tag',compact('tags'));
});
