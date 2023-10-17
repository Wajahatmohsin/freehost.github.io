<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Recover Password | Admin</title>
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
                                            <h1 class="h5 mb-1">Reset Password</h1>
                                            <p class="text-muted mb-4">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                                            <x-auth-session-status class="mb-4" :status="session('status')" />
                                            <form class="form-group mt-3" method="POST" action="{{ route('password.email') }}">
                                              @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email Address</label>
                                                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block">Send Email</button>
                                                
                                            </form>

                                            <div class="row mt-5">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted">Already have account?  <a href="{{ route('login') }}" class="text-muted font-weight-medium ml-1"><b>Sign In</b></a></p>
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

    </body>

</html>