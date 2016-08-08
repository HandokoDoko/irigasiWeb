<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    
<!-- Mirrored from www.cliptheme.com/demo/rapido/login_login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 13 Jan 2015 04:29:56 GMT -->
<head>
        <title>Rapido - Responsive Admin Template</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="{{ asset('') }}assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/plugins/animate.css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/plugins/iCheck/skins/all.css">


        <!-- start: CORE CSS -->
        <link rel="stylesheet" href="{{ asset('') }}assets/css/styles.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/css/styles-responsive.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/css/plugins.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/css/themes/theme-default.css" id="skin_color">
        <link rel="stylesheet" href="{{ asset('') }}assets/css/print.css" media="print"/>
        <!-- end: CORE CSS -->

        <link rel="shortcut icon" href="favicon.ico" />

        <!--     Fonts and icons     -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href="{{ asset('') }}assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="{{ asset('') }}assets/css/fonts/Rubik-Fonts.css" rel="stylesheet" />

        <!--[if IE 7]>
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        @yield('css')
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login">
        <div class="row">
                <!--<div class="logo">
                    <img src="assets/img/logo.png">
                </div>-->
            
                <!-- start: PAGE CONTENT -->
                @yield('content')
                <!-- end: PAGE CONTENT-->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="assets/plugins/respond.min.js"></script>
        <script src="assets/plugins/excanvas.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
        <!--<![endif]-->
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
        <script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
        <script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/js/login.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                Login.init();
            });
        </script>
    </body>
    <!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/login_login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 13 Jan 2015 04:29:59 GMT -->
</html>

    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    @yield('script')
    <!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->