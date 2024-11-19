@extends('layouts.base')

@section('title', 'Dashboard')
    
@section('content')
<main>
    <div class="container-fluid px-4">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
        @endif
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4 ms-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Short Description</th>
                            <th>Description</th>
                            <th>Regular Price</th>
                            <th>Stock Status</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->slug}}</td>
                            <td>{{$product->short_description}}</td>
                            <td>{{$product->description}}</td>
                            <td>${{$product->regular_price}}</td>
                            <td>{{$product->stock_status}}</td>x
                            <td>{{$product->quantity}}</td>
                            <td>
                                <img src="{{ asset('asset/user/img/product/' . $product->image) }}" alt="{{ $product->name }}" width="100px">
                            </td>
                            <td>{{$product->category_id}}</td>
                            <td>{{$product->brand_id}}</td>
                            <td>
                                <a href="{{route('edit.product', $product->id)}}" class="btn btn-primary">Edit</a>
                                <a onclick="return confirm('Are You Sure To Delete This Product?')" href="{{route('delete.product', $product->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</main>




@endsection