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
      <title>Journey Ease </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{URL::asset('admin/images/fevicon.png')}}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{URL::asset('admin/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{URL::asset('admin/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{URL::asset('admin/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{URL::asset('admin/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{URL::asset('admin/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{URL::asset('images/Logo/Logo.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{URL::asset('uploads/profiles/'.$details->picture)}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>
                              {{$details->fullname}}
                           </h6>
                           <p><span class="online_animation"></span> {{$details->type}}</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="{{URL::to('seller')}}">> <span>Home</span></a>
                           </li>

                        </ul>
                     </li>
                     <!-- <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li> -->
                     {{-- <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Users</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{URL::to('users/Customer')}}"> <span>Customers</span></a></li>
                           <li><a href="{{URL::to('users/Seller')}}"> <span>Business Owners</span></a></li>
                           <li><a href="{{URL::to('users/Driver')}}"> <span>Driver</span></a></li>

                        </ul>
                     </li> --}}
                     <li><a href="{{URL::to('hotel')}}"><i class="fa fa-table purple_color2"></i> <span>My Hotel</span></a></li>
                     <li><a href="{{URL::to('sellervehicals')}}"><i class="fa fa-table purple_color2"></i> <span>My Vehical</span></a></li>
                     <li><a href="{{URL::to('bookings/Room')}}"><i class="fa fa-table purple_color2"></i> <span>Bookings</span></a></li>
                     <li><a href="{{URL::to('drivers')}}"><i class="fa fa-user purple_color2"></i> <span>Drivers</span></a></li>

                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Authentication </span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="{{URL::to('sellerProfile')}}">> <span>Profile</span></a>
                           </li>

                           <li>
                              <a href="{{URL::to('/login')}}">> <span>Logout</span></a>
                           </li>

                        </ul>
                     </li>

                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        {{-- <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{URL::asset('uploads/profiles/'.$details->picture)}}" alt="#" /></a>
                        </div> --}}
                        <div class="right_topbar">
                           <div class="icon_info">

                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{URL::asset('uploads/profiles/'.$details->picture)}}" alt="#" /><span class="name_user">{{$details->fullname}}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="{{URL::to('sellerProfile')}}">My Profile </a>
                                       <a class="dropdown-item" href="{{URL::to('login')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
