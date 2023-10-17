<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Admin | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Toaster Notifications !-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>

    <body>

        <div class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center min-vh-100">
                            <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <a href="index.html" class="d-block mb-5">
                                                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="app-logo" height="18" />
                                                </a>
                                            </div>
                                            <h1 class="h5 mb-1">Welcome Back!</h1>
                                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                <form class="form-group mt-3" method="POST" action="{{ route('login') }}">
                            @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="login" id="login" placeholder="Email/Username/Phone">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>

                    <div class="text-center mt-4">
                        <h5 class="text-muted font-size-16">Sign in using</h5>
                    
                        <ul class="list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                </form>

                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted mb-2"><a href="{{ route('password.request') }}" class="text-muted font-weight-medium ml-1">Forgot your password?</a></p>
                                                    <p class="text-muted mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-muted font-weight-medium ml-1"><b>Sign Up</b></a></p>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> <!-- end .padding-5 -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end .w-100 -->
                        </div> <!-- end .d-flex -->
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- jQuery  -->
        <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/waves.js') }}"></script>
        <script src="{{ asset('backend/assets/js/simplebar.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/theme.js') }}"></script>



             <!--Toaster Js !-->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
@if(Session::has('message'))
var type = "{{ Session::get('alert-type') }}"
switch(type){
case 'info':
toastr.info(" {{ Session::get('message') }} ");
break;

case 'success':
toastr.success(" {{ Session::get('message') }} ");
break;

case 'warning':
toastr.warning(" {{ Session::get('message') }} ");
break;

case 'error':
toastr.error(" {{ Session::get('message') }} ");
break; 
}
@endif 

</script>

    </body>

</html>