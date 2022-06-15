@extends('client.layouts.site')
@section('title', 'Forget Password')
@section('main')

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
                                        <h3>Reset Password</h3>
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
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        placeholder="Email" maxlength="50" required>
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="login-box mt-5 text-center">
                                                <button type="submit" class="btn btn-secondary mb-4 mt-4">Send mail</button>
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

@stop()