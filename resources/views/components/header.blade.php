<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Journey Ease</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{URL::asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{URL::asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{URL::asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
      <!--[if lt IE 9]>
      <script src="{{URL::asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
      <script src="{{URL::asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{URL::asset('images/Logo/logo.png')}}" width="120px" style="position:relative; z-index:1400 !important;" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">

                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ URL::to('About') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('OurRoom')}}">Room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('Gallery')}}">Vehicle</a>
                              </li>
                              @if(session()->has('id'))
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('mybookings')}}">Bookings</a>
                              </li> @endif
                              @if(session()->has('id'))
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('myprofile')}}">My profile</a>
                              </li> @endif
                              @if(session()->has('id'))
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('logout')}}">Logout</a>
                              </li>
                              @else
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('login')}}">Sigin</a>
                              </li>
                             @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
