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
									<h1>Input Data Pusat<small>Input dan simpan data Irigasi</small></h1>
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
										Form Input
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
										<h4 class="panel-title"><span class="text-bold">Data</span></h4>
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
													Nama Pengambilan
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Nama Pengamblan" id="form-field-1" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Jumlah Bendungan
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Jumlah Bendungan" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Luas Area
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Luas Area" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Panjang Saluran
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Panjang Saluran" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Saluran Primer
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Saluran Primer" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Jenis Saluran Primer
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Jenis Saluran Primer" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Saluran Sekunder
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Jumlah Bendungan" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Jenis Saluran Sekunder
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Jenis Saluran Sekunder" id="form-field-2" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Debit Air
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="Debit Air" id="form-field-2" class="form-control">
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