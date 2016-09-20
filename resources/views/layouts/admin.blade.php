<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	
<!-- Mirrored from www.cliptheme.com/demo/rapido/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 13 Jan 2015 04:24:48 GMT -->
<head>
		<title>diSerdang Bedagai System</title>
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
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/weather-icons/css/weather-icons.min.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/plugins/nvd3/nv.d3.min.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        @yield('css')
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/css/styles.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/css/styles-responsive.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/css/plugins.css">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/css/themes/theme-default.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="{{ asset('') }}assets-admin/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: SLIDING BAR (SB) -->
		<div id="slidingbar-area">
			<div id="slidingbar">
				<div class="row">
					<!-- start: SLIDING BAR FIRST COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Options</h2>
						<div class="row">
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-folder-open-o"></i>
									Projects <span class="badge badge-info partition-red"> 4 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-envelope-o"></i>
									Messages <span class="badge badge-info partition-red"> 23 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-calendar-o"></i>
									Calendar <span class="badge badge-info partition-blue"> 5 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-bell-o"></i>
									Notifications <span class="badge badge-info partition-red"> 9 </span>
								</button>
							</div>
						</div>
					</div>
					<!-- end: SLIDING BAR FIRST COLUMN -->
					
					<!-- end: SLIDING BAR THIRD COLUMN -->
				</div>
				<div class="row">
					<!-- start: SLIDING BAR TOGGLE BUTTON -->
					<div class="col-md-12 text-center">
						<a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
					</div>
					<!-- end: SLIDING BAR TOGGLE BUTTON -->
				</div>
			</div>
		</div>
		<!-- end: SLIDING BAR -->
		<div class="main-wrapper">
			<!-- start: TOPBAR -->
			<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
				<!-- start: TOPBAR CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
							<i class="fa fa-bars"></i>
						</a>
						<!-- start: LOGO -->

						<a class="navbar-brand" href="/">
							diSerdang Bedagai

						
						</a>
						<!-- end: LOGO -->
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								@if(Auth::user()->pic!="")
									<img src="{{ asset('') }}assets/img/profile/{{Auth::user()->pic}}" class="img-circle" alt="" style="height: 35px; width:35px;"> <span class="username hidden-xs">{{ ucfirst(Auth::user()->name) }}</span> <i class="fa fa-caret-down "></i>
								@endif
								@if(Auth::user()->pic=="")
									<img src="{{ asset('') }}assets/img/profile/anonymous.jpg" class="img-circle" alt="" style="height: 35px; width:35px;"> <span class="username hidden-xs">{{ ucfirst(Auth::user()->name) }}</span> <i class="fa fa-caret-down "></i>
								@endif
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="{{ url('/home') }}">
											Profile
										</a>
									</li>
									<li>
										<a href="{{ url('/') }}">
											Halaman Awal
										</a>
									</li>
									<li>
										<a href="{{ url('/admin') }}">
											Dashboard
										</a>
									</li>
									<li>
										<a href="{{ url('/logout') }}">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
							<li class="right-menu-toggle">
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- end: TOPBAR CONTAINER -->
			</header>
			<!-- end: TOPBAR -->
			<!-- start: PAGESLIDE LEFT -->
			<a class="closedbar inner hidden-sm hidden-xs" href="#">
			</a>
			<nav id="pageslide-left" class="pageslide inner">
				<div class="navbar-content">
					<!-- start: SIDEBAR -->
					<div class="main-navigation left-wrapper transition-left">
						<div class="navigation-toggler hidden-sm hidden-xs">
							<a href="#main-navbar" class="sb-toggle-left">
							</a>
						</div>
						<div class="user-profile border-top padding-horizontal-10 block">
							<div class="inline-block">
								@if(Auth::user()->pic!="")
									<img src="{{ asset('') }}assets/img/profile/{{Auth::user()->pic}}" alt="" style="height: 50px; width:50px; ">
								@endif
								@if(Auth::user()->pic=="")
									<img src="{{ asset('') }}assets/img/profile/anonymous.jpg" alt="" style="height: 50px; width:50px; ">
								@endif
								
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Administrator </h5>
								<h4 class="no-margin"><a href="/home"> {{ ucfirst(Auth::user()->name) }} </a></h4>
							</div>
						</div>
						<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li class="active open">
								<a href="{{ url('/admin') }}"><i class="fa fa-home"></i> <span class="title"> Dashboard </span> </a>
							</li>
							<li>
								<a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Data Irigasi </span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="{{ url('/data/1') }}">
											<span class="title"> Data Pusat </span><span class="label label-default pull-right "></span>
										</a>
									</li>
									<li>
										<a href="{{ url('/data/2') }}">
											<span class="title"> Data Provinsi </span><span class="label label-default pull-right "></span>
										</a>
									</li>
									<li>
										<a href="{{ url('/data/3') }}">
											<span class="title"> Data Kabupaten </span><span class="label label-default pull-right "></span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				<div class="slide-tools">
					<div class="col-xs-6 text-left no-padding">
						<a class="btn btn-sm status" href="#">
							Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
						</a>
					</div>
					<div class="col-xs-6 text-right no-padding">
						<a class="btn btn-sm log-out text-right" href="{{ url('/logout') }}">
							<i class="fa fa-power-off"></i> Log Out
						</a>
					</div>
				</div>
			</nav>
			<!-- end: PAGESLIDE LEFT -->
			<!-- start: PAGESLIDE RIGHT -->
			<!-- end: PAGESLIDE RIGHT -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title">Panel Configuration</h4>
								</div>
								<div class="modal-body">
									Here will be a configuration form
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					@yield('content')
				</div>
			</div>
			<!-- end: SUBVIEW SAMPLE CONTENTS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="{{ asset('') }}assets-admin/plugins/respond.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}assets-admin/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="{{ asset('') }}assets-admin/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="{{ asset('') }}assets-admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/moment/min/moment.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootbox/bootbox.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="{{ asset('') }}assets-admin/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/toastr/toastr.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/truncate/jquery.truncate.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/summernote/dist/summernote.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="{{ asset('') }}assets-admin/js/subview.js"></script>
		<script src="{{ asset('') }}assets-admin/js/subview-examples.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{ asset('') }}assets-admin/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/nvd3/lib/d3.v3.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/nvd3/nv.d3.min.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/nvd3/src/models/historicalBar.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/nvd3/src/models/historicalBarChart.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/nvd3/src/models/stackedArea.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/nvd3/src/models/stackedAreaChart.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="{{ asset('') }}assets-admin/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<script src="{{ asset('') }}assets-admin/js/index.js"></script>
		<script type="text/javascript" src="{{ asset('') }}assets-admin/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}assets-admin/js/table-data.js"></script>
        @yield('js')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="{{ asset('') }}assets-admin/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
        @yield('mainjs')
	</body>
	<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 13 Jan 2015 04:29:01 GMT -->
</html>