@extends('client.layouts.site')
@section('title', 'login')
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
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    @if (session()->has('ok'))
        <div class="card-body">
            <div class="text-center alert alert-success" style="color: green" role="alert">
                <h2>{{ session()->get('ok') }}</h2>
            </div>
        </div>
    @endif
    @if (session()->has('no'))
        <div class="card-body">
            <div class="alert text-center alert-danger" role="alert">
                <h2>{{ session()->get('no') }}</h2>
            </div>
        </div>
    @endif
    @if (session()->has('wrong'))
        <div class="card-body" style="margin-bottom: -4rem">
            <div class="alert text-center alert-danger" role="alert">
                <h2>{{ session()->get('wrong') }}</h2>
            </div>
        </div>
    @endif
    @yield('main')

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
                                        <h3>Log in to your account</h3>
                                    </div>
                                </div>
                            </div> <!-- end of row -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                    <div class="login-form">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email
                                                    address</label>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <input type="text" name="email" class="form-control" id="email"
                                                        placeholder="Email" required>
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="c-password"
                                                    class="col-12 col-sm-12 col-md-4 col-form-label">Password</label>
                                                <div class="col-12 col-sm-12 col-md-8">

                                                    <input type="password" name="password" class="form-control"  minlength="5"  maxlength="10" 
                                                        placeholder="Password" required>
                                                    <button class="pass-show-btn" id="showpass1"
                                                        type="button">Show</button>
                                                    <div style="color: red;">
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login-box mt-5 text-center">
                                                <p><a href="">Forgot your password?</a></p>
                                                <button type="submit" class="btn btn-secondary mb-4 mt-4">Sign In</button>
                                            </div>
                                            <div class="text-center pt-20 top-bordered">
                                                <p>No account? <a href="{{ route('home.register') }}">Create one here</a>.
                                                </p>
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
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

    <!-- footer area start -->
@stop()
