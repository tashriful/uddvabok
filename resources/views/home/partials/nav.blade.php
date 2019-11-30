 <div class="container-fluid" style="background-color:white !important">
 <br>
 <br><br><br><br>
</div>
 <div class="container-fluid" style="background-color:white !important#bb2525">

    <nav class="navbar fixed-top navbar-expand-md bg-light navbar-light"  style="border: 2px solid #E0E0E0">
  <!-- Brand -->
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{URL::asset('/images/logo/logo.png')}}" height="90" width="100"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <a class="nav-link" href="{{route('home')}}"><b></b><h5 style="color:#101010 !important">All Products</h5></b></a>
     @foreach($category as $category)
      <li class="nav-item">
          <a class="nav-link" href="{{route('home.categoryProduct' , $category->id)}}"><b></b><h5 style="color:#101010 !important">{{ $category->name }}</h5></b></a>
      </li>
      @endforeach
      
    </ul>
  
  


         <ul class="navbar-nav ml-auto">
             @guest
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
             @if (Route::has('register'))
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>
             @endif
             @else
             <li class="nav-item dropdown">
                
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="{{ route('home.userDashboard') }}" >
                         {{ __('My Dashboard') }}
                     </a>
                    
                    
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </li>
             @endguest
         </ul>
     </div> 
</nav>
     <!-- End Navbar Part -->

 </div>

