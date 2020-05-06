<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>JE 310 Solution Inc.</title>
  <link href="{{asset('adminlte/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('adminlte/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('adminlte/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   @include('include.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
          @include('include.nav') 
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
                @yield('content')
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('include.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('adminlte/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('adminlte/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('adminlte/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('adminlte/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('adminlte/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('adminlte/js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>