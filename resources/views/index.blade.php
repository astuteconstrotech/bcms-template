<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>BCMS Cloud</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}" />
      
      <!-- Library / Plugin Css Build -->
      <!-- <link rel="stylesheet" href="{{asset('/assets/css/libs.min.css')}}"> -->
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('/assets/css/hope-ui.css?v=1.0.2')}}">  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
    <span class="uisheet screen-darken"></span>
    <div class="header" style="background: url('./assets/images/dashboard/top-image.jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh;position: relative;">
        <div class="main-img">
            <div class="container">
                <svg width="150" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.423828" y="34.5762" width="50" height="7.14286" rx="3.57143" transform="rotate(-45 -0.423828 34.5762)" fill="white"/>
                    <rect x="14.7295" y="49.7266" width="50" height="7.14286" rx="3.57143" transform="rotate(-45 14.7295 49.7266)" fill="white"/>
                    <rect x="19.7432" y="29.4902" width="28.5714" height="7.14286" rx="3.57143" transform="rotate(45 19.7432 29.4902)" fill="white"/>
                    <rect x="19.7783" y="-0.779297" width="50" height="7.14286" rx="3.57143" transform="rotate(45 19.7783 -0.779297)" fill="white"/>
                </svg>
                <h1 class="my-4">
                    <span>BCMS Cloud - Design System</span>
                </h1>
                <h4 class="text-white mb-5">Production ready FREE Open Source <b>Dashboard UI Kit</b> and <b>Design System</b>.</h4>
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <a class="btn btn-light bg-white" target="_blank" href="{{url('/register')}}">Register</a>
                    </div>
                    <div class="ms-3">
                        <a class="btn btn-light bg-white" href="#components">Get Call</a>
                    </div>
                </div>

            </div>
        </div>
        @include('nav')
    </div>
   
   <!--  <article id="list-group">
        <div class="bd-heading sticky-xl-top align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5>List Group</h5>
                    <div class="d-flex align-items-center mt-2">
                        <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/listgroup.html" target="_blank">
                            <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span>Documentation</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>       -->     
    
    <!-- Footer Section Start -->
    <!-- <footer class="footer">
        <div class="footer-body">
            <ul class="left-panel list-inline mb-0 p-0">
                <li class="list-inline-item"><a href="./dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="./dashboard/extra/terms-of-service.html">Terms of Use</a></li>
            </ul>
            <div class="right-panel">
                ©<script>document.write(new Date().getFullYear())</script> BCMS Cloud, Made with
                <span class="text-gray">
                    <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                    </svg>
                </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
            </div>
        </div>
    </footer> -->
    <!-- Footer Section End -->      </div>
    
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
        <script src="{{asset('assets/js/prism.mini.js')}}"></script>
  </body>
</html>