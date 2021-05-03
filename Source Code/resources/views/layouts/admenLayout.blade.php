<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->

    <head>
        <meta charset="utf-8">
        <link href="{{asset('adminAssets/dist/images/logo.png')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
            content="Farhaty admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords"
            content="admin template,Farhaty admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Admin Dashboard</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('adminAssets/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->

    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="{{asset('/admin')}}" class="flex mr-auto">
                    <img alt="Farhaty Tailwind HTML Admin Template" class="w-6"
                        src="{{asset('adminAssets/dist/images/logo.png')}}">
                </a>
                <a href="" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                        class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="{{asset('/admin')}}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Admin </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="{{asset('/admin/booking')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Booking <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{asset('/admin/booking')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('side-menu-crud-form')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{asset('login-login')}} class=" menu">
                        <div class="menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="menu__title"> Login </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{asset('side-menu-datepicker')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="{{asset('index')}}" class="side-menu">
                        <i data-feather="globe" class="mx-auto"></i>
                        <div class="side-menu__title"> Farhaty Website </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="{{asset('/admin')}}" class="intro-x flex items-center pl-5 pt-4"
                    style="background: RGB(46, 54, 73,0.5);">
                    <img alt="Farhaty Tailwind html Admin Template" class="w-40"
                        src="{{asset('adminAssets/dist/images/logo.png')}}">
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{asset('/admin')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Admin </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/admin/category')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="database" class="mx-auto"></i> </div>
                            <div class="side-menu__title"> Category </div>
                        </a>
                    </li>
                    </li>
                    <li>
                        <a href="{{asset('/admin/halls')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                            <div class="side-menu__title">Manage Halls </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/admin/hall')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">Manage Hall Single </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/admin/image')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">Manage Images Halls </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="{{asset('/admin/Customer')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users" class="mx-auto"></i> </div>
                            <div class="side-menu__title">Manage Customer </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/admin/Contact')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="link" class="mx-auto"></i> </div>
                            <div class="side-menu__title">View Contact </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/admin/booking')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title"> Booking </div>
                        </a>

                    </li>

                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="{{asset('index')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="globe" class="mx-auto"></i></div>
                            <div class="side-menu__title"> Farhaty Website </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('logout')}}" class="side-menu">
                            <div class="side-menu__icon"><i data-feather="power" class="mx-auto"></i> </div>
                            <div class="side-menu__title"> Logout</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{asset('admin')}}"
                            class="">Application</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="category_search_inner">
                                    <input type="text" class="search__input input placeholder-theme-13"
                                        placeholder="Search..." name="search">
                                    <i data-feather="search" class="search__icon"></i>
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Farhaty Tailwind HTML Admin Template" src="/images/default.png">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">Admin</div>
                                    <div class="text-xs text-theme-41">Backend Engineer</div>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="{{asset('logout')}}"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <!-- Main Page -->
                @yield('content')
                <!-- End Main Page -->
            </div>
            <!-- BEGIN: JS Assets-->
            <script
                src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places">
            </script>
            <script src="{{asset('adminAssets/dist/js/app.js')}}"></script>
            <!-- END: JS Assets-->
    </body>

</html>