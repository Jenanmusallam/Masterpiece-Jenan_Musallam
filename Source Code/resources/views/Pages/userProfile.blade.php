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
                        <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                        <li><a href="#account-details" data-toggle="tab" class="nav-link">Edit
                                Profile</a></li>
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
                    <div class="tab-pane fade " id="orders">
                        <h3>Booking</h3>
                        <div class="lion_table_area table-responsive">

                            @foreach ($bookingTable as $book)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Hall Name</th>
                                        <th>Image</th>
                                        <th>Price </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($book["book"] as $key=> $book)
                                    <tr>
                                        <td>{{ $book->name }}</td>
                                        <td> <img height='100' src="{{asset('images/'.$book->image)}}" alt="">
                                        </td>
                                        <td>
                                            @if ($book->quantity!=1)
                                            {{$book->quantity }} items
                                            @else
                                            {{$book->quantity }} item
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="3" class="subtableCon">
                                            <table class="subtable">
                                                <tr>
                                                    <th>Summary</th>
                                                    <td>book id :{{ $book["book"]->id }}</td>
                                                    <td>Date:{{ Str::substr($book["book"]->created_at,0, 16)  }}
                                                    </td>
                                                    <td>Status: {{ $book["book"]->status  }}</td>
                                                    <td>Total Price: {{ $book["book"]->total_price  }}
                                                        JOD</td>

                                                </tr>
                                            </table>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            @endforeach
                            <div class="card mb-3" style="max-width: 540px;">

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="account-details">
                        <h3>Edit Profile </h3>
                        <div class="login">
                            <div class="login_form_container">
                                <div class="form-box">
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <label>Name</label>
                                        <input type="text" name="fullName" value="{{ $customer[0]->fullName }}">
                                        @if ($errors->has('fullName'))
                                        <div class="alert alert-danger">{{ $errors->first('fullName') }}
                                        </div>
                                        @endif
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ $customer[0]->email }}">
                                        @if ($errors->has('email'))
                                        <div class="alert alert-danger">{{ $errors->first('email') }}
                                        </div>
                                        @endif
                                        <label>Image</label>
                                        <input type="file" name="image">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $customer[0]->phone}}">
                                        @if ($errors->has('phone'))
                                        <div class="alert alert-danger">{{ $errors->first('phone') }}
                                        </div>
                                        @endif
                                        <button class="btn btn-danger rounded" name="submit" type="submit">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <form class="mb-0">
                <div class="form-box">
                    <h4 class="form--title">Personal Details</h4>
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" name="first-name" id="first-name">
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" name="last-name" id="last-name">
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label for="email-address">Email Address</label>
                        <input type="email" class="form-control" name="email-address" id="email-address">
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label for="phone-number">Phone</label>
                        <input type="text" class="form-control" name="phone-number" id="phone-number">
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label for="about-me">About Me</label>
                        <textarea class="form-control" name="about-me" id="about-me" rows="2"></textarea>
                    </div>
                    <!-- .form-group end -->
                </div>
                <!-- .form-box end -->
                <div class="form-box">
                    <h4 class="form--title">Change Password</h4>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label for="confirm-password">confirm password</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                    </div>
                    <!-- .form-group end -->
                </div>
                <!-- .form-box end -->
                <input type="submit" value="Save Edits" name="submit" class="btn btn--primary">
            </form>
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