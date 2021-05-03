<html>

    <head>
        <title>How to Create a Custom 404 Page in Laravel 7</title>
        <meta name="keywords"
            content="404 iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <link href="{{ asset('css/404.css') }}" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body style="background: -webkit-linear-gradient(left, #ea236f8f, #20acd286);">
        <!--start-wrap--->
        <div class="wrap">
            <!---start-header---->
            <div class="header" style="background: #182430">
                <div class="logo">
                    <img src="{{asset('assets/images/logo/logo.png')}}"/>
                </div>
            </div>
            <!---End-header---->
            <!--start-content------>
            <div class="content">
                <img src="{{asset('assets/images/404/404.svg')}}" title="error" style="height: 39vh;
    margin-bottom: 2rem;" />
                <p><span><label>O</label>hh.....</span>You Requested the page that is no longer There.</p>
                <a href="/">Back To Home</a>
            </div>
            <!--End-Cotent------>
        </div>
        <!--End-wrap--->
    </body>

</html>