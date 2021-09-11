<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>BCMS Cloud | Responsive Bootstrap 5 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.css?v=1.0.2')}}">  
   </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->    
    <div class="wrapper">
      <section class="login-content">
         <!-- align-items-center -->
         <div class="row m-0 bg-white vh-100">            
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10 login-form show-panel">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="{{ url('/')}}" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="#ff5e00"/>
                                  <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="#ff5e00"/>
                                  <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="#ff5e00"/>
                                  <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="#ff5e00"/>
                              </svg>
                              <!--logo End-->     
                              <h4 class="logo-title ms-3 mt-4">{{ config('app.name', 'Laravel') }}</h4>
                           </a>
                           <h2 class="mb-1 text-center">Log in</h2>
                           <p class="text-center">Login to stay connected.</p>
                            @if (session('status'))
                                <div class="alert alert-success border-white" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-10  offset-md-1">
                                        <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control border-default  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10  offset-md-1">
                                        <label for="password" class="col-md-12  col-form-label text-md-right">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control border-default @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-1">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-1 text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" onclick="requestPassword()">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </p>
                                <p class="mt-1 text-center">
                                    Join Your organization with us 
                                    <a href="{{ url('register')}}" class="text-underline"> Register
                                    </a>
                                </p>
                            </form>
                        </div>
                     </div>
                  </div>
                  <!-- request registered acccount password panel start -->
                  <div class="col-md-10 request-password hide-panel" style="display:none">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="{{ url('/')}}" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="#ff5e00"/>
                                  <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="#ff5e00"/>
                                  <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="#ff5e00"/>
                                  <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="#ff5e00"/>
                              </svg>
                              <!--logo End-->     
                              <h4 class="logo-title ms-3 mt-5">{{ config('app.name', 'Laravel') }}</h4>
                           </a>
                           <h2 class="mb-2 text-center">Reset Password</h2>
                           <p class="text-center">Login to stay connected.</p>

                           <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                                <div class="form-group row">
                                    <div class="col-md-10  offset-md-1">
                                        <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control border-default  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-1">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-3 text-center">
                                @if (Route::has('password.request'))
                                            <a class="btn btn-link" onclick="registLoginForm()">
                                                {{ __('Login?') }}
                                            </a>
                                        @endif
                                </p>
                                <p class="mt-3 text-center">
                                    Join Your organization with us <a href="{{ url('register')}}" class="text-underline"> Register
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-bg">
                  <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                     <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"/>
                     <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"/>
                     <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"/>
                     <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"/>
                     </g>
                  </svg>
               </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{ asset('assets/images/auth/bg.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
    </div>    
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/libs.min.js')}}"></script>    
    <!-- widgetchart JavaScript -->
    <script src="{{ asset('assets/js/charts/widgetcharts.js')}}"></script>    
    <!-- mapchart JavaScript -->
    <script src="{{ asset('assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{ asset('assets/js/charts/dashboard.js')}}"></script>    
    <!-- fslightbox JavaScript -->
    <script src="{{ asset('assets/js/fslightbox.js')}}"></script>    
    <!-- settings JavaScript -->
    <script src="{{ asset('assets/js/setting.js')}}"></script>    
    <!-- Form Wizard Script -->
    <script src="{{ asset('assets/js/form-wizard.js')}}"></script>    
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
  </body>
</html>
<script type="text/javascript">
    $(".request-password").hide();
    function requestPassword() {
        $(".login-form").hide();
        $(".request-password").show();
    }

    function registLoginForm() {
        $(".request-password").hide();
        $(".login-form").show();      
    }
</script>