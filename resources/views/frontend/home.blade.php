@extends('frontend.layouts.master')

@section('content')
@include('frontend.partials.category')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          @foreach($products as $product )
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
                <a href="{{ route('product.details', $product->slug) }}" target="__blank"><img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->slug }}"></a>
            <div class="card-body">
                <a href="{{ route('product.details', $product->slug)}}" target="__blank"><p class="card-text">{{ $product->title }}</p></a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <form action="{{ route('cart.add') }}" method="post">
                        @csrf
                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                      <button type="submit" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                    </form>

                </div>
                <small class="text-muted">
                    @if($product->sale_price !== null && $product->sale_price > 0)
                    BDT: <strike>{{ $product->price }}</strike><br>
                    BDT:  {{ $product->sale_price }}
                    @else
                    BDT:  {{ $product->price }}
                    @endif
                </small>
              </div>
            </div>
          </div>
        </div>
         @endforeach
        </div>
        {{ $products->render() }}
      </div>
    </div>
  </div>



@endsection
