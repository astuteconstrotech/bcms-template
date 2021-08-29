@section('app')
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('/assets/css/libs.min.css')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('/assets/css/hope-ui.css?v=1.0.2')}}">  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
      	<div class="loader simple-loader">
          	<div class="loader-body"></div>
      	</div>
  	</div>
 @endsection()
 @extends('layouts.app')