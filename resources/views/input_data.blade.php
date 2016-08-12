@extends('layouts.admin')

@section('css')
		<link rel="stylesheet" href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-social-buttons/bootstrap-social.css">
		<link rel="stylesheet" href="assets/plugins/ladda-bootstrap/dist/ladda.min.css">
		<link rel="stylesheet" href="assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css">
		<style>
			#map {
			width: 100%;
			height: 400px;
			margin-bottom: 10px;
			}
		</style>
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
													<input type="text" placeholder="Nama Pengambilan" id="form-field-1" class="form-control">
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
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Input Titik
												</label>
												<div class="col-sm-5">
													<div class="input-group">
														<input type="text" value="" class="form-control controls" id="carimap">
														<span class="btn input-group-addon btn-green" data-toggle="dropdown"> <i class="fa fa-plus-circle"></i> Tambah</span>
													</div>
												</div>
											</div>
											<div class="from-group">
												<div class="col-sm-7" align="center">
								                    <div id="map"></div>
								                     <script>
								                      function initMap() {
								                        var mapDiv = document.getElementById('map');
								                        var map = new google.maps.Map(mapDiv, {
								                            center: {lat: 3.397998, lng: 99.070280},
								                            zoom: 10
								                        });
								                        var marker = new google.maps.Marker({
								                        	position:{lat: 3.397998, lng: 99.070280},
								                        	map:map,
								                        	draggable: true
								                        });
								                        var cariPlace = new google.maps.places.SearchBox(document.getElementById('carimap'));

								                        google.maps.event.addListener(cariPlace, 'places_changed', function(){
								                        	var places = cariPlace.getPlaces();

								                        	var bounds = new google.maps.LatLngBounds();
								                        	var i, place;
								                        	for (i = 0; place=places[i]; i++) {
								                        		bounds.extend(place.geometry.location);
								                        		marker.setPosition(place.geometry.location);
								                        	}
								                        	alert(bounds.text);

								                        	map.fitBounds(bounds);
								                        	map.setZoom(15);
								                        })
								                      }
								                    </script>
								                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWYOBR2vNEocvI6JG-oF1sGVPQz4gF5GQ&callback=initMap&libraries=places">
								                    </script>
												</div>
											</div>
										</form>
										<div class="from-group">
											<div class="col-sm-7" align="center">
												<button data-style="expand-right" class="ladda-button" data-color="green"> Simpan <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- end: TEXT FIELDS PANEL -->
							</div>
						</div>
						</div>
@endsection

@section('js')
<script src="assets-admin/plugins/ladda-bootstrap/dist/spin.min.js"></script>
<script src="assets-admin/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
<script src="assets-admin/js/ui-buttons.js"></script>
@endsection
@section('mainjs')
	<script>
		jQuery(document).ready(function() {
			Main.init();
			//SVExamples.init();
			Index.init();
			TableData.init();
			UIButtons.init();
		});
	</script>
@endsection
