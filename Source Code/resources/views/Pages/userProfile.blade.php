@include('component/nav')
<!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section" style="height: 50vh;">
        <img src="assets/images/page-titles/1.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>user Profile</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">user Profile</li>
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

<!-- #user-profile
============================================= -->
<section id="user-profile" class="user-profile">
    <div class="container">
        <div class="row">
            <!-- Start Maincontent  -->
            <div class="col-sm-12 col-md-3 col-lg-3">
                <!-- Nav tabs -->
                <div class="edit--profile-area">
                    <ul role="tablist" class="edit--profile-links list-unstyled mb-0">
                        <li><a href="#Profile" data-toggle="tab" class="nav-link active">Profile</a>
                        </li>
                        <li><a href="#account-details" data-toggle="tab" class="nav-link">Edit
                                Profile</a></li>
                        <li> <a href="#orders" data-toggle="tab" class="nav-link">Book</a></li>
                        <li><a href="logout" class="nav-link">logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <!-- Tab panes -->
                <div class="tab-content Profile_content">
                    <div class="tab-pane fade show active" id="Profile">
                        <h4 class="form--title">Profile</h4>
                        <div class="upload--img-area">
                            <div class="preview--img">
                                <img src="{{asset("images/{$customer[0]->image}")}}" id="output--img"
                                    class="output--img">
                            </div>
                            <div class="administrator_contnet">
                                <p>Name :<span>{{ $customer[0]->fullName }}</span></p>
                                <p>Email:<span>{{ $customer[0]->email }}</span></p>
                                <p>Phone:<span>{{ $customer[0]->phone }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-details"
                        style="position: relative;top: -8rem; height: 79vh;">
                        <h3>Edit Profile </h3>
                        <div class="login">
                            <div class="login_form_container">
                                <div class="form-box">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="first-name">Full Name</label>
                                            <input type="text" class="form-control" name="fullName"
                                                value="{{ $customer[0]->fullName }}">
                                            @if ($errors->has('fullName'))
                                            <div class="alert alert-danger">{{ $errors->first('fullName') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $customer[0]->email }}">
                                            @if ($errors->has('email'))
                                            <div class="alert alert-danger">{{ $errors->first('email') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group"> <label>Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ $customer[0]->phone}}">
                                            @if ($errors->has('phone'))
                                            <div class="alert alert-danger">{{ $errors->first('phone') }}
                                            </div>
                                            @endif</div>
                                        <button class="btn btn--primary" name="submit" type="submit">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="orders" style="position: relative;top: -50rem;">
                        <h3>Booking</h3>

                        <div class="lion_table_area table-responsive">
                            <!-- .property-item #1 -->
                            @forelse ($booking as $book)
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="{{asset('HallSingle/'.$book->hallId)}}">
                                        <img src="{{asset("images/".$book->image)}}" alt="property image"
                                            class="img-responsive">
                                        <span class="property--status">For Sale</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a
                                                href="{{asset('HallSingle/'.$book->hallId)}}">{{ $book->name}}</a></h5>
                                        <p class="property--location">Status Payment: {{ $book->statusPayment}}</p>
                                        <p class="property--price">Total Price: {{ $book->total_price}}
                                            JOD</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul>
                                            <li><span class="feature">Date:</span><span
                                                    class="feature-num">{{$book->date}}</span>
                                            </li>
                                            <li><span class="feature">Time:</span><span
                                                    class="feature-num">{{$book->from_time}}</span>
                                            </li>
                                            <li><span class="feature">Duration:</span><span
                                                    class="feature-num">{{$book->duration}}</span></li>
                                            <li><span class="feature">Additional Information:</span><span
                                                    class="feature-num">{{$book->additional_info}}</span></li>
                                        </ul>

                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            @empty
                            <h2 style="text-align: center;">Empty Booking</h2>
                            <img src={{asset("assets/images/empty.svg")}} style="height: 74vh;">
                            @endforelse
                            <!-- .property item end -->
                            <div class="card mb-3" style="max-width: 540px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .col-md-8 end -->
    </div>
    <!-- .row end -->
    </div>
</section>
<!-- #user-profile  end -->

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


@include('component/footer')