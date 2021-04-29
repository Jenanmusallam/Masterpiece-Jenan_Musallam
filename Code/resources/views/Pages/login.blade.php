@include('component/nav')

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
                            <h1>Login</h1>
                        </div>
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
<!-- Module Signup  -->
<div class="module module-login pull-left">
    <a class="btn-popup" data-toggle="modal" data-target="#signupModule"><i class="fa fa-user"></i> &nbsp; Login</a>
    <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <!-- Nav tabs -->
                        <ul>
                            <li class="active"><a href="#login" data-toggle="tab">login</a>
                            </li>
                            <li><a href="#signup" data-toggle="tab">signup</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="login">
                                <div class="signup-form-container text-center">
                                    <form class="mb-0">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="login-email" id="login-email"
                                                placeholder="Email Address">
                                        </div>
                                        <!-- .form-group end -->
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="login-password"
                                                id="login-password" placeholder="Password">
                                        </div>
                                        <!-- .form-group end -->
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                                <span>Remember Me</span>
                                                <input type="checkbox">
                                                <span class="check-indicator"></span>
                                            </label>
                                        </div>
                                        <input type="submit" class="btn btn--primary btn--block" value="Sign In">
                                        <a href="#" class="forget-password">Forget your
                                            password?</a>
                                    </form>
                                    <!-- form  end -->
                                </div>
                                <!-- .signup-form end -->
                            </div>
                            <div class="tab-pane" id="signup">
                                <form class="mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="full-name" id="full-name"
                                            placeholder="Full Name">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="register-email"
                                            id="register-email" placeholder="Email Address">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="register-password"
                                            id="register-password" placeholder="Password">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>I agree with all <a href="#">Terms &
                                                    Conditions</a></span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                    <input type="submit" class="btn btn--primary btn--block" value="Register">
                                </form>
                                <!-- form  end -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- PAGE SECTION END -->

@include('component/footer')