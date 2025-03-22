@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
    <div class="product__content">
        <div class="product-form__heading">
            <h2>商品の出品</h2>
        </div>
        <form class="form" action="/" method="get">
            @csrf
            <div class="form__group">
                <div class="form__group-content">
                    <div class="form__group--title">
                    <span class="form__label--item">商品画像</span>
                </div>
                    <output id="list" class="image_output"></output>
                    <input type="file" id="product_image" class="image" name="product_image">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--subtitle">
                    <h3>商品の詳細</h3>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">カテゴリー</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <!-- カテゴリーテーブル作成後 -->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">商品の状態</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <!-- 商品状態のテーブル作成後 -->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--subtitle">
                    <h3>商品名と説明</h3>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">商品名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" value="{{ old('neme') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">ブランド名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="brand" value="{{ old('brand') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">商品の説明</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="explanation" value="{{ old('explanation') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">販売価格</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="price" value="{{ old('price') }}" />
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">出品する</button>
            </div>
        </form>
    <div>
@endsection