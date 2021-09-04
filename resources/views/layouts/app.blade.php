<!doctype html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{asset('assets/css/libs.min.css')}}">      
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/hope-ui.css?v=1.0.2')}}">  
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->  
        @include('layouts.sidebar')
        <main class="main-content">
            @include('layouts.header')         
            @yield('content')     
            @include('layouts.footer')
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