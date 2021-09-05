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

      <script src="{{ asset('assets/plugins/js-validation/jquery.validate.js')}}"></script>
      
      
      <script src="{{ asset('assets/plugins/js-validation/jquery-1.11.1.js')}}"></script>
   </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <!-- align-items-center -->
         <div class="row m-0  bg-white vh-100">            
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden" >
               <img src="{{asset('assets/images/auth/bg.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">               
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <a href="javascript::void(0)" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                  <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                  <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                  <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                              </svg>
                              <!--logo End-->                              
                              <h4 class="logo-title ms-3 text-primary">
                              {{ config('app.name', 'Laravel') }}</h4>
                           </a>
                           <h2 class="mb-2 text-center">Register</h2>
                           <p class="text-center">Register and Join your organization with us</p>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif                           
                               <form name="registration" class="needs-validation" id="registerForm" method="post" novalidate action="{{ route('register') }}">
                               @csrf
                               <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('Full Name') }}</label>
                                        <input id="name" type="text" class="form-control p-2 border-secondary @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                      <div class="col-md-6">
                                        <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('Company Name') }}</label>
                                        <input id="name" type="text" class="form-control p-2 border-secondary @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                               <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
                                    <input id="name" type="text" class="form-control p-2 border-secondary @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                    <input id="email" type="email" class="form-control p-2 border-secondary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control p-2 border-secondary @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <div class="col-md-6">
                                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control p-2 border-secondary" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">
                                          <a href="https://appstoreconnect.apple.com/agreements/#/" target="_blank">I agree with the terms of use </a>
                                       </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                          <p class="mt-3 text-center">
                             Already have an Account <a href="{{ url('login')}}" class="text-underline">Login</a>
                          </p>
                       </form>
                        </div>
                     </div>    
                  </div>
               </div>           
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg>
               </div>
            </div>   
         </div>
      </section>
      </div>
    
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
      $.validator.setDefaults( {
         submitHandler: function () {
            alert( "submitted!" );
         }
      } );

      $( document ).ready( function () {
         $( "#registerForm" ).validate( {
            rules: {
               firstname: "required",
               lastname: "required",
               password: {
                  required: true,
                  minlength: 5
               },
               confirm_password: {
                  required: true,
                  minlength: 5,
                  equalTo: "#password"
               },
               email: {
                  required: true,
                  email: true
               },
               agree: "required"
            },
            messages: {
               firstname: "Please enter your firstname",
               lastname: "Please enter your lastname",
               password: {
                  required: "Please provide a password",
                  minlength: "Your password must be at least 5 characters long"
               },
               confirm_password: {
                  required: "Please provide a password",
                  minlength: "Your password must be at least 5 characters long",
                  equalTo: "Please enter the same password as above"
               },
               email: "Please enter a valid email address",
               agree: "Please accept our policy"
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
               // Add the `help-block` class to the error element
               error.addClass( "help-block" );

               if ( element.prop( "type" ) === "checkbox" ) {
                  error.insertAfter( element.parent( "label" ) );
               } else {
                  error.insertAfter( element );
               }
            },
            highlight: function ( element, errorClass, validClass ) {
               $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
               $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
            }
         } );
      });
   </script>