<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function sell(){
        return view ('sell');
    }

    public function detail($id)
    {
        $products = Product::findOrFail($id);
        return view ('detail', ['products' => $products]);
    }

    public function purchase(){
        return view ('purchase');
    }
    
}
