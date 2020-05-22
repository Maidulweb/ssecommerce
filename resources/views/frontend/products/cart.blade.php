@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <h2 class="h2-padd">Your Cart Details</h2>
    @if(Session::has('message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
@endif

@if(empty($cart))
<div class="alert alert-success">Please add products</div>
@else
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
              $i = 1;
            @endphp
            @foreach($cart as $key => $cart_details)
          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $cart_details['title'] }}</td>
            <td>{{ $cart_details['unit_price'] }}</td>
            <td><input type="number" name="quantity" value="{{ $cart_details['quantity'] }}"></td>
            <td>BDT: {{ $cart_details['total_price'] }}</td>
            <td><form action="{{ route('cart.remove') }}" method="post">
                @csrf
              <input type="hidden" name="product_id" value="{{ $key }}">
              <button type="submit" class="btn btn-sm btn-outline-secondary">Remove</button>
            </form></td>
          </tr>
          @endforeach
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>BDT: {{ number_format($total, 2) }}</td>
          </tr>
        </tbody>
      </table>
      <div class="text-right">
        <a href="{{ route('cart.clear') }}" class="btn btn-lg btn-danger">Clear all cart</a>
      </div>
      @endif
</div>
@endsection
