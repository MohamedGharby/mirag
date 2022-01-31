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

  <title>Mirag|Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href='{{asset("admin/css/fontawesome.all.css")}}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("admin//css/adminlte.css")}}'>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    <x-navbar></x-navbar>
  <!-- /.navbar -->

   <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                @yield('main')
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src='{{asset("admin/js/jquery.js")}}'></script>
<!-- Bootstrap 4 -->
<script src='{{asset("admin/js/bootstrap.bundle.js")}}'></script>
<!-- AdminLTE App -->
<script src='{{asset("admin/js/adminlte.js")}}'></script>
<script >
  $("#logout_link").click(function(e){
    e.preventDefault()
    $("#logout_form").submit();
  })
</script>
@yield('scripts')
</body>
</html>
