@extends('layouts.base')

@section('content')
<div class="main-panel">
    <div class="content-wrapper p-4">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Payment</th>
                <th scope="col">Expedition</th>
                <th scope="col" class="text-center">Status Transaction</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $trans)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$trans->name}}</td>
                <td>{{$trans->email}}</td>
                <td>{{$trans->phone}}</td>
                <td>{{$trans->address}}</td>
                <td>{{$trans->product->name}}</td>
                <td>{{$trans->quantity}}</td>
                <td>{{$trans->price}}</td>
                <td>{{$trans->payment}}</td>
                <td>{{$trans->expedition}}</td>
                <td>{{$trans->status_transaction}}</td>
                <td><a href="{{route('edit.trans', $trans->id)}}" class="btn btn-primary">Edit</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection