<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Uddvabok | Home</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> -->

    <!-- Font awesome -->
    <link href={{ asset('css/home/admin_style.css')}} rel="stylesheet">
    <!-- Bootstrap -->
    <link href={{ asset('css/home/bootstrap.css')}} rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href={{ asset('css/home/slick.css')}}>          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href={{ asset('css/home/jquery.fancybox.css')}} type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href={{ asset('css/home/theme-color/default-theme.css')}} rel="stylesheet">          

    <!-- Main style sheet -->
    <link href={{ asset('css/home/style.css')}} rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>contact.uddvabok@gmail.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>01880253217</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          
          <!-- IMG BASED LOGO  -->
         <a  class="" href="index.html"><img style="width:220px;height:110px;margin-bottom:0px;" src="{{ asset('images/home/logo.png') }}" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="{{route('index')}}">Home</a></li>            
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="course.html">Course Archive</a></li>                
                <li><a href="course-detail.html">Course Detail</a></li>                
              </ul>
            </li>  -->  
			<li><a href="#mu-about-us">About Us</a></li>
            <li><a href="#mu-category">Business Category</a></li>
            <li><a href="#mu-features">Features</a></li>          
            <li><a href="#mu-footer">Contact</a></li>
			<li><a href="{{ route('login') }}">Login</a></li>
			<li><a href="{{ route('register') }}">Sign Up</a></li>
            <!-- <li><a href="404.html">404 Page</a></li>               
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> -->
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <!-- <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{ asset('images/home/slider/cov1.png') }}" alt="img">
        </figure>
      </div>
      <!-- <div class="mu-slider-content">
        <h4>Welcome To Varsity</h4>
        <span></span>
        <h2>We Will Help You To Learn</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div> -->
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{ asset('images/home/slider/cov2.jpg') }}" alt="img">
        </figure>
      </div>
      <!-- <div class="mu-slider-content">
        <h4>Premiumu Quality Free Template</h4>
        <span></span>
        <h2>Best Education Template Ever</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div> -->
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{ asset('images/home/slider/cov3.bmp') }}" alt="img">
        </figure>
      </div>
     <!--  <div class="mu-slider-content">
        <h4>Exclusivly For Education</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div> -->
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Best Service</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Free Delivery</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Huge Products</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="mu-about-us-center">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>উদ্ভাবক সম্পর্কে বিস্তারিত</h2>              
                  </div>
                  <!-- End Title -->
                  সম্ভাবনাময় আগামীর বাংলাদেশকে যারা নেতৃত্ব দিবে,তাদের জন্য উদ্ভাবক একটি প্ল্যাটফর্ম। দেশে প্রায় ৪ কোটি ৭৩ লাখ মানুষ বেকার অবস্থায় জীবন ধারণ করছে,  এই বেকারত্বের হার দিন দিন বাড়ছে। আমরা কর্মসংস্থানের অভাবে নিজেকে পরিবার,সমাজ তথা দেশের বোঝা হিসেবে পতিণত করছি। চাকরির আশায় বিভিন্ন প্রতিষ্ঠানে ইন্টারভিউ দিতে দিতে হতাশ হয়ে পরেছি তবুও চাকরি পাচ্ছি না। আমরা কেনো চাকরির আশায় সময় নস্ট করবো!  স্কুল,কলেজ ও বিশ্ববিদ্যালয় পড়ুয়া শিক্ষার্থীগণ অধ্যাবসায় কালিন সহজে প্রতি মাসে ২০-৩০ হাজার টাকা ইনকান করতে পারে,তাও নিজের ব্যবসায় থেকে। নিজেই নিজের ব্যবসা গড়ে তুলুন। আপনার চাকরি খুঁজা লাগবে না, আপনিই অন্যকে চাকরি দিবেন। মাত্র ১০০০ টাকায় ব্যবসা যেখানে কল্পনাতীত, সেখানে উদ্ভাবক সেই কল্পনাতীত কাজকে সত্যিতে রুপান্তর করেছে। আজই, উদ্ভাবকে রেজিস্ট্রেশন করে নিজের ব্যবসাটা শুরু করে দিন এবং পরিবার,সমাজ এবং দেশকে সামনের দিকে এগিয়ে নিয়ে যান । মনে রাখবেন, ব্যবসায়ী হতে শিক্ষাগত যোগ্যতা লাগে না, লাগবে আপনার মেধা আর পরিশ্রম।  সবাই যখন আপনাকে তাচ্ছিল্য করছে,তখন নিজেকে প্রমাণ করার একটি প্ল্যাটফর্ম হচ্ছে উদ্ভাবক। আপনাদের সকল সহযোগিতায় উদ্ভাবক আপনাদের পাশে সব সময় আছে। আমাদের প্রধান উদ্দেশ্য  বেকার মুক্ত বাংলাদেশ, ইনশাআল্লাহ আপনাদের মাধ্যমেই আমরা আমাদের উদ্দেশ্য পূরণ করবো
                </div>
              </div>
              <!-- <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                  <img src="assets/img/about-us.jpg" alt="img">
                </a>                
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section style="margin-bottom: 30px;"id="mu-about-us-2">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
          </div>
        </div>
      </div>
      </section>
      
  
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">165</h4>
                  <p>Resellers</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">47</h4>
                  <p>Suppliers</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">4500</h4>
                  <p>Products</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  
  <div class="container-fluid" id="video" >
	<br>
<video  width="100%" height="540" controls>
<source src="{{ asset('videos/skyon.mp4') }}" type="video/mp4">
<source src="{{ asset('videos/skyon.ogg') }}" type="video/ogg">
  
</video><br><br>
	</div>
  
  <section style="margin-bottom: 30px;"id="mu-category">
  <div class="container-fluid"  id="bcategory2">
  

	<b><center><h1 style="font-size:50px;color:black;margin-bottom: 20px;">Start Your Own Business</h1></center></b><br>
<div class="row" style="background-image: url("/images/home/bcategory2.jpg");">
<div class="col-sm-3" style="height:50%;">
     <a href="e comReg.html"><img style="width:100%;height:70%;"  src="{{ asset('images/home/Presentation1.png') }}" alt="Chicago"></a>
    </div>
    <div id="it" class="col-sm-3" style="height:50%">
     <a href="it reg.html"><img style="width:100%;height:70%;"  src="{{ asset('images/home/2.png') }}" alt="Chicago"></a>
    </div>
     <div class="col-sm-3" style="height:50%;">
     <a href="proReg reg.html"><img style="width:100%;height:70%;"  src="{{ asset('images/home/3.png') }}"alt="Chicago"></a>
    </div>
    <div id="gar" class="col-sm-3" style="height:50%">
     <a href="gar reg.html"><img style="width:100%;height:70%;"  src="{{ asset('images/home/4.png') }}" alt="Chicago"></a>
    </div>
    </div>
   <div class="row">
<div class="col-sm-3" style="height:50%;">
     <a href="marketing reg.html"><img style="width:100%;height:70%;"  src="{{ asset('images/home/5.png') }}" alt="Chicago"></a>
    </div>
    <div id="it" class="col-sm-3" style="height:50%">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/7.png') }}" alt="Chicago"></a>
    </div>
     <div class="col-sm-3" style="height:50%;">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/8.png') }}" alt="Chicago"></a>
    </div>
    <div id="gar" class="col-sm-3" style="height:50%">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/9.png') }}" alt="Chicago"></a>
    </div>
    </div>
    
    <div class="row">
