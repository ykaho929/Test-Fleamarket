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

    public function register ()
    {
        $user = auth()->user();
        return view('profile',compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        User::find($user->id)->update([
            'image' => $request->input('image'),
            'name' => $request->input('name'),
            'postcode' => $request->input('postcode'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
        ]);
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
