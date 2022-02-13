@extends('layout.app')
@section('title')
    Login Page
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Login Page</h1>
            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            <hr style="width:300px"> 
        </div>
    </div>
        <div class="row justify-content-center align-items-center" style="height:60vh">
            <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('loginReq') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <span style="color: red">@error('email')
                                {{ $message }}
                            @enderror</span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <span style="color: red">@error('password')
                                {{ $message }}
                            @enderror</span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password ">
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection