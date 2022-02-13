@extends('layout.app')
@section('title')
Register Page
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Register Page</h1>
            <hr style="width:300px"> 
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('registerReq') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <span style="color: red">@error('fname')
                                {{ $message }}
                            @enderror</span>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <span style="color: red">@error('lname')
                                {{ $message }}
                            @enderror</span>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
                        </div>
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