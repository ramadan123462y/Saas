<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Saller / Login </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('Backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('Backend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto+Slab:400,700);

        body {
            text-align: center;
            padding: 24px 24px 96px;
            font-family: 'Roboto Slab', serif;
        }

        h1,
        h2 {
            margin-bottom: 48px;
            font-weight: normal;
        }

        .button {
            width: auto;
            display: inline-block;
            padding: 0 18px 0 6px;
            border: 0 none;
            border-radius: 5px;
            text-decoration: none;
            transition: all 250ms linear;
        }

        .button:hover {
            text-decoration: none;
        }

        .button--social-login {
            margin-bottom: 12px;
            margin-right: 12px;
            color: white;
            height: 50px;
            line-height: 46px;
            position: relative;
            text-align: left;
        }

        .button--social-login .icon {
            margin-right: 12px;
            font-size: 24px;
            line-height: 24px;
            width: 42px;
            height: 24px;
            text-align: center;
            display: inline-block;
            position: relative;
            top: 4px;
        }

        .button--social-login .icon:before {
            display: inline-block;
            width: 40px;
        }

        .button--social-login .icon:after {
            content: "";
        }

        .button--bitbucket {
            background-color: #205081;
            border: 1px solid #163758;
        }

        .button--bitbucket .icon {
            border-right: 1px solid #163758;
        }

        .button--bitbucket .icon:after {
            border-right: 1px solid #2a69aa;
        }

        .button--bitbucket:hover {
            background-color: #1b436d;
        }

        .button--dropbox {
            background-color: #007DE1;
            border: 1px solid #0061ae;
        }

        .button--dropbox .icon {
            border-right: 1px solid #0061ae;
        }

        .button--dropbox .icon:after {
            border-right: 1px solid #1597ff;
        }

        .button--dropbox:hover {
            background-color: #006fc8;
        }

        .button--facebook {
            background-color: #4b70ab;
            border: 1px solid #3b5988;
        }

        .button--facebook .icon {
            border-right: 1px solid #3b5988;
        }

        .button--facebook .icon:after {
            border-right: 1px solid #6b8bbe;
        }

        .button--facebook:hover {
            background-color: #436499;
        }

        .button--flickr {
            background-color: #FF0084;
            border: 1px solid #cc006a;
        }

        .button--flickr .icon {
            border-right: 1px solid #cc006a;
        }

        .button--flickr .icon:after {
            border-right: 1px solid #ff339d;
        }

        .button--flickr:hover {
            background-color: #e60077;
        }

        .button--github {
            background-color: #333;
            border: 1px solid #1a1a1a;
        }

        .button--github .icon {
            border-right: 1px solid #1a1a1a;
        }

        .button--github .icon:after {
            border-right: 1px solid #4d4d4d;
        }

        .button--github:hover {
            background-color: #262626;
        }

        .button--google {
            background-color: #3F85F4;
            border: 1px solid #0f66f1;
        }

        .button--google .icon {
            border-right: 1px solid #0f66f1;
        }

        .button--google .icon:after {
            border-right: 1px solid #6fa4f7;
        }

        .button--google:hover {
            background-color: #2776f3;
        }

        .button--googleplus {
            background-color: #DD4B39;
            border: 1px solid #c23321;
        }

        .button--googleplus .icon {
            border-right: 1px solid #c23321;
        }

        .button--googleplus .icon:after {
            border-right: 1px solid #e47365;
        }

        .button--googleplus:hover {
            background-color: #d73925;
        }

        .button--linkedin {
            background-color: #0087be;
            border: 1px solid #00638b;
        }

        .button--linkedin .icon {
            border-right: 1px solid #00638b;
        }

        .button--linkedin .icon:after {
            border-right: 1px solid #00abf1;
        }

        .button--linkedin:hover {
            background-color: #0075a5;
        }

        .button--microsoft {
            background-color: #00A4EF;
            border: 1px solid #0081bc;
        }

        .button--microsoft .icon {
            border-right: 1px solid #0081bc;
        }

        .button--microsoft .icon:after {
            border-right: 1px solid #23baff;
        }

        .button--microsoft:hover {
            background-color: #0093d6;
        }

        .button--openid {
            background-color: #F78C40;
            border: 1px solid #f56f0f;
        }

        .button--openid .icon {
            border-right: 1px solid #f56f0f;
        }

        .button--openid .icon:after {
            border-right: 1px solid #f9a971;
        }

        .button--openid:hover {
            background-color: #f67d28;
        }

        .button--soundcloud {
            background-color: #FF5500;
            border: 1px solid #cc4400;
        }

        .button--soundcloud .icon {
            border-right: 1px solid #cc4400;
        }

        .button--soundcloud .icon:after {
            border-right: 1px solid #ff7733;
        }

        .button--soundcloud:hover {
            background-color: #e64d00;
        }

        .button--spotify {
            background-color: #2EBD59;
            border: 1px solid #249446;
        }

        .button--spotify .icon {
            border-right: 1px solid #249446;
        }

        .button--spotify .icon:after {
            border-right: 1px solid #4bd374;
        }

        .button--spotify:hover {
            background-color: #29a84f;
        }

        .button--twitter {
            background-color: #3B94D9;
            border: 1px solid #257abc;
        }

        .button--twitter .icon {
            border-right: 1px solid #257abc;
        }

        .button--twitter .icon:after {
            border-right: 1px solid #66abe1;
        }

        .button--twitter:hover {
            background-color: #2988d2;
        }

        .button--yahoo {
            background-color: #500095;
            border: 1px solid #350062;
        }

        .button--yahoo .icon {
            border-right: 1px solid #350062;
        }

        .button--yahoo .icon:after {
            border-right: 1px solid #6b00c8;
        }

        .button--yahoo:hover {
            background-color: #42007c;
        }
    </style>



</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ URL::asset('Backend/assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST" action="" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email:</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" value="admin@gmail.com"
                                                    class="form-control" id="yourUsername" required>

                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                            <x-inline_alert name=email></x-inline_alert>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password:</label>
                                            <input type="password" name="password" value="12345678" class="form-control"
                                                id="yourPassword" required>

                                            <div class="invalid-feedback">Please enter your password! </div>
                                            <x-inline_alert name=password></x-inline_alert>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12" style="display: flex;justify-content: space-between">


                                            <a style="width:170px" href="{{ url('admin/auth/redirect/google') }}" class="button button--social-login button--facebook" ><i class="icon fa fa-facebook"></i>Facebook</a>
                                            <a  style="width:170px"  href="{{ url('admin/auth/redirect/Facebook') }}" class="button button--social-login button--googleplus" ><i class="icon fa fa-google-plus"></i> Google +</a>
                                            <a style="width:170px" href="{{ url('admin/auth/redirect/github') }}" class="button button--social-login button--github" ><i class="icon fa fa-github"></i>Github</a>
                                            <a style="width:170px" href="{{ url('admin/auth/redirect/dribbble') }}" class="button button--social-login button--flickr" ><i class="icon fa fa-flickr"></i>Dribble</a>
                                        </div>
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('Backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('Backend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('Backend/assets/js/main.js') }}"></script>

</body>

</html>
