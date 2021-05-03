@include('component/nav')

<section id="page-title" class="page-title bg-overlay bg-overlay-dark2" style="height: 19vh;">
    <div class="bg-section">
        <img src="assets/images/login.png" alt="Background" />
    </div>
    <!-- .container end -->
</section>
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1" style="height: 116vh;">
            <img src="{{asset('assets/images/login/(2).svg')}}">
            <h3>Login</h3>
            @if ($message = Session::get('Error'))
            <div class="alert alert-worning" style="color: red">
                <p>{{ $message }}</p>
            </div>
            @endif
            <form action="login" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Email <span>*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Passwords <span>*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <input type="submit" class="btn btn--primary btn--block" value="Sign In">
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <img src="{{asset('assets/images/login/(6).svg')}}">
            <h3>Register</h3>
            <form action="register" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>FullName <span>*</span></label>
                    <input type="text" class="form-control" name="fullName" placeholder="Full Name">
                    @if ($errors->has('fullName'))
                    <div class="alert alert-danger">{{ $errors->first('fullName') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email address <span>*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @elseif($message = Session::get('faild'))
                    <p class="text-danger">{{ $message }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Password <span>*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Phone <span>*</span></label>
                    <input type="tel" class="form-control" name="phone" placeholder="Enter Phone">
                    @if ($errors->has('phone'))
                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <input type="submit" class="btn btn--primary btn--block" value="Register">
            </form>
        </div>
    </div>
</div>
@include('component/footer')