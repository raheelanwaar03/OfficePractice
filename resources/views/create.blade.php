@extends('layout.app')
@section('title')
    Create Page
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Create Page</h1>
            <hr style="width:300px"> 
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <span style="color: red">@error('name')
                                {{ $message }}
                            @enderror</span>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <span style="color: red">@error('price')
                                {{ $message }}
                            @enderror</span>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Product Price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Product Quantity</label>
                            <span style="color: red">@error('quantity')
                                {{ $message }}
                            @enderror</span>
                            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Product Quantity">
                        </div>
                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <span style="color:red">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Product Description">
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-block">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection