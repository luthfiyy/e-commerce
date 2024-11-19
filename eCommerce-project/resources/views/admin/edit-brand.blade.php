@extends('layouts.base')  

@section('title', 'Dashboard')

@section('content')
    <h2>Edit Brand</h2>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    
<div class="main-panel">
    <div class="content-wrapper p-4">
        <form action="{{ route('update-brand', $brands->id) }}" method="POST">
            @csrf
            <p class="title">Edit Brand</p>
        
            <label>
                <input class="input" type="text" placeholder="" required="" name="name" value="{{ $brands->name}}" >
                <span>Brand Name:</span>
            </label>
            <label>
                <input class="input" type="text" placeholder="" required="" name="name" value="{{ $brands->slug}}" >
                <span>Brand Slug:</span>
            </label>
            <button type="submit" class="btn btn-primary">Update Brand</button>
        </form>
    </div>
</div>
@endsection
