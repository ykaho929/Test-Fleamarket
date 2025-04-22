@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
    <div class="profile__content">
        <div class="profile-form__heading">
            <h2>プロフィール設定</h2>
        </div>
        <form class="form" action="/mypage/profile" method="POST">
            @csrf
            <div class="form__group">
                <div class="form__group-content">
                    <output id="list" class="image_output"></output>
                    <input type="file" placeholder="{{$user->image}}" name="image" class="image" value="{{ old('image') }}">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">ユーザー名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" placeholder="{{$user->name}}" name="name" class="text" value="{{ old('name') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">郵便番号</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" placeholder="{{$user->postcode}}" name="postcode" class="text" value="{{ old('postcode') }}"/>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">住所</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" placeholder="{{$user->address}}" name="address" class="text" value="{{ old('address') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" placeholder="{{$user->building}}" name="building"  class="text" value="{{ old('building') }}" />
                    </div>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">登録する</button>
            </div>
        </form>
    <div>
@endsection