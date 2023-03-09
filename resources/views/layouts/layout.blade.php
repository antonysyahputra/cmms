<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CMMS | AFISME</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{  asset('bootstrap-5') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{  asset('bootstrap-5') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{  asset('bootstrap-5') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{  asset('bootstrap-5') }}/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:/partials/_navbar.html -->
      @include('partials.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:{{  asset('bootstrap-5') }}/partials/_sidebar.html -->
        @include('partials.sidebar')
        <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{  asset('bootstrap-5') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{  asset('bootstrap-5') }}/assets/js/off-canvas.js"></script>
    <script src="{{  asset('bootstrap-5') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{  asset('bootstrap-5') }}/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>