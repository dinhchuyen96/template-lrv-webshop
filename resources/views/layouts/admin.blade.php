<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin| @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin-template')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin-template')}}/dist/css/adminlte.min.css">
    <link rel="icon" href="{{ url('home')}}/assets/img/icon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{ url('home')}}/assets/css/options.css">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
	<!-- Bootstrap css -->
    {{-- <link rel="stylesheet" href="{{ url('home')}}/assets/css/bootstrap.min.css">
    <!-- linear-icon -->
    <link rel="stylesheet" href="{{ url('home')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('home')}}/assets/css/linear-icon.css">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="{{ url('home')}}/assets/css/plugins.css">
    <!-- default style -->
    <link rel="stylesheet" href="{{ url('home')}}/assets/css/default.css">
    <!-- Main Style css -->
    <link rel="stylesheet" href="{{ url('home')}}/assets/css/style.css">
    <!-- responsive css -->
     --}}

    <!-- Modernizer JS -->
    {{-- <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script> --}}
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h1>@yield('title')</h1>
                        </div>
                        @if(session()->has('yes'))
                            <div id="alert_cat" style="position:absolute; right: 5rem" class="col-sm-6 alert alert-success text-center" role="alert">
                                <strong>{{session()->get('yes')}}</strong>
                            </div>
                        @endif
                        @if(session()->has('no'))
                            <div class="col-sm-8 alert alert-danger text-center" role="alert">
                                <strong>{{session()->get('no')}}</strong>
                            </div>
                        @endif
                        

                    </div>
                </div><!-- /.container-fluid -->
                <script>
                    setTimeout(function() {
			             $('#alert_cat').fadeOut('fast');
		            }, 4000); // <-- time in milliseconds
                </script>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">

                    <div  id="mydiv" class="card-body">                        
                        @yield('main')
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
    {{-- <script src="{{ url('admin-template')}}/plugins/jquery/jquery.min.js"></script> --}}
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin-template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin-template')}}/dist/js/adminlte.min.js"></script>  
    <script src="{{ url('admin-template')}}/dist/js/options.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('admin-template')}}/dist/js/demo.js"></script>
    
</body>

</html>