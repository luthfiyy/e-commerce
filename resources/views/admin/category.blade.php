@extends('layouts.base')

@section('title', 'Dashboard')
    
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
            @endif
            <div class="p-5">
                <h3>Add Category</h3>
                <form action="{{route('add_category')}}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Category Name">
                    <input type="text" name="slug" placeholder="Category Slug">
                    <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                </form>
        </div>
        <div class="card mb-2 col-10 ms-4">
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('edit-category', $category->id)}}">Edit</a> |
                                <a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Category?')" href="{{route('delete_category', $category->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection