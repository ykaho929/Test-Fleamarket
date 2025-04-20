<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function favorite(){
        return view('mypage');
    }

    public function register(){
        return view('profile');
    }

    public function address($product_id)
    {
        $users = auth()->user();
        $products = Product::findOrFail($product_id);
        $address = $users->address;

        return view('address', compact('products','address'));
    }    
    
}
