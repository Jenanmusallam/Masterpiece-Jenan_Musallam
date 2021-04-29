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
            content="admin template, Farhaty admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - Farhaty - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('adminAssets/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->

    <body class="login" style="margin: 0;
    padding: 0;">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <div class="my-auto">
                        <img alt="Farhaty HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                            src="{{asset('adminAssets/dist/images/illustration.svg')}}" style="width: 70%;">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Sign in to your Admin Account.
                        </div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div
                        class="my-auto mx-auto bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <a href="{{asset('/')}}">
                            <img alt="Farhaty HTML Admin Template" style="height: 25vh;margin: auto;"
                                src="{{asset('adminAssets/dist/images/logo1.png')}}">
                        </a>
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center ">
                            Sign In
                        </h2>
                        @if ($message = Session::get('Error'))
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <form action="login" method="POST">
                            {{ csrf_field() }}
                            <div class="intro-x mt-8">
                                <label>Email <span>*</span></label>
                                <input type="email" name="email"
                                    class="intro-x login__input input input--lg border border-gray-300 block"
                                    placeholder="Email">
                                @if ($errors->has('email'))
                                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                        data-feather="alert-octagon"
                                        class="w-6 h-6 mr-2"></i>{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="intro-x mt-8">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password"
                                    class="intro-x login__input input input--lg border border-gray-300 block mt-4"
                                    placeholder="Password">
                                @if ($errors->has('password'))
                                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                        data-feather="alert-octagon"
                                        class="w-6 h-6 mr-2"></i>{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="intro-x mt-5 xl:mt-8 text-center">
                                <button type="submit"
                                    class="button button--lg w-full text-white bg-theme-1 xl:mr-3">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('adminAssets/dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>

</html>