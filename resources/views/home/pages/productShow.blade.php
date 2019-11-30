@extends('home.layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">
       @foreach ( $product->images as $image )
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image) }}" alt="Card image" >
                @endforeach
      </div>

      <div class="col-md-8">
       Name :<h2>{{ $product->title }}</h2>
       Price :<h5>{{ $product->price }}</h5>
        Quantity :<h5>{{ $product->quantity }}</h5>

       
        
      </div>


    </div>
    
    <div class="row">
      <div class="col-md-12"  style="margin-top:50px;">
   
         <h4>Description :</h4>
         <h5>{{ $product->description }}</h5>

      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection