<!DOCTYPE html>
<html dir="ltr" lang="en-US">

    <head>
        <!-- Document Meta
    ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--IE Compatibility Meta-->
        <meta name="author" content="zytheme" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Real Estate html5 template">
        <link href="assets/images/logo/logo.png" rel="icon">

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

        <!-- Using Icon Laibrary(font awesome) -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" /> -->
        <!-- Document Title
    ============================================= -->
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
                                        <li><a href="CategoryPublic/{{$categore->id}}">{{$categore->name}}</a>
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
                                        <li><a href="HallsPublic/{{$Halls['id']}}">{{$Halls->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!-- li end -->

                                <li><a href="{{asset('ContactSite')}}">Contact</a></li>
                            </ul>
                            <!-- Module Signup  -->
                            <div class="module module-login pull-left">
                                <a class="btn-popup" data-toggle="modal" data-target="#signupModule"><i
                                        class="fa fa-user"></i> &nbsp; Login</a>
                                <div class="modal register-login-modal fade" tabindex="-1" role="dialog"
                                    id="signupModule">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs">
                                                        @if(!isset(session("loginUser")['id']))
                                                        {{-- <li><a href="{{asset('login')}}">Login</a></li> --}}
                                                        <li class="active"><a href="#login" data-toggle="tab">login</a>
                                                        </li>
                                                        <li><a href="#signup" data-toggle="tab">signup</a>
                                                            @else
                                                            @if(session("loginUser")['role']=='customer')
                                                        <li><a href="{{asset('my-account')}}">My Account</a></li>
                                                        @else
                                                        <li><a href="{{asset('admin')}}">Admin Dashboard</a></li>
                                                        <li><a href="{{asset('logout')}}">Logout</a></li>
                                                        @endif
                                                        @endif

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="login">
                                                            <div class="signup-form-container text-center">
                                                                <img
                                                                    src="{{asset('adminAssets/dist/images/logo.png')}}">
                                                                <form class="mb-0">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control"
                                                                            name="login-email" id="login-email"
                                                                            placeholder="Email Address">
                                                                    </div>
                                                                    <!-- .form-group end -->
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control"
                                                                            name="login-password" id="login-password"
                                                                            placeholder="Password">
                                                                    </div>
                                                                    <!-- .form-group end -->
                                                                    <input type="submit"
                                                                        class="btn btn--primary btn--block"
                                                                        value="Sign In">
                                                                </form>
                                                                <!-- form  end -->
                                                            </div>
                                                            <!-- .signup-form end -->
                                                        </div>
                                                        <div class="tab-pane" id="signup">
                                                            <img src="{{asset('adminAssets/dist/images/logo.png')}}"
                                                                style="margin:0 2rem;">
                                                            <form class="mb-0">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        name="full-name" id="full-name"
                                                                        placeholder="Full Name">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control"
                                                                        name="register-email" id="register-email"
                                                                        placeholder="Email Address">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control"
                                                                        name="register-password" id="register-password"
                                                                        placeholder="Password">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <input type="submit" class="btn btn--primary btn--block"
                                                                    value="Register">
                                                            </form>
                                                            <!-- form  end -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </div>
                            </div>
                            <!-- Module Consultation  -->
                            <div class="module module-property pull-left">
                                @if (!isset(session("loginUser")['id'])||session("loginUser")['role']=='customer')
                                <div class="mini_cart_box_wrapper text-right">
                                    <a href="{{asset('cart')}}">
                                        <img src="{{asset('/assets/images/cart.png')}}" alt="Mini Cart Icon" style="height: 5vh;
    margin-top: 2rem;">
                                        <?php
                                              $cart= session()->get("cart");
                                              if ($cart)
                                              $count = count($cart);
                                              else
                                              $count = 0;
                                              ?>
                                        <span class="cart_count">{{$count}}</span>
                                    </a>
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