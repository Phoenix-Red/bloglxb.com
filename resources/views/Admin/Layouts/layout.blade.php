<!DOCTYPE html>
<html>
@section('head')
@include('Admin.Layouts.head')
@show
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@section('header')
@include('Admin.Layouts.header')
@show

@section('leftsidebar')
@include('Admin.Layouts.leftsidebar')
@show


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

@yield('maincontent')

  </div>
  <!-- /.content-wrapper --> 


@section('mainfooter')
@include('Admin.Layouts.mainfooter')
@show

@section('controlsidebar')
@include('Admin.Layouts.controlsidebar')
@show

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

@section('script')
@include('Admin.Layouts.script')
@show
</body>
</html>
