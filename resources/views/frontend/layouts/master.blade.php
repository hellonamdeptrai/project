<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version One || Sellshop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/img/favicon.ico">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/frontend/css/animate.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="/frontend/css/materialdesignicons.min.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="/frontend/css/jquery.simpleLens.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="/frontend/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/frontend/css/meanmenu.min.css">
    <!-- nivo.slider css -->
    <link rel="stylesheet" href="/frontend/css/nivo-slider.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/frontend/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="/frontend/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!-- modernizr js -->
    <script src="/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header section start -->
@include('frontend.includes.header')
<!-- header section end -->

@yield('content')

<!-- footer section start -->
@include('frontend.includes.footer')
<!-- footer section end -->

<!-- all js here -->
<!-- jquery latest version -->
<script src="/frontend/js/vendor/jquery-1.12.3.min.js"></script>
<!-- bootstrap js -->
<script src="/frontend/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="/frontend/js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="/frontend/js/jquery.meanmenu.js"></script>
<!-- countdown JS -->
{{--<script src="/frontend/js/countdown.js"></script>--}}
<!-- nivo.slider JS -->
<script src="/frontend/js/jquery.nivo.slider.pack.js"></script>
<!-- simpleLens JS -->
<script src="/frontend/js/jquery.simpleLens.min.js"></script>
<!-- jquery-ui js -->
<script src="/frontend/js/jquery-ui.min.js"></script>
<!-- load-more js -->
<script src="/frontend/js/load-more.js"></script>
<!-- plugins js -->
<script src="/frontend/js/plugins.js"></script>
<!-- main js -->
<script src="/frontend/js/main.js"></script>
</body>
</html>
