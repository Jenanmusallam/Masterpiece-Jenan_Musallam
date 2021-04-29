@include('component/nav')
<!-- map
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="assets/images/background/category.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Category</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Halls</li>
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
<!-- #map end -->

<!-- properties-grid
============================================= -->
<section id="properties-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- widget property city =============================-->
                <div class="widget widget-property">
                    <div class="widget--title">
                        <h5>Halls By City</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
                            @foreach ($Categories as $Category)
                            <li> <a href="{{asset('CategoryPublic/'.$Category->id)}}">{{$Category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- . widget property city end -->

                <!-- widget featured property =============================-->
                <div class="widget widget-featured-property">
                    <div class="widget--title">
                        <h5>Discount Halls</h5>
                    </div>
                    <div class="widget--content">
                        <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false"
                            data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            @foreach ($DiscountHalls as $Discount)
                            <div class="property-item">
                                <div class="property--img">
                                    <img src="{{asset($Discount->image)}}" alt="property image" class="img-responsive">
                                    <span class="property--status">For Rent</span>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a
                                                href="{{asset('HallSingle/'.$Discount->id)}}">{{$Discount->name}}</a>
                                        </h5>
                                        <p class="property--location">Amman</p>
                                        <p class="property--price">{{$Discount->discount}} JD</p>
                                    </div>
                                    <!-- .property-info end -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- .carousel end -->
                    </div>
                </div>
                <!-- . widget featured property end -->
            </div>
            <!-- .col-md-4 end -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="row">
                    @foreach ($Halls as $Hall)
                    <div class="properties properties-grid">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="{{asset('HallsPublic/'.$Hall['id'])}}">
                                        <img src="{{asset("images/".$Hall->image)}}" alt="property image"
                                            class="img-responsive">
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a
                                                href="{{asset('HallsPublic/'.$Hall['id'])}}">{{$Hall->name}}</a></h5>
                                        <p class="property--location">Location: {{$Hall->location}}</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Number Hulls</span><span
                                                    class="feature-num">{{$Hall->numHulls}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                        </div>
                        <!-- .property item end -->
                    </div>
                    @endforeach
                    <!-- .col-md-12 end -->
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <div class="row pagination_box mt-70">
            <div class="col-12">
                {{$Halls->links()}}
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-grid  end  -->

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
<!-- Footer #1
============================================= -->

@include('component/footer')