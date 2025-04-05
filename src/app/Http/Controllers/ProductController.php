<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function sell(){
        return view ('sell');
    }

    public function detail(){
        return view ('detail');
    }

    public function purchase(){
        return view ('purchase');
    }
    
}
