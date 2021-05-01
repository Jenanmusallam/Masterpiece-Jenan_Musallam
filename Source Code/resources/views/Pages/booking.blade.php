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
                            <h5 class="property--title"><a
                                    href="{{asset('HallSingle/'.$HallSingle->id)}}">{{$HallSingle->name}}</a></h5>
                            <div class="property--details">
                                <p>{{$HallSingle->description}}</p>
                            </div>
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

                <form method="post" action="userProfile" enctype="multipart/form-data"
                    class="single_product_action d-flex align-items-center">
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
                        @if ($errors->has('date'))
                        <div class="alert alert-danger">
                            {{ $errors->first('date') }}
                        </div>
                        @endif
                        <select name="from_time" class="btn btn--date--select" required style="padding-left: 6rem;">
                            <option value="02:00">02:00 PM</option>
                            <option value="04:00">04:00 PM</option>
                            <option value="06:00">06:00 PM</option>
                            <option value="08:00">08:00 PM</option>
                            <option value="10:00">10:00 PM</option>
                        </select>
                        @if ($errors->has('from_time'))
                        <div class="alert alert-danger">
                            {{ $errors->first('from_time') }}
                        </div>
                        @endif
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
                        @if ($errors->has('additional_info'))
                        <div class="alert alert-danger">
                            {{ $errors->first('additional_info') }}
                        </div>
                        @endif
                        <input type="radio" name="statusPayment" value="Cash">
                        <label for="Cash">Cash</label>
                        <input type="radio" name="statusPayment" value="Credit Card">
                        <label for="Credit Card">Credit Card</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <section id="user-profile" class="user-profile" style="padding-top: 0;padding-bottom: 0;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="edit--profile-area">
                                            <label style="font-weight: 700;margin-right: 1rem;">Payment
                                            </label>
                                            <ul role="tablist" class="edit--profile-links list-unstyled mb-0"
                                                style="text-align: left;">
                                                <li><a href="#Cash" data-toggle="tab" class="nav-link">
                                                        <input type="radio" name="statusPayment" value="Cash">
                                                        <label for="Cash">Cash</label></a></li>
                                                <li><a href="#creditCard" data-toggle="tab" class="nav-link">
                                                        <input type="radio" name="statusPayment" value="Credit Card">
                                                        <label for="Cash">Credit Card</label></a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                        <div class="tab-content Profile_content">
                                            <div class="tab-pane fade" id="Cash">
                                                <div class="upload--img-area">
                                                    <div class="administrator_contnet">
                                                        <h3>Cash <img src="{{asset('assets/images/cash.png')}}"
                                                                style="height: 10vh;" alt="cash"></h3>
                                                        <p style="color: black;">You have a week to pay. If the payment
                                                            is
                                                            not made, the
                                                            reservation will be canceled</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="creditCard"
                                                style="position: relative;top: -8rem;">
                                                <h3>Credit Card </h3>
                                                <img src="{{asset('assets/images/payment.png')}}" style="height: 10vh;"
                                                    alt="Credit Card">
                                                <div class="login">
                                                    <div class="login_form_container">
                                                        <div class="form-box">
                                                            <form>
                                                                @csrf
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label>Credit card number</label>
                                                                        <input class="form-control" type="tel" name=""
                                                                            placeholder="1111-2222-3333-4444"
                                                                            maxLength="17" required />
                                                                        @if ($errors->has(''))
                                                                        <div class="alert alert-danger">
                                                                            {{ $errors->first('') }}
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label>Security Code</label>
                                                                        <input type="password" class="form-control"
                                                                            placeholder="5894" name="" maxLength="4"
                                                                            required />
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="inputState">Expiration Data</label>
                                                                        <input type="date" name="dateExpiration"
                                                                            required class="form-control"
                                                                            value="<?php echo date('Y-m-d'); ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <button class="btn btn--primary" name="submit"
                                                                            type="submit">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="add_to_cart_btn">
                        <input type="hidden" name="hall_id" value="{{$HallSingle->id}}">
                        <input type="hidden" name="total_price" value="{{$HallSingle->price}}">
                        <button class="btn btn--primary" name="submit" type="submit" style="width: 25vw;">Book
                            Now</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

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