@extends('client.layouts.site')
@section('title','Changer password')
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
                                <li class="breadcrumb-item"><a href="index.html">{{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('profile.cp') }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="card-body">
        @if(session()->has('ok'))
            <div class="text-center alert alert-success" style="color: green" role="alert">
                <h2>{{session()->get('ok')}}</h2>
            </div>
        @endif
        @if(session()->has('no'))
            <div class="alert text-center alert-danger" role="alert">
                <h2>{{session()->get('no')}}</h2>
            </div>
        @endif
        @yield('main')
    </div>
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
                                        <h3>{{ __('changerPassword.cyp') }}</h3>
                                    </div>
                                </div>
                            </div> <!-- end of row -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                    <div class="login-form">
                                        <form action="{{route('home.changer_password')}}" method="POST">
                                            @csrf
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">{{ __('changerPassword.op') }}</label>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    @error('old_password') {{$message}} @enderror
                                                    <input type="password" name="old_password" class="form-control" id="old_password" maxlength="10"  minlength="5"  placeholder="{{ __('changerPassword.op') }}" required>
                                                    <button id="showpass1" class="pass-show-btn" type="button">{{ __('changerPassword.show') }}</button>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">{{ __('changerPassword.np') }}</label>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <input type="password" name="new_password" class="form-control" id="new_password" placeholder="{{ __('changerPassword.np') }}"  maxlength="10"  minlength="5"   required>
                                                    <button class="pass-show-btn" type="button" id="showpass2">{{ __('changerPassword.show') }}</button>
                                                    @error('new_password') {{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">{{ __('changerPassword.cp') }}</label>
                                                <div class="col-12 col-sm-12 col-md-8">                                                    
                                                    <input type="password" name="conf_password" class="form-control" id="conf_password"  maxlength="10" minlength="5" placeholder="{{ __('changerPassword.cp') }}" required>
                                                    <button class="pass-show-btn" type="button" id="showpass3">{{ __('changerPassword.show') }}</button>
                                                    @error('conf_password') {{$message}} @enderror
                                                </div>
                                            </div>
                                            <div class="login-box mt-5 text-center">
                                                <p>{{ __('changerPassword.fg') }} <br><a style="color:blue" href="{{route('account.forget_password')}}">{{ __('changerPassword.ch') }}</a></p>
                                                <button type="submit" class="btn btn-secondary mb-4 mt-4">{{ __('changerPassword.save') }}</button>
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