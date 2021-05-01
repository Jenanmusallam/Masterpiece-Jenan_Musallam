@include('component/nav')
<!-- Hero Search
============================================= -->
<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="slider--content">
                    <div class="text-center">
                        <h1>Find Your Favorite Halls</h1>
                    </div>
                    <form class="mb-0">
                        <div class="form-box search-properties">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-location" id="select-location">
                                                <option>Select Location</option>
                                                <option>Amman</option>
                                                <option>Irbid</option>
                                                <option>Jerash</option>
                                                <option>Ajloun</option>
                                                <option>Mafraq</option>
                                                <option>Zarqa</option>
                                                <option>Madaba</option>
                                                <option>Aqaba</option>
                                                <option>Ma'an</option>
                                                <option>Tafilah</option>
                                                <option>Karak</option>
                                                <option>Balqa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <input type="date" value="<?php echo date('Y-m-d'); ?>"
                                                min="<?php echo date('Y-m-d'); ?>" class="btn btn--date" />
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-type" id="select-type">
                                                <option>Time</option>
                                                <option>2 PM</option>
                                                <option>4 PM</option>
                                                <option>6 PM</option>
                                                <option>8 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="filter">
                                        <p>
                                            <label for="amount">Price Range: </label>
                                            <input id="amount" type="text" class="amount" readonly>
                                        </p>
                                        <div class="slider-range"></div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <input type="submit" value="Search" id="select-beds" name="submit"
                                        class="btn btn--primary btn--block btn-sub">
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                    </form>
                </div>
            </div>
            <!-- .container  end -->

        </div>
        <!-- .slider-text end -->
    </div>
    <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true"
        data-dots="false" data-space="0" data-loop="true" data-speed="800">
        <!-- Slide #1 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/2.jpg" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
        <!-- Slide #2 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/6.jpg" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
        <!-- Slide #3 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/7.jpg" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
        <!-- Slide #4 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/8.jpg" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
    </div>
    <div id="test"></div><a href="#test">
        <div class="scroll-down"></div>
    </a>

</section>

<!-- #property-single-slider end -->

<!-- city-property
============================================= -->
<section id="city-property" class="city-property text-center pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title"> <i class="fas fa-map-marker-alt"></i>Property By City</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- City #1 -->
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="Category/">
                            <img src="assets/images/properties/city/1.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Amman</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="Category/">
                            <img src="assets/images/properties/city/2.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Irbid</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- City #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="Category/">
                            <img src="assets/images/properties/city/3.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Jerash</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #4 -->
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="Category">
                            <img src="assets/images/properties/city/4.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Dead Sea</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #4 -->
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="Category">
                            <img src="assets/images/properties/city/5.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Aqaba</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #4 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="Category">
                            <img src="assets/images/properties/city/6.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Al Zarqa</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .city-property end -->

<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Best Halls</h2>
                    <p class="heading--desc">The most popular halls in Jordan
                    </p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                    data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                    <!-- .property-item #1 -->
                    @foreach ($DiscountHalls as $Hall)
                    <div class="property-item">
                        <div class="property--img">
                            <a href="hall/{{$Hall['id']}}">
                                <img src="{{asset("images/".$Hall->image)}}
                                    alt=" property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="hall/{{$Hall['id']}}">{{$Hall->name}}</a></h5>
                                <p class="property--location">{{$Hall->description}}</p>
                                <p class="property--price">{{($Hall->price)-(($Hall->discount/100)*($Hall->price))}}JOD
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="https://www.hiamag.com/sites/default/files/styles/ph2_960_600/public/article/04/05/2017/5362626-945630472.jpg"
                                    alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                <p class="property--price">$70,000</p>
                            </div>
                        </div>
                    </div>
                    <!-- .property item end -->
                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-carousel  end  -->

<!-- Feature
============================================= -->
<section id="feature" class="feature feature-1 text-center bg-white pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Simple Steps</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- feature Panel #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/5.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Search For Real Halls</h3>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- feature Panel #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/6.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Select Your Favorite</h3>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- feature Panel #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="assets/images/features/icons/7.png" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Take Your Key</h3>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .feature end -->


@include('component/footer')