<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- register section starts -->
            <section class="row flexbox-container">
                <div class="col-xl-8 col-10">
                    <div class="card bg-authentication mb-0">
                        <div class="row m-0">
                            <!-- register section left -->
                            <div class="col-md-6 col-12 px-0">
                                <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="text-center mb-2">Sign Up</h4>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p> <small> Please enter your details to sign up and be part of our great community</small>
                                        </p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 mb-50">
                                                        <label for="name">first name</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-50">
                                                        <label for="lastName">last name</label>
                                                        <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last name">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 mb-50">
                                                        <label for="nationalCode">national code</label>
                                                        <input  name="nationalCode" type="number" class="form-control" id="nationalCode" placeholder="national code">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-50">
                                                        <label for="phoneNumber">phone number</label>
                                                        <input name="phoneNumber" type="number" class="form-control" id="phoneNumber" placeholder="phone number">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="address">address</label>
                                                    <input name="address" type="text" class="form-control" id="address" placeholder="address"></div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="postalCode">postal code</label>
                                                    <input name="postalCode" type="text" class="form-control" id="postalCode" placeholder="postal code"></div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="image">Personal Image</label>
                                                    <input name="image" type="file" class="form-control" id="image" placeholder="image">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="natCardImage">National Card</label>
                                                    <input name="natCardImage" type="file" class="form-control" id="natCardImage" placeholder="national card image">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="resumes">Resumes</label>
                                                    <input name="resumes" type="file" class="form-control" id="resumes" placeholder="resumes">
                                                </div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="email">Email address</label>
                                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email address"></div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="password">Password</label>
                                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                            </form>
                                            <hr>
                                            <div class="text-center"><small class="mr-25">Already have an account?</small><a href="auth-login.html"><small>Sign in</small> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- image section right -->
                            <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                <img class="img-fluid" src="../../../app-assets/images/pages/register.png" alt="branding logo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- register section endss -->
        </div>
    </div>
</div>
<!-- END: Content-->
<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<script src="../../../app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
