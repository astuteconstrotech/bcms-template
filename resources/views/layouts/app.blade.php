<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>BCMS Cloud | Responsive Bootstrap 5 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('/assets/css/libs.min.css')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('/assets/css/hope-ui.css?v=1.0.2')}}">  
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->  
    @include('layouts.sidebar')
    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
         @include('layouts.header')
        <div class="col-md-12iq-navbar-header" style="height: 60px;">
            
        </div>          
          <!-- Nav Header Component End -->

      </div>
        @yield('content')
     
      <!-- Footer Section Start -->
     @include('layouts.footer')
      <!-- Footer Section End -->    
  </main>

    
 <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/js/libs.min.js')}}"></script>
    
    <!-- widgetchart JavaScript -->
    <script src="{{asset('assets/js/charts/widgetcharts.js')}}"></script>
    
    <!-- mapchart JavaScript -->
    <script src="{{asset('assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('assets/js/charts/dashboard.js')}}"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="{{asset('assets/js/fslightbox.js')}}"></script>
    
    <!-- settings JavaScript -->
    <script src="{{asset('assets/js/setting.js')}}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{asset('assets/js/form-wizard.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
</html>