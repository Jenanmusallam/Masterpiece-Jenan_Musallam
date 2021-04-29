@include('component/nav')
<!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="assets/images/cartBackground.png" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Booking</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Booking</li>
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
        <div class="row"
            style=" text-align: center; background: -webkit-linear-gradient(left, #ea236f8f, #20acd286); padding: 3rem;">
            <div class="col-xs-2 col-sm-2 col-md-2"></div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <!-- .property-item #1 -->
                <div class="property-item">
                    <div class="property--img">
                        <a href="{{asset('HallSingle/'.$HallSingle->id)}}">
                            <img src="{{asset('images/'.$HallSingle->image)}}" alt="property image"
                                class="img-responsive">
                            @if ($HallSingle->discount != 0)
                            <span class="property--status">For Sale</span>
                            @endif
                        </a>
                    </div>
                    <div class="property--content">
                        <div class="property--info">

                        </div>
                        <div class="property--info">
                            <h5 class="property--title"><a
                                    href="{{asset('HallSingle/'.$HallSingle->id)}}">{{$HallSingle->name}}</a></h5>
                            @if ($HallSingle->discount != 0)
                            <p class="property--price">
                                {{$HallSingle->price - (($HallSingle->discount * $HallSingle->price)/100)}}
                                JD</p>
                            @else
                            <p class="property--price">Price {{$HallSingle->price}} JD</p>
                            @endif
                        </div>
                        <!-- .property-features end -->
                    </div>
                </div>
                <!-- .property item end -->
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                @if (!isset(session("loginUser")['id'])||session("loginUser")['role']=='customer')
                <form method="post" action="{{asset('cart')}}" class="single_product_action d-flex align-items-center">
                    @csrf
                    <p class="text-center"
                        style="font-size: 20px;color: white;text-shadow: 1px 1px #A68;font-weight: 500;">
                        Enter the Booking Date and
                        Booking Time you would love your
                    </p>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin:1rem">
                        <label style="font-weight: 700;margin-right: 1rem;">Date and Time :</label>
                        <input type="date" name="date" id="date" required value="<?php echo date('Y-m-d'); ?>"
                            min="<?php echo date('Y-m-d'); ?>" class="btn btn--date--select" required />
                        <select name="from_time" class="btn btn--date--select" required style="padding-left: 6rem;">
                            <option value="02:00:00">02:00 PM</option>
                            <option value="04:00:00">04:00 PM</option>
                            <option value="06:00:00">06:00 PM</option>
                            <option value="08:00:00">08:00 PM</option>
                            <option value="10:00:00">10:00 PM</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin:1rem">
                        <label style="font-weight: 700;margin-right: 1rem;">Additional Information :
                        </label>
                        <select name="additional_info" class="btn btn--date--select" required
                            style="padding-left: 6rem;">
                            <option value="Cake & Juices">Cake & Juices</option>
                            <option value="Snacks & Juices">Snacks & Juices</option>
                            <option value="Buffet & Juices">Buffet & Juices</option>
                        </select>
                    </div>
                    <div>
                        @if ($HallSingle->discount != 0)
                        <input type="hidden" name="total_price"
                            value="{{$HallSingle->price - (($HallSingle->discount * $HallSingle->price)/100)}}">
                        @else
                        <input type="hidden" name="total_price"
                            value="{{$HallSingle->price - (($HallSingle->discount * $HallSingle->price)/100)}}">
                        @endif
                    </div>

                    <div class="add_to_cart_btn">
                        <input type="hidden" name="hall_id" value="{{$HallSingle->id}}">
                        <input type="submit" value="Book Now" class="btn btn--primary" style="width: 25vw;">
                    </div>
                </form>
                @endif

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