@extends('layouts.login')

@section('content')

        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <!-- start: LOGIN BOX -->
                <div class="box-login">
                    <div class="logo">
                        <img src="assets-admin/images/log.png">
                    </div>
                    <h3>Sign in to your account</h3>
                    <p>
                        Please enter your name and password to log in.
                    </p>
                    <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                        </div>
                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
                                    <i class="fa fa-user"></i> </spa>                           

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password" placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                    <i class="fa fa-lock"></i>
                                    <a class="forgot" href="#">
                                        I forgot my password
                                    </a> </span>
                            </div>
                            <div class="form-actions">
                                <label for="remember" class="checkbox-inline">
                                    <input type="checkbox" class="grey remember" id="remember" name="remember">
                                    Keep me signed in
                                </label>
                                <button type="submit" class="btn btn-green pull-right">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                            <div class="new-account">
                                Don't have an account yet?
                                <a href="#" class="register">
                                    Create an account
                                </a>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        2016 &copy; diSerdang Bedagai
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: LOGIN BOX -->
                <!-- start: FORGOT BOX -->
                <div class="box-forgot">
                    <div class="logo">
                        <img src="assets-admin/images/log.png">
                    </div>
                    <h3>Forget Password?</h3>
                    <p>
                        Enter your e-mail address below to reset your password.
                    </p>
                    <form class="form-forgot">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <i class="fa fa-envelope"></i> </span>
                            </div>
                            <div class="form-actions">
                                <a class="btn btn-light-grey go-back">
                                    <i class="fa fa-chevron-circle-left"></i> Log-In
                                </a>
                                <button type="submit" class="btn btn-green pull-right">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        2016 &copy; diSerdang Bedagai
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: FORGOT BOX -->
                <!-- start: REGISTER BOX -->
                <div class="box-register">
                    <div class="logo">
                        <img src="assets-admin/images/log.png">
                    </div>
                    <h3>Sign Up</h3>
                    <p>
                        Enter your personal details below:
                    </p>
                    <form class="form-register" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                        </div>
                        <fieldset>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" value="{{ old('name') }}" required="">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" value="{{ old('nip') }}" required="">
                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" value="{{ old('email') }}" required="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="agree" class="checkbox-inline">
                                        <input type="checkbox" class="grey agree" id="agree" name="agree">
                                        I agree to the Terms of Service and Privacy Policy
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                Already have an account?
                                <a href="#" class="go-back">
                                    Log-in
                                </a>
                                <button type="submit" class="btn btn-green pull-right">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        2016 &copy; diSerdang Bedagai
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: REGISTER BOX -->
            </div>
        </div>
@endsection
