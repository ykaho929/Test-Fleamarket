@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="product-contents">
        @foreach($products as $product)
            <div class="product-content">
                <a href="/item/{{$product->id}}" class="product-link">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="detail"/>
                </a>
                <div class="detail-content">      
                    <p>{{$product->name}}</p>              
                </div>
            </div>
        @endforeach
    </div>
@endsection
