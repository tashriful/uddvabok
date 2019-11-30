<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
      
      body {
   background-color:#F5F5F5 !important;

}
    
  </style>
  <title>Home</title>

  @include('home.partials.styles')
   @include('home.partials.scripts')
</head>
<body>

  <div class="wrapper">

    @include('home.partials.nav')
    @yield('content')
    @include('home.partials.footer')

  </div>


  </body>
</html>