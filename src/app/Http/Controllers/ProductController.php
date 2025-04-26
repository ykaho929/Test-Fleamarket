<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Product;
use App\Http\Requests\ExhibitionRequest;


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

    public function store(ExhibitionRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->explanation = $request->input('explanation');
        $product->category_id = $request->input('category_id');
        $product->state = $request->input('state');
        $product->price = $request->input('price');
        $product->user_id = auth()->id(); 
        $product->save();
        return redirect()->route('index');
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
        $product = Product::findOrFail($id);
        return view ('purchase', compact('user','product'));
    }

    public function soldout(Request $request, $product_id)
    {
        $user = auth()->user();
        $product = Product::findOrFail($product_id);
        $product->is_sold_out = true;
        $product->save();
        return redirect()->route('favorite');
    }
    
}
