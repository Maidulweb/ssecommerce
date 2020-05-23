@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="h2-padd">
                <h2>Register</h2>
            </div>
            @include('frontend.partials.message')
            <div class="login-register">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="email" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Full Name">
                      </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" name="email" value="{{ old('email') }}" class="form-control"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="email" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Enter Phone Number">
                      </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

</div>
@endsection
