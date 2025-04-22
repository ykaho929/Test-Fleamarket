<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Purchase;
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
        $categories = Category::all();
        return view ('sell', compact('categories'));
    }

    public function detail($id)
    {
        $products = Product::findOrFail($id);
        $category = Category::findOrFail($products->category_id);
        return view ('detail', compact('products', 'category'));
    }

    public function purchase($id)
    {
        $user = auth()->user();
        $products = Product::findOrFail($id);
        return view ('purchase', compact('user','products'));
    }
    
}
