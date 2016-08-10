@extends('layouts.admin')

@section('css')
		<link rel="stylesheet" href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
@endsection

@section('content')
<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1>Form Elements <small>common form elements &amp; layouts </small></h1>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<a href="#" class="back-subviews">
									<i class="fa fa-chevron-left"></i> BACK
								</a>
								<a href="#" class="close-subviews">
									<i class="fa fa-times"></i> CLOSE
								</a>
								<div class="toolbar-tools pull-right">
									<!-- start: TOP NAVIGATION MENU -->
									<ul class="nav navbar-right">
										<!-- start: TO-DO DROPDOWN -->
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<i class="fa fa-plus"></i> SUBVIEW
												<div class="tooltip-notification hide">
													<div class="tooltip-notification-arrow"></div>
													<div class="tooltip-notification-inner">
														<div>
															<div class="semi-bold">
																HI THERE!
															</div>
															<div class="message">
																Try the Subview Live Experience
															</div>
														</div>
													</div>
												</div>
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-subview">
												<li class="dropdown-header">
													Notes
												</li>
												<li>
													<a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
												</li>
												<li>
													<a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
												</li>
												<li class="dropdown-header">
													Calendar
												</li>
												<li>
													<a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
												</li>
												<li>
													<a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
												</li>
												<li class="dropdown-header">
													Contributors
												</li>
												<li>
													<a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
												</li>
												<li>
													<a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-messages">
												<li>
													<span class="dropdown-header"> You have 9 messages</span>
												</li>
												<li>
													<div class="drop-down-wrapper ps-container">
														<ul>
															<li class="unread">
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="assets/images/avatar-2.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Nicole Bell</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time"> Just Now</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="assets/images/avatar-3.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Steven Thompson</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">8 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="assets/images/avatar-5.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Kenneth Ross</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">14 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="view-all">
													<a href="pages_messages.html">
														See All
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-search">
											<a href="#">
												<i class="fa fa-search"></i> SEARCH
											</a>
											<!-- start: SEARCH POPOVER -->
											<div class="popover bottom search-box transition-all">
												<div class="arrow"></div>
												<div class="popover-content">
													<!-- start: SEARCH FORM -->
													<form class="" id="searchform" action="#">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Search">
															<span class="input-group-btn">
																<button class="btn btn-main-color btn-squared" type="button">
																	<i class="fa fa-search"></i>
																</button> </span>
														</div>
													</form>
													<!-- end: SEARCH FORM -->
												</div>
											</div>
											<!-- end: SEARCH POPOVER -->
										</li>
									</ul>
									<!-- end: TOP NAVIGATION MENU -->
								</div>
							</div>
							<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="#">
											Dashboard
										</a>
									</li>
									<li class="active">
										Form Elements
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-sm-12">
								<!-- start: TEXT FIELDS PANEL -->
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title">Text <span class="text-bold">Fields</span></h4>
										<div class="panel-tools">
											<div class="dropdown">
												<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu dropdown-light pull-right" role="menu">
													<li>
														<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
													</li>
													<li>
														<a class="panel-refresh" href="#">
															<i class="fa fa-refresh"></i> <span>Refresh</span>
														</a>
													</li>
													<li>
														<a class="panel-config" href="#panel-config" data-toggle="modal">
															<i class="fa fa-wrench"></i> <span>Configurations</span>
														</a>
													</li>
													<li>
														<a class="panel-expand" href="#">
															<i class="fa fa-expand"></i> <span>Fullscreen</span>
														</a>
													</li>
												</ul>
											</div>
											<a class="btn btn-xs btn-link panel-close" href="#">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="panel-body">
										<form role="form" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-1">
													Text Field
												</label>
												<div class="col-sm-9">
													<input type="text" placeholder="Text Field" id="form-field-1" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Password
												</label>
												<div class="col-sm-9">
													<input type="password" placeholder="Password" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group has-success">
												<label class="col-sm-2 control-label" for="form-field-3" >
													Success Field
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-3" class="form-control">
												</div>
											</div>
											<div class="form-group has-warning">
												<label class="col-sm-2 control-label" for="form-field-4" >
													Warning Field
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-4" class="form-control">
												</div>
											</div>
											<div class="form-group has-error">
												<label class="col-sm-2 control-label" for="form-field-5" >
													Error Field
												</label>
												<div class="col-sm-9">
													<input type="text" id="form-field-5" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-6">
													Block Help
												</label>
												<div class="col-sm-9">
													<input type="text" placeholder="Text Field" id="form-field-6" class="form-control">
													<span class="help-block"><i class="fa fa-info-circle"></i> A block of help text that breaks onto a new line and may extend beyond one line.</span>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-7">
													Inline Help
												</label>
												<div class="col-sm-7">
													<input type="text" placeholder="Text Field" id="form-field-7" class="form-control">
												</div>
												<span class="help-inline col-sm-2"> <i class="fa fa-info-circle"></i> Inline help text </span>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-8">
													Tooltip and Help Button
												</label>
												<div class="col-sm-9">
													<span class="input-help">
														<input id="form-field-8" class="form-control tooltips" type="text" data-placement="top" title="" placeholder="Tooltip on hover" data-rel="tooltip" data-original-title="Hello Tooltip!">
														<i class="help-button popovers" title="" data-content="More details." data-placement="right" data-trigger="hover" data-rel="popover" data-original-title="Popover on hover"></i> </span>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">
													Sizes
												</label>
												<div class="col-sm-2">
													<input type="text" placeholder="Text Field" id="form-field-9" class="form-control">
												</div>
												<div class="col-sm-3">
													<input type="text" placeholder="Text Field" id="form-field-10" class="form-control">
												</div>
												<div class="col-sm-4">
													<input type="text" placeholder="Text Field" id="form-field-11" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-12">
													Large Field
												</label>
												<div class="col-sm-9">
													<input type="text" placeholder="Text Field" id="form-field-12" class="form-control input-lg">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-13">
													Small Field
												</label>
												<div class="col-sm-9">
													<input type="text" placeholder="Text Field" id="form-field-13" class="form-control input-sm">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">
													Input with Icon
												</label>
												<div class="col-sm-3">
													<span class="input-icon">
														<input type="text" placeholder="Text Field" id="form-field-14" class="form-control">
														<i class="fa fa-user"></i> </span>
												</div>
												<div class="col-sm-3">
													<span class="input-icon">
														<input type="text" placeholder="Text Field" id="form-field-15" class="form-control">
														<i class="fa fa-quote-left"></i> </span>
												</div>
												<div class="col-sm-3">
													<span class="input-icon">
														<input type="text" placeholder="Text Field" id="form-field-16" class="form-control">
														<i class="fa fa-hand-o-right"></i> </span>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">
													Right Icon
												</label>
												<div class="col-sm-3">
													<span class="input-icon input-icon-right">
														<input type="text" placeholder="Text Field" id="form-field-17" class="form-control">
														<i class="fa fa-rocket"></i> </span>
												</div>
												<div class="col-sm-3">
													<span class="input-icon input-icon-right">
														<input type="text" placeholder="Text Field" id="form-field-18" class="form-control">
														<i class="fa fa-quote-right"></i> </span>
												</div>
												<div class="col-sm-3">
													<span class="input-icon input-icon-right">
														<input type="text" placeholder="Text Field" id="form-field-19" class="form-control">
														<i class="fa fa-hand-o-left"></i> </span>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">
													Add-on
												</label>
												<div class="col-sm-3">
													<div class="input-group">
														<span class="input-group-addon">@</span>
														<input type="text" placeholder="Username" class="form-control">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="input-group">
														<input type="text" class="form-control">
														<span class="input-group-addon">.00</span>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="input-group">
														<span class="input-group-addon">$</span>
														<input type="text" class="form-control">
														<span class="input-group-addon">.00</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-20">
													With Character Limit
												</label>
												<div class="col-sm-9">
													<input type="text" placeholder="Text Field" id="form-field-20" class="form-control limited" maxlength="40">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-21">
													Disabled
												</label>
												<div class="col-sm-9">
													<input type="text" placeholder="Text Field" id="form-field-21" class="form-control" disabled="disabled">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- end: TEXT FIELDS PANEL -->
							</div>
						</div>
						</div>
@endsection