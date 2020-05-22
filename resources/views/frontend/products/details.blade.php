@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="product-details-img">

                <img src="{{ $productdetails->image }}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-details-text">
                <h2>{{ $productdetails->title }}</h2>
                <p> @if($productdetails->sale_price !== null && $productdetails->sale_price > 0)
                    BDT: <strike>{{ $productdetails->price }}</strike><br>
                    BDT:   {{ $productdetails->sale_price }}
                    @else
                    BDT:  {{ $productdetails->price }}
                    @endif</p>
                <p>{{ $productdetails->description }}</p>
                <p>{{ $productdetails->slug }}</p>
                <form action="{{ route('cart.add') }}" method="post">
                    @csrf
                  <input type="hidden" name="product_id" value="{{ $productdetails->id }}">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
