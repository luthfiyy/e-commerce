@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{route('user.index')}}">Home</a>
                            <a href="{{route('shop.index')}}">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg">
                                        <div style="text-align: center; width: 1133px;">
                                            <img src="{{ asset('asset/user/img/product/' . $products->image) }}">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$products->name}}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3>Rp {{ number_format($products->regular_price, 0, ',', '.') }},-</h3>
                            <ul style="list-style-type: none; padding-bottom: 10px;">
                                <li><span>Category:</span> {{$products->category->name}}</li>
                                <li><span>Brand:</span> {{$brands->name}}</li>
                            </ul>
                            <p>{{$products->description}}</p>
                            <div class="product__details__cart__option">
                                <form action="{{route('add.cart', $products->id)}}" method="post">
                                    @csrf
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="number" name="quantity" value="1" min="1">
                                        </div>
                                    </div>
                                    <button type="submit" class="primary-btn">Add to Cart</button>
                                </form>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

@endsection
