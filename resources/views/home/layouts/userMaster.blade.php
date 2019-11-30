<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>

  @include('home.partials.styles')
   @include('home.partials.scripts')
</head>
<body>
  
  <div class="wrapper">

    @include('home.partials.nav')
  
    

  </div>
   <div class='container-fluid margin-top-20'>
      

      <div style="background-color:" class="row">
          <div class="col-md-3">
              <div class="list-group"> 
                  <a href="{{ route('home.userDashboard') }}" class="list-group-item list-group-item-action {{  Route::is('home.userDashboard') ? 'active' : ''}} "  >Dashboard</a>
                  <a href="{{ route('home.userProfile') }}" class="list-group-item list-group-item-action {{  Route::is('home.userProfile') ? 'active' : ''}} ">Profile</a>
                  <a href="{{ route('home.userOrder') }}" class="list-group-item list-group-item-action {{  Route::is('home.userOrder') ? 'active' : ''}} ">Ordered items</a>
                  <a href="{{ route('home.account') }}" class="list-group-item list-group-item-action {{  Route::is('home.account') ? 'active' : ''}} ">Accounts</a>
              </div>

          </div>

          <div style="" class="col-md-9">
             <div class="card card-body">

             @yield('sub_content');
             </div>
          
        </div>
    </div>
     @include('home.partials.footer')
</div>
  
  

  


  </body>
</html>