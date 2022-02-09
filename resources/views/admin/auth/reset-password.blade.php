<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Mirag</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href='{{asset("admin/css/fontawesome.all.css")}}'>
    <!-- Theme style -->
    <link rel="stylesheet" href='{{ asset("admin//css/adminlte.css")}}'>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

    <div class="container  mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Reset Password</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @include('admin.inc.message')
                    @include('admin.inc.errors')

                    <form method="POST" action="{{url('reset-password')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                        <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Password">
                                </div>
                            </div>
                            <input type="hidden" name="token" value="{{request()->route('token')}}">

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Reset Password</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src='{{asset("admin/js/jquery.js")}}'></script>
    <!-- Bootstrap 4 -->
    <script src='{{asset("admin/js/bootstrap.bundle.js")}}'></script>
    <!-- AdminLTE App -->
    <script src='{{asset("admin/js/adminlte.js")}}'></script>
</body>

</html>
