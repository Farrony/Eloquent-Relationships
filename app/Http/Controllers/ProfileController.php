<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        $users = User::with('profile')->get(); //From User class access profile method
        return view('welcome',compact('users'));
    }
    
}
