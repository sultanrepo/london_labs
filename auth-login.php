<?php

session_start();

//Include Session Token
include("sessionConfig/sessionToken.php");

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">


    
<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 05:44:44 GMT -->
<head>

        <meta charset="utf-8">
        <title>London Labs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">

        <?php
    
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_GET['get_token']) && empty($_SESSION["token"])) {
            $token = bin2hex(random_bytes(64));
            $_SESSION["token"] = $token;
        }
        if (isset($_GET['kill_token'])) {
            unset($_SESSION["token"]);
            session_destroy();
        }
        if (isset($_SESSION["token"])) {
            echo '<meta name="token" content="' . $_SESSION["token"] . '">';
        }
        ?>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Fonts css load -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">
        <!-- Sweet Alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- JQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>


    </head>

    <body>


        <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="card mb-0">
                            <div class="row g-0 align-items-center">
                                <!--end col-->
                                <div class="col-xxl-6 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-5 m-lg-4">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl">Welcome Back</h5>
                                                <p class="text-muted">Sign in to continue to <b>London Labs</b>.</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form id="signin-form" method="post">
                            
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                                        <div class="position-relative ">
                                                            <input type="number" class="form-control  password-input" id="mobileno" name="mobileno" placeholder="Enter Mobile Number" required>
                                                        </div>
                                                    </div>
                            
                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset.html" class="text-muted">Forgot password?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input " placeholder="Enter password" id="password-input" name="password" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                    </div>
                            
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                    </div>
                            
                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <h5 class="fs-sm mb-4 title">Sign In with</h5>
                                                        </div>
                                                        <div class="pt-2 hstack gap-2 justify-content-center">
                                                            <button type="button" class="btn btn-subtle-primary btn-icon"><i class="ri-facebook-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-danger btn-icon"><i class="ri-google-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-dark btn-icon"><i class="ri-github-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-info btn-icon"><i class="ri-twitter-fill fs-lg"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                            
                                                <div class="text-center mt-5">
                                                    <p class="mb-0">Don't have an account ? <a href="auth-signup.html" class="fw-semibold text-secondary text-decoration-underline"> SignUp</a> </p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        

        
        <script src="assets/js/pages/password-addon.init.js"></script>
        
        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        
        <!-- swiper.init js -->
        <script src="assets/js/pages/swiper.init.js"></script>
        <!-- JS -->
        <script src="assets/js/js/login.js"></script>
        <?php 
        
        if (isset($_GET['status'])) {
            ?>
            <script>
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Please Login..!',
                  showConfirmButton: false,
                  timer: 2000
                })
            </script>
            <?php   
        }

        ?>

    </body>


<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 05:44:44 GMT -->
</html>