@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
    <div class="purchase-contents">
        <div class="left-content">
            <div class="product-items">
                <div class="product-item">
                    <div class="item--image">商品画像</div>
                </div>
                <div class="product-item">
                    <div class="item--name">商品名</div>
                </div>
            </div>
            <div class="payment-items">
                <div class="payment-item">
                    <div class="item--label">支払い方法</div>
                </div>
                <div class="payment-item">
                    <div class="item--data">
                    <!-- テーブルできたら、１はコンビニ、２はクレカ     -->
                    </div>
                    <input type="hidden" name="payment" valuse="">
                </div>
            </div>
            <div class="shipping-address-items">
                <div class="address-item">
                    <div class="item--label">配送先</div>
                    <a href="/purchase/address">変更する</a>
                </div>
                <div class="address-item">
                    <div class="item--postcode">〒XXX-YYYY</div>
                    <div class="item--address">ここには住所と建物が入ります</div>
                </div>
            </div>
        </div>
        <div class="right-content">
            <tr class="purchase-form__row">
                <th class="purchase-form__label">商品代金</th>
                <td class="purchase-form__data">￥47,000</td>
            </tr>
            <tr class="purchase-form__row">
                <th class="purchase-form__label">支払い方法</th>
                <td class="purchase-form__data">コンビニ払い</td>
            </tr>
            <div class="purchase-item">
                <button type="submit" class="purchase">購入する</button>
            </div>
    </div>
@endsection