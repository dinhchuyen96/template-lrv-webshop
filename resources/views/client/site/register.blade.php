@extends('client.layouts.site')
@section('title','register')
@section('main')
    <!-- header area end -->

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of Login Wrapper -->
    <div class="login-wrapper pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="user-login">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title text-center">
                                        <h3>Create an Account</h3>
                                    </div>
                                </div>
                            </div> <!-- end of row -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                    <div class="registration-form login-form">
                                        <form role="form" action="{{route('home.register')}}" method="POST">
                                            @csrf
                                            <div class="login-info mb-20">  
                                                <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-12 col-sm-12 col-md-4 col-form-label">Title</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <div class="form-row">
                                                        <div class="col-6 col-sm-3">
                                                            <div class="custom-radio">
                                                                <input type="hidden" name="id" value="">
                                                                <input class="form-check-input" value="anh" type="radio" name="sex" id="male">
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="male">Mr.</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-sm-3">
                                                            <div class="custom-radio">
                                                                <input class="form-check-input" value="chị" type="radio" name="sex" id="female">
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="female">Mrs.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">First Name</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" value="{{old('first_name')}}" name="first_name" id="f-name">
                                                    @error('first_name'){{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="l-name" class="col-12 col-sm-12 col-md-4 col-form-label">Last Name</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" maxlength="20" value="{{old('last_name')}}" name="last_name" id="l-name" required="">
                                                    @error('last_name'){{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email Address</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" value="{{old('email')}}" name="email" id="email" required="">
                                                    @error('email'){{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">Phone</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="f-name" required>
                                                    @error('phone'){{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputpassword" class="col-12 col-sm-12 col-md-4 col-form-label">Address</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" value="{{old('address')}}" name="address" id="address" required>
                                                    @error('address'){{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label">New Password</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="password" name="password" maxlength="16" class="form-control" id="newpassword" required>
                                                    <button id="showpass1" class="pass-show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Confirm Password</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="password" name="conf_password" maxlength="16" class="form-control" id="c-password" required>
                                                    @error('conf_password'){{$message}} @enderror
                                                    <button id="showpass2" class="pass-show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="birth" class="col-12 col-sm-12 col-md-4 col-form-label">Birthdate (Optional)</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="date" class="form-control" max="2002-01-01" name="birth_day" id="birth" placeholder="MM / DD / YYYY" required="">
                                                    @error('birth_day'){{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-check row p-0 mt-5">
                                                <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-6 offset-lg-4">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="offer">
                                                        <span class="checkmark"></span>
                                                        <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check row p-0 mt-4">
                                                <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-8 offset-lg-4">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="subscribe" required="">
                                                        <span class="checkmark"></span>
                                                        <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="register-box d-flex justify-content-end mt-20">
                                                <button type="submit" class="btn btn-secondary">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of user-login -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Login Wrapper -->

   <!-- scroll to top -->
@stop()