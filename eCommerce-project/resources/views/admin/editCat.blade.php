@extends('layouts.base')  

@section('title', 'Dashboard')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    
<div class="main-panel">
    <div class="content-wrapper p-4">
        <form action="{{ route('update_category', $categories->id) }}" method="POST">
            @csrf
            
            <p class="title">Edit Category</p>
                <label>
                    <input class="input" type="text" placeholder="" required="" name="name" value="{{ $categories->name}}">
                    <span>Name</span>
                </label>
                    
                <label>
                    <input class="input" type="text" placeholder="" required="" name="slug" value="{{ $categories->slug}}">
                    <span>Slug</span>
                </label>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>
@endsection
                    
                            
                    