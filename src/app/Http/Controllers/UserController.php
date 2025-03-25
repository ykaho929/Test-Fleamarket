<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function favorite(){
        return view('mypage');
    }

    public function register(){
        return view('profile');
    }

    public function address(){
         return view('address');
    }
    
}
