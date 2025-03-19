<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function favorite(){
        return view('user');
    }

    public function register(){
        return view('profile');
    }


    
}
