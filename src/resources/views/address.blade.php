@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
    <div class="address__content">
        <div class="address-form__heading">
            住所の変更
        </div>
        <form class="form" action="/purchase/{{$products->id}}" method="get">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                </div>
                <div class="form__group-content">
                    <div class=".form__group-input">
                        <input type="text" name="postcode" value="{{ old('postcode') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                </div>
                <div class="form__group-content">
                    <div class=".form__group-input">
                        <input type="text" name="address" value="{{ old('address') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class=".form__group-input">
                        <input type="text" name="building" value="{{ old('building') }}" />
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録する</button>
            </div>
        </form>
    </div>
@endsection
