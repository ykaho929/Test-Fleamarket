@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection
    
@section('content')
    <div class="product__content">
        <div class="content__product__group">
            <div class="group__item">
                    <div class="item--image">商品画像</div>
                </div>
            <div class="group__item">
                <div class="product__group--name">商品名がここに入る</div>
            </div>
            <div class="group__item">
                <div class="product__group--brand">ブランド名</div>
            </div>
            <div class="group__item">
                <div class="product__group--price">金額</div>
            </div>
            <div class="group__button">
                <button class="button-order">購入手続きへ</button>
            </div>
            <div class="group__item">
                <div class="item--title">商品の説明</div>
            </div>
            <div class="group__item">
                <div class="item--explain">内容</div>
            </div>
            <div class="group__item">
                <div class="item--title">商品の情報</div>                
                    <div class="item--label">カテゴリー</div>
                        <div class="item--tag">洋服</div>
                    <div class="item--label">商品の状態</div>
                    <div class="item--tag">良好</div>            
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