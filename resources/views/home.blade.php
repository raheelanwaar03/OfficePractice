@extends('layout.app')
@section('title')
    Home Page
@endsection
@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center" >
        <h1 class="text-center text-info display-4 mb-3">Home Page</h1>
        <a href="{{ route('logout') }}" class="btn btn-outline-info">Logout</a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-4 mb-3">
            <a href="{{ route('create') }}" class="btn btn-outline-info btn-block">Add New Product</a>
        </div>
       
    </div>
    <div class="row">
        <div class="col-6">
                    @foreach ($products as $product)
                    <div class="jumbotron">
                            <a href="{{ route('show',['id'=>$product->id]) }}">
                                <h1>{{ $product->name }}</h1>
                            </a>
                            <p>{{ $product->description }}</p>
                            <p>{{ $product->price }}</p>
                            <p> Quntity:{{ $product->quantity }}</p>
                            <a href="{{ route('edit',['id'=>$product->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('destroy',['id'=>$product->id]) }}" class="btn btn-danger">Delete</a>
                        </div>
                        @endforeach
@endsection