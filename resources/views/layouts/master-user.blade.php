<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laravel | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/plugins/seiyria-bootstrap-slider/css/bootstrap-slider.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/dist/css/skins/_all-skins.min.css')}}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <meta name="_token" content="{!! csrf_token() !!}" />
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  @stack('links')
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <section class="content">
    @yield('main-content')
  </section>
</body>

<script src="{{asset('assets/admin/dist/js/bower_components/jquery/dist/jquery.min.js')}}"></script>