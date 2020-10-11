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

Route::get('/', function () {
   $users = App\Models\User::with('profile')->get(); //From Ugi ser class access profile method
   return view('welcome',compact('users'));
});

Route::get('/inverse', function () {
    $inverse = App\Models\Profile::with('user')->get();
    return view('profile',compact('inverse'));
});
