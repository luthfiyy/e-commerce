@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')
{{-- <div class="main-panel">
    <div class="content-wrapper">
        <section style="background-color: #d2c9ff;">
            <div class="container p-5">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h2 class="fw-bold mb-0 text-black">Shopping Cart</h2>
                                                <h6 class="mb-0 text-muted">{{$count}} items</h6>
                                            </div>
                                            <hr class="my-4">
                                            @foreach ($carts as $cart)
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-1">
                                                        <a href="">
                                                            <i class="fa-regular fa-credit-card"
                                                                style="color: black; font-size: 30px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="{{asset('asset/user')}}/img/product/{{$cart->image}}"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-black mb-0">{{$cart->product_title}}</p>
                                                    </div>

                                                    <div class="col-1">
                                                        <p class="text-black mb-0">{{$cart->quantity}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6 class="mb-0 text-muted price-display">Rp {{ number_format($cart->price * $cart->quantity, 0, ',', '.') }},-</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="{{route('remove.cart', $cart->id)}}" class="text-muted" onclick="return confirm('Are You Sure To Remove This Cart?')"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="{{route('shop.index')}}"
                                                        class="text-body">
                                                        <i class="fas fa-long-arrow-alt-left me-2"></i> Back to
                                                        shop</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> --}}


<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('user.index')}}">Home</a>
                        <a href="{{route('shop.index')}}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                <td class="product__cart__item">
                                    {{-- <div>
                                        <input type="checkbox" name="products[]" value="{{ $cart->product_id }}">
                                    </div> --}}
                                    <div class="product__cart__item__pic">
                                        <img src="{{asset('asset/user')}}/img/product/{{$cart->image}}" width="120px">
                                    <div class="product__cart__item__text">
                                        <h6>{{$cart->product_title}}</h6>
                                        <h5>Rp {{ number_format($cart->price, 0, ',', '.') }},-</h5>
                                    </div>
                                </td>
                                <td class="quantity__item" style="padding-left: 35px">
                                    <p class="text-black">{{$cart->quantity}}</p>
                                </td>
                                <td class="cart__price">Rp {{ number_format($cart->price * $cart->quantity, 0, ',', '.') }},-</td>
                                <td class="cart__close"><a href="{{route('remove.cart', $cart->id)}}" onclick="return confirm('Are You Sure To Remove This Cart?')"><i class="fa fa-close"></i></a></td>
                                <td class="p-2">
                                    <a href="{{route('checkout', $cart->id)}}">
                                        <i class="fa-regular fa-credit-card"
                                            style="color: black; font-size: 30px;"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{route('shop.index')}}">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total Product <span>{{$count}} product</span></li>
                        <li>Total <span>Rp {{ number_format($sum, 0, ',', '.')}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->

@endsection
