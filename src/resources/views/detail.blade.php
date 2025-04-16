@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <div class="product__content">
        <div class="content__product__group">
            <div class="group__item">
                    <div class="item--image">
                        <img src="{{ asset($products->image) }}" alt="商品画像" class="detail"/>
                    </div>
                </div>
            <div class="group__item">
                <div class="product__group--name" value="{{$products['name']}}"></div>
            </div>
            <div class="group__item">
                <div class="product__group--brand">{{$products->brand}}</div>
            </div>
            <div class="group__item">
                <div class="product__group--price">{{$products->price}}円</div>
            </div>
            <div class="group__item">
                <a href="/purchase/{{$products->id}}" class="purchase-link">購入手続へ</a>
            </div>
            <div class="group__item">
                <div class="item--title">商品の説明</div>
            </div>
            <div class="group__item">
                <div class="item--explain">{{$products->explain}}</div>
            </div>
            <div class="group__item">
                <div class="item--title">商品の情報</div>                
                    <div class="item--label">カテゴリー</div>
                        <div class="item--tag">{{$category->name}}</div>
                    <div class="item--label">商品の状態</div>
                        <div class="item--data">
                            @if($products['state'] == 1)
                            良好
                            @elseif($products['state'] == 2)
                            目立った傷や汚れなし
                            @elseif($products['state'] == 3)
                            やや傷や汚れあり
                            @elseif($products['state'] == 4)
                            状態が悪い
                            @endif
                        </div>
                    </div>    
                </div>            
            </div>
        </div>
        <div class="content__comment__group">
            <div class="group--item">
                <div class="item--title">コメント（１）</div>
            </div>
            <div class="group--item">
                <div class="item--form">
                    
                </div>
            <div class="group--item">
                <div class="item--button">
                        <button class="form__button-sbubmit">コメントを送信する</button>
                </div>
            </div>
        </div> 
    <div>
@endsection