<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('Backend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ URL::asset('Backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
    <style>
        /* تنسيق الـ loader */
        .loader {
            position: fixed;
            left: 50%;
            top: 50%;
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #3437db;
            animation: spin 1s linear infinite;
            z-index: 9999;
        }

        /* body{

            display: flex;
            justify-content: center;
            align-items: flex-end;
        } */
        /* مركز الـ loader في الشاشة */
        .loader-container {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.804);
            z-index: 9998;
        }

        /* حركة الدوران */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .data_buttons {


            width: 100%;
            /* height: ; */

            display: flex;
            justify-content: space-between;
            align-items: center;


        }

        .data_buttons>a {


            width: 130px !important;
            height: 50px !important;
            padding-top: 10px !important;



        }

        @import url('https://fonts.googleapis.com/css?family=Muli');

        body {
            font-family: Arial;
            font-family: 'Muli', sans-serif;
        }

        .nav-wrapper {
            width: 300px;
            margin: 100px auto;
            text-align: center;
        }

        .sl-nav {
            display: inline;
        }

        .sl-nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative;
            display: inline-block;
        }

        .sl-nav li {
            cursor: pointer;
            padding-bottom: 10px;
        }

        .sl-nav li ul {
            display: none;
        }

        .sl-nav li:hover ul {
            position: absolute;
            top: 29px;
            right: -15px;
            display: block;
            background: #fff;
            width: 142px;
            padding-top: 0px;
            z-index: 1;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        .sl-nav li:hover .triangle {
            position: absolute;
            top: 15px;
            right: -10px;
            z-index: 10;
            height: 14px;
            overflow: hidden;
            width: 30px;
            background: transparent;
        }

        .sl-nav li:hover .triangle:after {
            content: '';
            display: block;
            z-index: 20;
            width: 15px;
            transform: rotate(45deg) translateY(0px) translatex(10px);
            height: 15px;
            background: #fff;
            border-radius: 2px 0px 0px 0px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        .sl-nav li ul li {
            position: relative;
            text-align: left;
            background: transparent;
            padding: 15px 15px;
            padding-bottom: 0;
            z-index: 2;
            font-size: 15px;
            color: #3c3c3c;
        }

        .sl-nav li ul li:last-of-type {
            padding-bottom: 15px;
        }

        .sl-nav li ul li span {
            padding-left: 5px;
        }

        .sl-nav li ul li span:hover,
        .sl-nav li ul li span.active {
            color: #146c78;
        }

        .sl-flag {
            display: inline-block;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4);
            width: 15px;
            height: 15px;
            background: #aaa;
            border-radius: 50%;
            position: relative;
            top: 2px;
            overflow: hidden;
        }

        .flag-de {
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAIAAAAC64paAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAZdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjAuMTM0A1t6AAAAPUlEQVQ4T+3HMQ0AIBTE0NOHM8x9B7hgh71bIWGieUvze1m7kHGBr/AVvsJX+EpmP5dV5/gKX+ErfIUvVDYcX2NMxQC8PAAAAABJRU5ErkJggg==');
            background-size: cover;
            background-position: center center;
        }

        .flag-austria {
            background-size: cover;
            background-position: center center;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABD0lEQVQ4jaWTwUrDQBCG92bwEbKzZc1ML6Ki6Psp+gJCDsEefA1tQzAXn0AqSA+5eXF3e0nIrlLjIVhMWqtJB/7b/N/yM/8y1po3EZxpoJHhNFMc3xVHp4FelMBozofH7f3lvPr+ruZ0q4Gq36SAPjUMbzIpvRWzAnrcZG6AOKYNyF8vr4UIjOrMAzztav6OY2DviJVxclUmD2kfFXFywZxzM+dc1VPPzFr70RdgrS22B2wZYcrK+8llPo7TPiruxuds7tNJ3bDOZ1wYgQd1kYBGXQEGKFw2MZPSUxzTfwMExhXRTuM/ZFJ6SmC0KY4CWhigcMX8cwwEhwYo1IBTDUGuIcgVpycNeK0HtN/e/wJkPl9ljmKEagAAAABJRU5ErkJggg==');
        }
    </style>
    @stack('styles')

    @yield('css')


</head>