<div class="col-sm-3" style="height:50%;">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/10.png') }}" alt="Chicago"></a>
    </div>
    <div id="it" class="col-sm-3" style="height:50%">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/11.png') }}" alt="Chicago"></a>
    </div>
     <div class="col-sm-3" style="height:50%;">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/12.png') }}"alt="Chicago"></a>
    </div>
    <div id="gar" class="col-sm-3" style="height:50%">
     <a href="#"><img style="width:100%;height:70%;"  src="{{ asset('images/home/6.png') }}" alt="Chicago"></a>
    </div>
    </div>
    </div>
      </section>
  
  
  <section id="mu-features">
    <div  class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Our Features</h2>
              <p>Our features are</p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                   <span class="fa fa-first-order"></span>
                    <h4>Various kinds of Products</h4>
                    <p>We are giving various kinds of products.</p>
                    <!-- <a href="#">Read More</a> -->
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                   <span class="fa fa-first-order"></span>
                    <h4>Wholesale Price</h4>
                    <p>We are giving all products at wholesale rate.</p>
                    <!-- <a href="#">Read More</a> -->
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-first-order"></span>
                    <h4>Free Delivery</h4>
                    <p>We are giving free delivery all over Bangladesh.</p>
                    <!-- <a href="#">Read More</a> -->
                  </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-microphone"></span>
                    <h4>Audio Lessons</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Video Lessons</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-certificate"></span>
                    <h4>Professional Certificate</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                    <a href="#">Read More</a>
                  </div>
                </div> 
              </div>
            </div>
            <!-- End features content
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start latest course section -->
  <!-- <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title 
            <div class="mu-title">
              <h2>Latest Courses</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
           <!-- <div id="mu-latest-course-slide" class="mu-latest-courses-content">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Drawing</a>
                      <span><i class="fa fa-clock-o"></i>90Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Engineering </a>
                      <span><i class="fa fa-clock-o"></i>75Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Academic</a>
                      <span><i class="fa fa-clock-o"></i>45Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Drawing</a>
                      <span><i class="fa fa-clock-o"></i>90Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Engineering </a>
                      <span><i class="fa fa-clock-o"></i>75Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Academic</a>
                      <span><i class="fa fa-clock-o"></i>45Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End latest course content 
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End latest course section -->

  <!-- Start our teacher -->
  <!--<section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title 
            <div class="mu-title">
              <h2>Our Teachers</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>
            </div>
            <!-- end title 
            <!-- begain our teacher content 
            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/teacher-01.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Brian Dean</h4>
                      <span>Math Teacher</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/teacher-02.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>James Hein</h4>
                      <span>Physics Teacher</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/teacher-03.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>Rebeca Michel</h4>
                      <span>English Teacher</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="assets/img/teachers/teacher-04.png" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4>John Doe</h4>
                      <span>Biology Teacher</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <!-- End our teacher content        
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- End our teacher -->

  <!-- Start testimonial 
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item 
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-1.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>John Doe</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item 
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-3.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Rebaca Michel</h4>
                  <span>Happy Parent</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item 
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-2.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Stev Smith</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- End testimonial -->

  <!-- Start from blog 
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title 
            <div class="mu-title">
              <h2>From Blog</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
            </div>
            <!-- end title -->  
            <!-- start from blog content   
            <div class="mu-from-blog-content">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/blog/blog-1.jpg" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">02 June 2016</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/blog/blog-2.jpg" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">02 June 2016</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/blog/blog-3.jpg" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">02 June 2016</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>
              </div>
            </div>     
            <!-- end from blog content   
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- End from blog -->

  <!-- Start footer -->
  <footer style="margin-top:100px;" id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Uddvabok</a></li>
                  <li><a href="">Payment and Delivery</a></li>
                  <li><a href="">Privacy & Policy</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Customer Service</h4>
                <ul>
					<li><a href="#">Faqs</a><br></li>
					<li><a href="contact.html">Contract Us</a><br></li>
					<li><a href="#">Returns</a><br></li>
					<li><a href="#">Site Map</a><br></li>
					<li><a href="#">How to Purchase Products</a>  </li>               
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Extras</h4>
				<ul>
					<li><a href="#">Brands</a></li>
					<li><a href="#">Gift Vouchers</a><br></li>
					<li><a href="#">Affiliates</a><br></li>
					<li><a href="#">Special</a> </li>    
				</ul>					
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Amtola,60 feet</p>
                  <p>Phone: 01880253217 </p>
                  <p>Website: www.uddvabok.com</p>
                  <p>Email: contact.uddvabok@gmail
.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="#" rel="nofollow">Niloy</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src={{ asset('js/home/jquery.min.js')}}></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src={{ asset('js/home/bootstrap.js')}}></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src={{ asset('js/home/slick.js')}}></script>
  <!-- Counter -->
  <script type="text/javascript" src={{ asset('js/home/waypoints.js')}}></script>
  <script type="text/javascript" src={{ asset('js/home/jquery.counterup.js')}}></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src={{ asset('js/home/jquery.mixitup.js')}}></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src={{ asset('js/home/jquery.fancybox.pack.js')}}></script>
  
  
  <!-- Custom js -->
  <script src={{ asset('js/home/custom.js')}}></script> 

  </body>
</html>