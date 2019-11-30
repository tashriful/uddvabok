@extends('home.layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">
      
      </div>

      <div class="col-md-8">
      <h1>Searched Products</h1>
       @foreach($search as $search)
       
       {{ $search->title }}
        
        @endforeach
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection