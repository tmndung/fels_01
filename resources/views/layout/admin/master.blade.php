<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
  <title>E-LEARNING </title>
  <base href="{{asset('')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-2.4.3/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layout.admin.header')
  @include('layout.admin.sidebar')

  @yield('content')

  <div class="control-sidebar-bg"></div>
     @include('layout.admin.footer')
</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="js/jquery2.2.4.min.js"></script>
<script src="AdminLTE-2.4.3/dist/js/adminlte.min.js"></script>
@yield('script')
</body>
</html>
