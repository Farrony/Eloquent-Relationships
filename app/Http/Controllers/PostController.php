<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        // Post::insert( [
        //     [
        //         'user_id' => 1,
        //         'title' => 'Html post',
        //     ],
        //     [
        //         'user_id' => 1,
        //         'title' => 'Css post',
        //     ],
        //     [
        //         'user_id' => 2,
        //         'title' => 'Php post',
        //     ],
        //     [
        //         'user_id' => 3,
        //         'title' => 'Java post',
        //     ],
        // ]);
        // $users = User::has('posts','>=','2')->with('posts')->get();
        // $users = User::doesntHave('posts')->with('posts')->get();
        $users = User::whereHas('posts',function($query){
            $query->where('title','like','%PHP%');
        })->with('posts')->get();

        // dd($users);
        // $posts = Post::with('user')->get();
        return view('post',compact('users'));
    }
}
