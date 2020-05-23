@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="h2-padd">
        <h2>Login</h2>
    </div>
    <div class="login-register">
        <form action="" method="post">
            @csrf
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
