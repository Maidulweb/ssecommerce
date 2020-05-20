@extends('frontend.layouts.master');
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
                <p>{{ $productdetails->price }}</p>
                <p>{{ $productdetails->description }}</p>
                <p>{{ $productdetails->slug }}</p>
                <form action="">
                    <button>Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
