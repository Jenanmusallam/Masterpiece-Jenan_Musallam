@include('component/nav')
        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>my properties</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">my properties</li>
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

        <!-- #my properties
============================================= -->
        <section id="my-properties" class="my-properties properties-list">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="edit--profile-area">
                            <ul class="edit--profile-links list-unstyled mb-0">
                                <li><a href="profile" class="active">Edit Profile</a></li>
                                <li><a href="book">My Properties</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <!-- .property-item #1 -->
                        <div class="property-item">
                            <div class="property--img">
                                <a href="#">
                        <img src="assets/images/properties/4.jpg" alt="property image" class="img-responsive">
                        <span class="property--status">For Sale</span>
						</a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title"><a href="#">House in Sheffleld Ave</a></h5>
                                    <p class="property--location">2003 Sheffield Ave, Anderson, IN 46011</p>
                                    <p class="property--price">$115,000</p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul>
                                        <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                        <li><span class="feature">Area:</span><span class="feature-num">2500 sq ft</span></li>

                                    </ul>
                                    <a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a>
                                </div>
                                <!-- .property-features end -->
                            </div>
                        </div>
                        <!-- .property item end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #my properties  end -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team and agents to start renting your Halls</h3>
                        <a href="contact" class="btn btn--primary">Contact</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->


 @include('component/footer')