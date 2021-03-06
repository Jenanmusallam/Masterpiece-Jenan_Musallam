<!DOCTYPE html>
<html dir="ltr" lang="en-US">

    <head>
        <!-- Document Meta
    ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--IE Compatibility Meta-->
        <meta name="author" content="Jenan Musallam" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Farhaty is The idea of reservation of halls for different types of events.">
        <meta name="keywords" content="Halls, Hall, Weeding, Graduation, Party, Event, Booking, Reservation, Happy">
        <link href="{{asset('assets/images/logo/logo.png')}}" rel="icon">

        <!-- Fonts
    ============================================= -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Stylesheets
    ============================================= -->
        <link href="{{asset('assets/css/external.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
        <title>Farhaty</title>
    </head>

    <body>
        <!-- Document Wrapper
	============================================= -->
        <div id="wrapper" class="wrapper clearfix">
            <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
                <nav id="primary-menu" class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="/">
                                <img class="logo-light" src="{{asset('assets/images/logo/logo.png')}}" alt="Land Logo">
                                <img class="logo-dark" src="{{asset('assets/images/logo/logo.png')}}" alt="Land Logo">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                            <ul class="nav navbar-nav nav-pos-center navbar-left">
                                <!-- Home Menu -->
                                <li class="active">
                                    <a href="{{asset('/')}}" class="dropdown-toggle menu-item">Home</a>
                                </li>
                                <!-- li end -->
                                <li><a href="{{asset('about')}}">About</a></li>
                                <!-- Profile Menu-->
                                <li class="has-dropdown">
                                    <a href="{{asset('CategoryPublic')}}">City</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($Categories as $categore)
                                        <li><a href="{{asset('CategoryPublic/'.$categore->id)}}">{{$categore->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!-- li end -->
                                <!-- Pages Menu-->
                                <li class="has-dropdown">
                                    <a href="{{asset('HallsPublic')}}">Halls</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($Halls as $Halls)
                                        <li><a href="{{asset('HallsPublic/'.$Halls->id)}}">{{$Halls->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!-- li end -->

                                <li><a href="{{asset('ContactSite')}}">Contact</a></li>
                            </ul>
                            <!-- Module Signup  -->
                            <div class="module module-login pull-left">
                                <ul style="list-style: none; display: flex;">
                                    @if(!isset(session("loginUser")['id']))
                                    <li><a class="btn-popup" href="{{asset('login')}}"><i class="fa fa-user"></i>
                                            &nbsp;
                                            Login</a></li>
                                    @else
                                    @if(session("loginUser")['role']=='customer')
                                    <li><a href="{{asset('userProfile')}}" class="btn-popup">My Account</a></li>
                                    <li><a href="{{asset('logout')}}" class="btn-popup">Logout</a></li>
                                    @else
                                    <li><a href="{{asset('admin')}}" class="btn-popup">Admin Dashboard</a></li>

                                    <li><a href="{{asset('logout')}}" class="btn-popup">Logout</a></li>
                                    @endif
                                    @endif
                                </ul>
                                {{-- <ul style="list-style: none;">
                                    @if(!isset(session("loginUser")['id']))
                                    <li><a href="{{asset('login')}}" class="btn-popup"> <i
                                    class="fa fa-user"></i>Login</a></li>
                                @else
                                @if(session("loginUser")['role']=='customer')
                                <li><a href="{{asset('userProfile')}}" class="btn-popup">My Account</a></li>
                                @else
                                <li><a href="{{asset('admin')}}">Admin Dashboard</a></li>
                                <li><a href="{{asset('logout')}}" class="btn-popup">Logout</a></li>
                                @endif
                                @endif
                                </ul> --}}
                            </div>
                            <!-- Module Consultation  -->
                            <div class="module module-property pull-left">
                                @if (!isset(session("loginUser")['id'])||session("loginUser")['role']=='customer')
                                <div class="mini_cart_box_wrapper text-right">
                                    <img src="{{asset('/assets/images/cart.png')}}" alt="Mini Cart Icon"
                                        style="height: 5vh;margin-top: 2rem;">
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-2 col-md-1">
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>

            </header>