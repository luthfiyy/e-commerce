@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')
            
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('user.index')}}">Home</a>
                            <a href="{{route('shop.index')}}">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{ route('add.checkout', $carts->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input type="text" name="name" value="{{$user->name}}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" value="{{$user->phone}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" name="address" value="{{$user->address}}">
                                </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Payment<span>*</span></p>
                                        <select name="payment" id="">
                                            <option value="COD">Cash On Delivery</option>
                                            <option value="Transfer">Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Expedition<span>*</span></p>
                                        <select name="expedition" id="">
                                            <option value="JNE">JNE</option>
                                            <option value="JNT">JNT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product</div>
                                <ul class="checkout__total__products">
                                    <li><input type="hidden" name="product_id" value="{{$carts->product_id}}">{{$carts->product_title}}</li>
                                    <input type="hidden" name="user_id" value="{{$carts->user_id}}">
                                </ul>
                                <div class="checkout__order__products">Quantity</div>
                                <ul class="checkout__total__products">
                                    <li><input type="hidden" name="quantity" name="quantity" value="{{$carts->quantity}}" id="">{{$carts->quantity}}</li>
                                </ul>
                                <div class="checkout__order__products">Total</div>
                                <ul class="checkout__total__products">
                                    <li><input type="hidden" name="price" id="" value="{{$carts->price*$carts->quantity}}">Rp {{ number_format($carts->price * $carts->quantity, 0, ',', '.') }},-</li>
                                </ul>
                                <button type="submit" class="site-btn">Checkout</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection