@extends('layouts.user')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif

<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('user.index')}}">Home</a>
                        <a href="{{route('shop.index')}}">Shop</a>
                        <span>Order History</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="m-4 checkout ">
    <div class="container">
            <div class="checkout__order">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No Invoice</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Expedtion</th>
                        <th scope="col">Status Transaction</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($transactions as $trans)
                      <tr>
                        <th scope="row">{{$trans->invoice_number}}</th>
                        <td>{{$trans->product->name}}</td>
                        <td>{{$trans->quantity}}</td>
                        <td>Rp {{ number_format($trans->price, 0, ',', '.') }},-</td>
                        <td>{{$trans->payment}}</td>
                        <td>{{$trans->expedition}}</td>
                        <td>{{$trans->status_transaction}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
    </div>
</section>



@endsection