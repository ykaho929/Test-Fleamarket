@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
    <div class="purchase-form">
        <form action="/maypage" method="POST">
        @csrf
        <div class="purchase-contents">
            <div class="left-content">
                <div class="product-items">
                    <div class="product-item">
                        <div class="item--image">
                            <img src="{{ asset($product->image) }}" alt="商品画像" class="product__item--image"/>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product__item--name">{{ $product->name }}</div>
                    </div>
                </div>
                <div class="payment-items">
                    <div class="payment-item">
                        <div class="item--label">支払い方法</div>
                    </div>
                    <div class="payment-item">
                        <div class="item--data">
                            <select name="payment" class="form-control">
                                <option value="">選択してください</option>
                                <option value="1">コンビニ払い</option>
                                <option value="2">クレジットカード</option>
                            </select>
                        </div>
                        <input type="hidden" name="payment" valuse="">
                    </div>
                </div>
                <div class="shipping-address-items">
                    <div class="address-item">
                        <div class="item--label">配送先</div>
                        <a href="/purchase/address/{{$product->id}}" class="address-link">変更する</a>
                    </div>
                    <div class="address-item">
                        <div class="item--postcode">{{$user->postcode}}</div>
                        <div class="item--address">{{$user->address}}{{$user->building}}</div>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <div class="purchase-item">
                    <table class="purchase-table">
                        <tr class="purchase-form__row">
                            <td class="purchase-form__label">商品代金</td>
                            <td class="purchase-form__data">￥{{$product->price}}</td>
                        </tr>
                        <tr class="purchase-form__row">
                            <td class="purchase-form__label">支払い方法</td>
                            <td class="purchase-form__data">コンビニ払い</td>
                        </tr>
                    </table>
                </div>
                <div class="purchase-item">
                    <button type="submit" class="purchase" 
                    {{ $product->is_sold_out ? 'disabled' : '' }}>
                    {{ $product->is_sold_out ? '売り切れ' : '購入する' }}
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection