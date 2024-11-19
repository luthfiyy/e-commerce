@extends('layouts.base')

@section('title', 'Dashboard')

@section('content')
<div class="main-panel">
    <div class="content-wrapper p-4">
                <form class="form" method="POST" action="{{route('update.product', $products->id)}}">
                    @csrf
                    <p class="title">Add Product</p>
                        <label>
                            <input class="input" type="text" placeholder="" required="" name="name" value="{{ $products->name}}">
                            <span>Name</span>
                        </label>
                
                        <label>
                            <input class="input" type="text" placeholder="" required="" name="slug" value="{{ $products->slug}}">
                            <span>Slug</span>
                        </label>
                            
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="short_description" value="{{ $products->short_description}}">
                        <span>Sort Description</span>
                    </label> 
                        
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="description" value="{{ $products->description}}">
                        <span>Description</span>
                    </label>
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="regular_price" value="{{ $products->regular_price}}">
                        <span>Regular Price</span>
                    </label>
                    <label>
                            <select name="stock_status" id="stock_status">
                                <option value=" {{ $products->stock_status}}">{{$products->stock_status}}</option>
                            </select>             
                        <span>Stock Status</span>
                    </label>
                    <label>
                        <input class="input" type="text" placeholder="" required="" name="quantity" value="{{ $products->quantity}}">
                        <span>Quantity</span>
                    </label>
                    <label>
                        <input class="input" type="file" placeholder="" required="" name="image" value="{{ $products->image}}">
                        <span>Image</span>
                    </label>
                    <label>
                        <select name="category_id" id="">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}</option>
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