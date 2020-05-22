@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <h2 class="h2-padd">Your Cart Details</h2>
    @if(Session::has('message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
@endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
              $i = 1;
            @endphp
            @foreach($cart as $cart_details)
          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $cart_details['title'] }}</td>
            <td>{{ $cart_details['quantity'] }}</td>
            <td>{{ $cart_details['price'] }}</td>
            <td>Remove</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
