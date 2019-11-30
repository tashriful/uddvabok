@extends('home.layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div style="background-color:#FFFFFF;" class='container margin-top-20'>
  
  @include('home.layouts.success')
   
          <div style="background-color:" class="row">
            @foreach ($products as $product)

            <div class="col-md-4">
               
                <div class="card-body">
                    <div class="card"> @foreach ( $product->images as $image )
                        <img style="height:200px; width:300px; " class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image) }}" height="" width="" alt="Card image">
        @endforeach <div class="card-body">
                  <a href="{{  route('home.productDetails' ,$product->id) }}"><h4 class="card-title"> {{ $product->title }} </h4></a>
                  <p class="card-text">{{ $product->price }}</p>
                  @include('home.pages.orderButton')
                </div>
              </div>
            </div>
              </div>
            
            @endforeach

            

          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection