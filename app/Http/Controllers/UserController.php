<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class UserController extends Controller
{
    public function index(){
        $inverse = Profile::with('user')->get();
        return view('profile',compact('inverse'));
    }
}
