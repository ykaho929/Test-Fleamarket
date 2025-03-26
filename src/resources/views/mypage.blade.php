@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="mypage__content">
        <div class="mypage__tabs">
            <a href="#redommend">おすすめ</a>
            <a href="#mylist">マイリスト</a>
        </div>

        <div class="mypage__inner">
            <div class="recommend__inner">
                <div id="favorites" class="tab-content {{ request()->routeIs('mypage') && !request()->has('selling') ? '' : '' }}">
                <h2>お気に入り商品</h2>
                @forelse ($favorites as $favorite)
                    
                    <p>{{ $favorite->product->name }}</p>
                @endforelse
            </div>
            <div class="recommend__inner">
                <div id="favorites" class="tab-content {{ request()->routeIs('mypage') && !request()->has('selling') ? '' : '' }}">
                <h2>マイリスト</h2>
                @forelse ($favorites as $favorite)
                    
                    <p>{{ $favorite->product->name }}</p>
                @endforelse
            </div>
        </div>
</div>
@endsection