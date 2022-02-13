@extends('layout.app')
@section('title')
    Show Page
@endsection
@section('content')
    <div class="text-center text-info display-4 mb-3">Show Page</div>
    <a href="{{ route('create') }}" class="btn btn-info">Add New</a>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron">
                            <h1>{{ $product->name }}</h1>
                            <p>{{ $product->description }}</p>
                            <p>{{ $product->price }}</p>
                            <p> Quntity:{{ $product->quantity }}</p>
                            <a href="{{ route('edit',['id'=>$product->id]) }}" class="btn btn-sm-primary">Edit</a>
                            <a href="{{ route('destroy',['id'=>$product->id]) }}" class="btn btn-sm-danger">Delete</a>
                        </div>
        </div>
    </div>
@endsection