@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="h2-padd">
        <h2>Checkout</h2>
    </div>
    <div class="alert alert-info">
        <p>You have to <a href="{{ route('login') }}">Login</a> first for complete your order.</p>
    </div>
</div>
@endsection
