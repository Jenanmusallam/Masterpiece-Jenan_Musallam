<!-- Footer #1
============================================= -->
<footer id="footer" class="footer footer-1 bg-white">
    <!-- Widget Section
	============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 widget--about">
                    <div class="widget--content">
                        <div class="footer--logo">
                            <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo">
                        </div>
                        <p>Jordan-Amman</p>
                        <div class="footer--contact">
                            <ul class="list-unstyled mb-0">
                                <li>+962 770 637 014</li>
                                <li><a href="mailto:Jenan@Farhaty.com">Jenan@Farhaty.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-2 end -->
                <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links">
                    <div class="widget--title">
                        <h5>Company</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{asset('/')}}">Home</a></li>
                            <li><a href="{{asset('about')}}">About us</a></li>
                            <li><a href="{{asset('CategoryPublic')}}">City</a></li>
                            <li><a href="{{asset('HallsPublic')}}">Halls</a></li>
                            <li><a href="{{asset('ContactSite')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-2 end -->
                <div class="col-xs-12 col-sm-3 col-md-2 widget--links">
                    <div class="widget--title">
                        <h5>Learn More</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
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
                    </div>
                </div>
                <!-- .col-md-2 end -->
                <div class="col-xs-12 col-sm-12 col-md-4 widget--newsletter">
                    <div class="widget--title">
                        <h5>send massage</h5>
                    </div>
                    <div class="widget--content">
                        <form class="newsletter--form mb-40" style="width: 14vw; left: 5rem;">
                            <input type="email" class="form-control" readonly>
                            <button type="submit"><a href="{{asset('ContactSite')}}"><i class="fa fa-arrow-right"
                                        style="font-size: 2rem;"></i></a></button>
                        </form>
                        <h6>Get In Touch</h6>
                        <div class="social-icons">
                            <a href="https://github.com/Jenanmusallam"><i class="fa fa-github"></i></a>
                            <a href="https://www.facebook.com/jenan.musallam"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/in/jenan-musallam/"><i
                                    class="fa fa-linkedin-square"></i></a>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 end -->

            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->

    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright text-center">
        <div class="container">
            <div class="row footer--bar">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <span>© 2021 Jenan Musallam</a>, All Rights
                        Reserved.</span>
                </div>

            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>

</html>