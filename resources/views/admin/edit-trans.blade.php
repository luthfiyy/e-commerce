@extends('layouts.base')

@section('content')

<div class="main-panel">
    <div class="content-wrapper m-4">
        <form class="form" method="POST" action="{{route('update.trans', $transactions->id)}}">
            @csrf
            <p class="title">Edit Transaction</p>
                <label>
                    <input class="input" type="text" placeholder="" required="" name="name" value="{{ $transactions->name}}" disabled>
                    <span>Name</span>
                </label>
        
                <label>
                    <input class="input" type="email" placeholder="" required="" name="email" value="{{ $transactions->email}}" disabled>
                    <span>Email</span>
                </label>
                    
            <label>
                <input class="input" type="text" placeholder="" required="" name="phone" value="{{ $transactions->phone}}" disabled>
                <span>Phone</span>
            </label> 
                
            <label>
                <input class="input" type="text" placeholder="" required="" name="address" value="{{ $transactions->address}}" disabled>
                <span>Address</span>
            </label>
            <label>
                <input class="input" type="text" placeholder="" required="" name="product_id" value="{{ $transactions->product_id}}" disabled>
                <input class="input" type="hidden" placeholder="" required="" name="product_id" value="{{ $transactions->user_id}}" disabled>
                <span>Product ID</span>
            </label>
            <label>
                <input class="input" type="text" placeholder="" required="" name="quantity" value="{{ $transactions->quantity}}" disabled>
                <span>Quantity</span>
            </label>
            <label>
                <input class="input" type="text" placeholder="" required="" name="price" value="{{ $transactions->price}}" disabled>
                <span>Price</span>
            </label>
            <label>
                    <select name="payment" id="payment" disabled>
                        <option value="COD">Cash On Deliver</option>
                        <option value="TRANSFER">Transfer</option>
                    </select>             
                <span>Payment</span>
            </label>
            <label>
                <select name="expedition" id="expedition" disabled>
                    <option value="JNT">JNT</option>
                    <option value="JNE">JNE</option>
                </select>             
            <span>Expedition</span>
            </label>
            <label>
                <select name="status_transaction" id="status_transaction">
                    <option value="Already paid" {{ $transactions->status_transaction == 'Waiting for confirmation' ? 'selected' : '' }}>Waiting for confirmation</option>
                    <option value="Seller Processed" {{ $transactions->status_transaction == 'Seller Processed' ? 'selected' : '' }}>Seller Processed</option>
                    <option value="Being Shipped" {{ $transactions->status_transaction == 'Being Shipped' ? 'selected' : '' }}>Being Shipped</option>
                </select>
                <span>Status transaction</span>
            </label>    
            <button class="submit">Submit</button>
        </form>
    </div>
</div>



@endsection