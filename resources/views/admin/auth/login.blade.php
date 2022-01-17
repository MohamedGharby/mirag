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
                        <h3 class="card-title">Login</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @include('admin.inc.message')
                    <form method="POST" action="{{url('login')}}" class="form-horizontal">

                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Checkbox">
                                        <label class="form-check-label" name="remember" for="Checkbox">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Login</button>
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