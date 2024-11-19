@extends('layouts.base')

@section('title', 'Dashboard')

@section('content')
<div class="main-panel">
    <div class="content-wrapper p-4">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
            @endif
                <form class="form" method="POST" action="{{route('add.product')}}">
                    @csrf
                    <p class="title">Add Product</p>
                        <label>
                            <input class="input" type="text" placeholder="" required="" name="name">
                            <span>Name</span>
                        </label>
                
                        <label>
                            <input class="input" type="text" placeholder="" required="" name="slug">
                            <span>Slug</span>
                        </label>
                            
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="short_description">
                        <span>Sort Description</span>
                    </label> 
                        
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="description">
                        <span>Description</span>
                    </label>
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="regular_price">
                        <span>Regular Price</span>
                    </label>
                    <label>
                        <select name="stock_status" id="">
                            @foreach ($products as $product)
                            <option value="{{ $product->stock_status }}">{{ $product->stock_status }}</option>
                            @endforeach
                        </select>
                        <span>Stock Status</span>
                    </label>
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="quantity">
                        <span>Quantity</span>
                    </label>
                    <label>
                        <input class="input" type="file" placeholder="" required="" name="image">
                        <span>Image</span>
                    </label>
                    <label>
                        <select name="category_id" id="">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <span>Category </span>
                    </label>
                    <label>
                        <select name="brand_id" id="">
                            @foreach ( $brands as $brand )
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                        <span>Brand</span>
                    </label>
                    <button class="submit">Submit</button>
                </form>
    </div>
</div>
@endsection