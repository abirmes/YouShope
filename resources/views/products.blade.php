@extends('layout')
@section('content')    
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="https://as2.ftcdn.net/jpg/03/87/95/19/1000_F_387951958_xEBphJiddszfAlcHaxOKdywRUfH2iTnW.webp"  alt="">
                <div class="caption">
                    <h4>{{ $product->titre }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price: </strong> {{ $product->prix }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection