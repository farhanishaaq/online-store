@extends('layout.master')
@section('title')
    Farhan Store
@endsection
@section('content')
    <div class="card-group">
    @foreach ($products as $product)
    
    
    <div class="card col-lg-4">
        <img class="card-img-top" src="{{URL::asset($product->image_path)}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <p class="card-text d-inline-flex">Price: {{$product->price}} Rs </p>
            <a href="{{route('addToCart', ['id'=>$product->id])}}" class="btn btn-primary float-lg-right">Add To Cart</a>
        </div>
    </div>
     @endforeach

    
    </div>


@endsection