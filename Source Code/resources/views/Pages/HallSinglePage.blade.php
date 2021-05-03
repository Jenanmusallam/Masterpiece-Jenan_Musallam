@include('component/nav')
<!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/images/page-titles/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Hall {{$HallSingle->name}}</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">{{$HallSingle->name}}</li>
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

<!-- property single gallery
============================================= -->
<section id="property-single-gallery" class="property-single-gallery">
    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="property-single-gallery-info">
                    <div class="property--info clearfix">
                        <div class="pull-left">
                            <h5 class="property--title">{{$HallSingle->name}}</h5>
                            <p class="property--location"><i
                                    class="fa fa-map-marker"></i>{{$HallSingle->category_name}}
                            </p>
                        </div>
                        <div class="pull-right">
                            <span class="property--status">For Sale</span>
                            {{-- <p class="property--price">{{$HallSingle->price}} JD</p> --}}
                            <div class="price_amount">
                                @if ($HallSingle->discount != 0)
                                <p class="property--price">
                                    {{$HallSingle->price - (($HallSingle->discount * $HallSingle->price)/100)}}
                                    JD</p>
                                <span class="discount_price" style="color: red;">-{{$HallSingle->discount}}%</span>
                                <span class="old_price">{{$HallSingle->price}} JD</span>
                                @else
                                <p class="property--price">{{$HallSingle->price}} JD</p>
                                @endif

                            </div>
                        </div>
                    </div>
                    <!-- .property-info end -->
                    <div class="property--meta clearfix">
                        <div class="pull-left">
                            <ul class="list-unstyled list-inline mb-0">
                                <li>
                                    Hall ID:<span class="value">{{$HallSingle->id}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="rating-number">
                            <div class="product_rating">
                                {!! str_repeat('<i class="fa fa-star" aria-hidden="true" style="color: #e94d89;"></i>',
                                $averageRate)
                                !!}
                                {!! str_repeat('<i class="fa fa-star-o" aria-hidden="true"
                                    style="color: #e94d89;"></i>', 5 -
                                $averageRate) !!}
                                <span style="margin-left: 1rem;"> {{count($reviews)}} Ratting (S)</span>
                            </div>
                        </div>
                    </div>
                    <!-- .property-info end -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="property-single-carousel inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Gallery</h2>

                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property-single-carousel-content">
                                <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1"
                                    data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false"
                                    data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                    <img src="{{asset('images/'.$HallSingle->halls_image)}}" alt="Property Image"
                                        style="height: 100vh; margin: auto;">
                                    <img src="{{asset('images/'.$HallSingle->image)}}" alt="Property Image"
                                        style="height: 100vh; margin: auto;">
                                </div>
                                <!-- .carousel end -->
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-desc end -->
                <div class="property-single-desc inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Description</h2>
                            </div>
                        </div>
                        <!-- feature-panel end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property--details">
                                <p>{{$HallSingle->description}}</p>
                            </div>
                            <!-- .property-details end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-desc end -->
                <div class="property-single-features inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Features</h2>
                            </div>
                        </div>
                        <!-- feature-item #1 -->
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">
                                <p>Cake</p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                        <!-- feature-item #2 -->
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">
                                <p>Juices</p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                        <!-- feature-item #3 -->
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">
                                <p>Snacks</p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                        <!-- feature-item #4 -->
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">
                                <p>Buffet</p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                        <!-- feature-item #5 -->
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">
                                <p>DJ</p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                        <!-- feature-item #6 -->
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-item">
                                <p>Flowers</p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-features end -->

                <div class="property-single-location inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Location</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="course__details__location__map">
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?q=place_id:{{$HallSingle->halls_location}}&key=AIzaSyAOH_dk_IsNWRGYpxN8KWBFrWXdJvDQce4"
                                    style="width: 100%; border:0" height="450" loading="lazy" allowfullscreen></iframe>
                            </div>
                        </div>

                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-location end -->
                <div class="property-single-video inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Video</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="video--content text-center">
                                <div class="bg-section">
                                    <img src="{{asset('images/'.$HallSingle->halls_image)}}" alt="Background" />
                                </div>
                                <div class="video--button">
                                    <div class="video-overlay">
                                        <div class="pos-vertical-center">
                                            <a class="popup-video" href="{{$HallSingle->video}}">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- .video-player end -->
                                </div>
                            </div>
                            <!-- .video-content end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-Add Hall end -->
                <!-- .property-single-location end -->
                <div class="property-single-video inner-box"
                    style="height: 15vh; text-align: center; background: -webkit-linear-gradient(left, #ea236f8f, #20acd286);">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        @if(!isset(session("loginUser")['id']))
                        <a href="{{asset('login')}}"
                            style="border-radius: 2rem;background: white;padding: 1rem 3rem;font-weight: 700;font-size: 22px;">
                            Book Now
                        </a>
                        @else
                        @if(session("loginUser")['role']=='customer')
                        <a href="{{asset('bookNow/'.$HallSingle->id)}}"
                            style="border-radius: 2rem;background: white;padding: 1rem 3rem;font-weight: 700;font-size: 22px;">
                            Book Now
                        </a>
                        @else
                        <a href="{{asset('login')}}"
                            style="border-radius: 2rem;background: white;padding: 1rem 3rem;font-weight: 700;font-size: 22px;">
                            Book Now
                        </a>
                        @endif
                        @endif
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-Hall Single end -->
                <div class="property-single-reviews inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Reviews</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <ul class="property-review">
                                @forelse ($reviews as $review)
                                <li class="review-comment">
                                    <div class="avatar">
                                        <img width="60px" style="border-radius: 50%;"
                                            src="{{asset("images/{$review->image}")}}">
                                    </div>
                                    <div class="comment">
                                        <h6>{{ $review->fullName }}</h6>
                                        <div class="property-rating">
                                            {!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>',
                                            $review->rate) !!}
                                            {!! str_repeat('<i class="fa fa-star-o" aria-hidden="true"></i>', 5 -
                                            $review->rate)
                                            !!}</div>
                                        <p>{{ $review->comment }}</p>
                                    </div>
                                </li>
                                @empty
                                <h2 style="text-align: center;">Empty Review</h2>
                                <img src={{asset("assets/images/empty.svg")}} style="height: 31vh; margin-left: 30rem;">
                                @endforelse
                                <!-- comment end -->
                            </ul>
                            <!-- .comments-list end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-reviews end -->
                <div class="property-single-leave-review inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Leave a Review</h2>
                            </div>
                        </div>
                        @if (isset(session('loginUser')['id']) && session("loginUser")['role']=='customer')
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <form id="post-comment" class="mb-0" action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label class="req" for="comments">Rating*</label>
                                            <div class="property-rating" style="display: unset;margin: 1rem;">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="rate" class="star-rating" style="text-align: center">
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="comment">Review*</label>
                                            <textarea class="form-control" rows="5" name="comment" id="comments"
                                                required="required"></textarea>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        {{-- <input type="hidden" name="hull_id" value="{{$HallSingle->hull_id}}"> --}}
                                        <button type="submit" name="submit" class="btn btn--primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-leave-review end -->
            </div>
            <!-- .col-md-8 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #property-single end -->


<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2  mb-70">
                    <h2 class="heading--title">Related Halls</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                    data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                    @forelse ($relatedHallSingle as $HallSingle)
                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="{{asset('HallSingle/'.$HallSingle->id)}}">
                                <img src="{{asset("images/".$HallSingle->image)}}" alt="property image"
                                    class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a
                                        href="{{asset('HallSingle/'.$HallSingle->id)}}">{{$HallSingle->name}}</a></h5>
                                <p class="property--location">Amman</p>
                            </div>
                            <!-- .property-info end -->
                        </div>
                    </div>
                    @empty
                    <h2 style="text-align: center;">Empty Halls</h2>
                    <img src={{asset("assets/images/empty.svg")}}>
                    @endforelse
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

<!-- cta #1
============================================= -->
<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
    <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <h3>Join our professional team & agents to start selling your house</h3>
                <a href="#" class="btn btn--primary">Contact</a>
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #cta1 end -->
@include('component/footer');