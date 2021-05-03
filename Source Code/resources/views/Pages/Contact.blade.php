@include('component/nav')
<!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/images/page-titles/2.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Contact</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{asset('/')}}">Home</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Contact #1
============================================= -->
<section id="contact" class="contact contact-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="heading heading-2 mb-55">
                    <h2 class="heading--title">Get In Touch</h2>
                </div>
                <div class="contact-panel">
                    <h3>Address</h3>
                    <p>Jordan-Amman</p>
                </div>
                <!-- .contact-panel -->
                <div class="contact-panel">
                    <h3>Phone:</h3>
                    <p>+962 770 637 014</p>
                </div>
                <!-- .contact-panel -->
                <div class="contact-panel">
                    <h3>Email:</h3>
                    <p>Jenan@Farhaty.com</p>
                </div>
                <!-- .contact-panel -->
            </div>
            <!-- .col-md-3 end -->

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white">
                <img src="assets/images/page-titles/3.jpg" style="width:100%;height:370px;" alt="Background" />
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #contact  end -->

<!-- Contact #2
============================================= -->
<section id="contact2" class="contact contact-2 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 mb-50">
                    <h2 class="heading--title">Contact Us</h2>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                @if ($message = Session::get('success'))
                <div style="background:-webkit-linear-gradient(left, #ea236f8f, #20acd286);
    width: 20rem;
    height: 3rem;
    margin: auto;
    text-align: center;
    border-radius: 20px;
    padding: 5px;margin-bottom: 2rem;"> <i data-feather="thumbs-up"></i>
                    <p style="color: white;
    font-weight: 600;">{{ $message }}</p>
                </div>
                @endif
                <form action="" method="post" enctype="multipart/form-data" class="mb-0">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="contact-name">Your Name*</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="contact-name"
                                    required>
                                @if ($errors->has('name'))
                                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                        data-feather="alert-octagon"
                                        class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="contact-email">Email Address*</label>
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    id="contact-email" required>
                                @if ($errors->has('email'))
                                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                        data-feather="alert-octagon"
                                        class="w-6 h-6 mr-2"></i>{{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea class="form-control" placeholder="Your message" name="message" id="message"
                                    rows="2" required></textarea>
                                @if ($errors->has('message'))
                                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                        data-feather="alert-octagon"
                                        class="w-6 h-6 mr-2"></i>{{ $errors->first('message') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit" value="Send Message" name="submit" class="btn btn--data"
                                style="background-color:#20aad2; color:aliceblue;">
                        </div>
                        <!-- .col-md-12 -->
                    </div>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #contact2  end -->

@include('component/footer')