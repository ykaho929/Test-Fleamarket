@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
    <div class="product__content">
        <div class="product-form__heading">
            <h2>商品の出品</h2>
        </div>
        <form class="form" action="/sell" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form__group">
                <div class="form__group-content">
                    <div class="form__group--title">
                        <span class="form__label--item">商品画像</span>
                    </div>
                </div>
                    <output id="list" class="image_output"></output>
                    <input type="file" id="image" class="image" name="image" value="{{ old('image') }}">
                    @error('image')
                        <span class="input_error">
                            <p class="input_error_message">{{$errors->first('image')}}</p>
                        </span>
                    @enderror
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
                    @foreach($categories as $category)
                        <button class="form__category-option" name="category_id" type="button" value="{{ $category->id }}">
                            {{ $category->name }}
                        </button>                        
                    @endforeach
                    @error('category_id')
                    <span class='input_error'>
                             <p class="input_error_message">{{$errors->first('category_id')}}</p>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">商品の状態</span>
                </div>
                <select class="form__state-select" name="state" id="state">
                    <option value="" selected disabled>選択してください</option>
                    <option value="1" {{ old('state') == 1 ? 'selected' : '' }}>良好</option>
                    <option value="2" {{ old('state') == 2 ? 'selected' : '' }}>目立った傷や汚れなし</option>
                    <option value="3" {{ old('state') == 3 ? 'selected' : '' }}>やや傷や汚れあり</option>
                    <option value="4" {{ old('state') == 4 ? 'selected' : '' }}>状態が悪い</option>
                </select>
                @error('state')
                    <span class='input_error'>
                         <p class="input_error_message">{{$errors->first('state')}}</p>
                    </span>
                @enderror
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
                        <input type="text" name="name" value="{{ old('name') }}" />
                        @error('name')
                            <span class='input_error'>
                                <p class="input_error_message">{{$errors->first('name')}}</p>
                            </span>
                        @enderror
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
                        @error('explanation')
                            <span class='input_error'>
                                <p class="input_error_message">{{$errors->first('explanation')}}</p>
                            </span>
                        @enderror
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
                        @error('price')
                            <span class='input_error'>
                                <p class="input_error_message">{{$errors->first('price')}}</p>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">出品する</button>
            </div>
        </form>
    <div>
@endsection