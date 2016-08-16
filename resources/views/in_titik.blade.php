@extends('layouts.admin')

@section('css')
		<meta name="csrf-token" content="{{ csrf_token() }}" />
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
				height: 500px;
				margin-bottom: 10px;
				background-color: gray;
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
				<h1>Input Koordinat<small>Input dan simpan data Irigasi</small></h1>
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
				<li class="breadchrumb">
					<a href="#">Form Input</a>
				</li>
				<li class="active">
					Input Koordinat
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
					<h4 class="panel-title"><span class="text-bold">Data {{ $irigasi->id }}</span></h4>
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
					<form role="form" class="form-horizontal"  action="/simpanKoordinat" method="POST" accept-charset="UTF-8">{!! Form::open(['method' => 'post']) !!}
			        	<div id="map"></div>
						<input type="hidden" name="id" id="id" value="{{ $irigasi->id }}">
						<input type="hidden" name="lat" id="lat" value="">
						<input type="hidden" name="lng" id="lng" value="">
						<div class="form-group">
							<label class="col-sm-7 control-label" for="form-field-2">
							<b>Koordinat</b>
							</label>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label" for="form-field-2">
								Latitude
							</label>
							<div class="col-sm-7">
								<div class="input-group">
									<input id="latDrajat" type="number" name="latDrajat" style="width:50px;"> <b>°</b>  <input id="latMenit" type="number" name="latMenit" style="width:50px;"> <b>'</b>  <input id="latDetik" type="number" name="latDetik" style="width:100px;"> <b>"</b> 
									<select name="latDms" id="latDms">
										<option value="S">S</option><option value="N">N</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label" for="form-field-2">
								Longtitude
							</label>
							<div class="col-sm-7">
								<div class="input-group">
									<input id="lngDrajat" type="number" name="lngDrajat" style="width:50px;"> <b>°</b>  <input id="lngMenit" type="number" name="lngMenit" style="width:50px;"> <b>'</b>  <input id="lngDetik" type="number" name="lngDetik" style="width:100px;"> <b>"</b> 
									<select name="lngDms" id="lngDms">
										<option value="E">E</option><option value="W">W</option>
									</select>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-5 control-label" for="form-field-2">
							<b>Nama</b>
							</label>
							<div class="col-sm-7">
								<div class="input-group">
									<input type="text" name="nama" id="nama" class="form-input">
								</div>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-5 control-label" for="form-field-2">
							<b>Deskripsi</b>
							</label>
							<div class="col-sm-7">
								<div class="input-group">
									<textarea name="des" id="des" class="form-input"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-7">
							</div>
							<div class="col-sm-5">
								<div class="input-group">
									<input style="width:100px;" type="button" id="tambah" name="tambah" class="btn input-group-addon btn-green" value="Cek Map">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-7">
							</div>
							<div class="col-sm-5">
								<ul id="adalah" name="adalah">
								</ul>
							</div>
						</div>

						<div class="from-group">
							<div class="col-sm-12" align="center">
								<button data-style="expand-right" class="ladda-button" data-color="green"> Tambah <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</div>
						{{ Form::close() }}
					</form>
					</div>
				</div>
			</div>
			<!-- end: TEXT FIELDS PANEL -->
		</div>
	</div>
</div>
@endsection

@section('js')
  <script src="{{ asset('') }}assets-admin/plugins/ladda-bootstrap/dist/spin.min.js"></script>
  <script src="{{ asset('') }}assets-admin/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
  <script src="{{ asset('') }}assets-admin/js/ui-buttons.js"></script>
 <script type="text/javascript">
  function initMap() {
	var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 3.397998, lng: 99.070280},
        zoom: 10
    });
/*    var marker = new google.maps.Marker({
    	position:{lat: 3.397998, lng: 99.070280},
    	map:map,
    	draggable: true
    });*/
 	}
//Variabel Latitude
    var latDrajat = document.getElementById('latDrajat');
    var latMenit = document.getElementById('latMenit');
    var latDetik = document.getElementById('latDetik');
    var latDirek = document.getElementById('latDms');
    var btnTambah = document.getElementById('tambah');

//Variabel Longitude
    var lngDrajat = document.getElementById('lngDrajat');
    var lngMenit = document.getElementById('lngMenit');
    var lngDetik = document.getElementById('lngDetik');
    var lngDirek = document.getElementById('lngDms');
    var list = document.getElementById('adalah');

	var lat_, lng_;


    var inLat = document.getElementById('lat');
    var inLng = document.getElementById('lng');

	var mapDiv = document.getElementById('map');
/*    var milDet = 3600;
    var hslDetik = milDet+"."+(parseFloat(menit.value)*60+parseFloat(detik.value));*/
    function ConvertDMSToDD(degrees, minutes, seconds, direction) {
	    var dd = degrees + minutes/60 + seconds/(60*60);

	    if (direction == "S" || direction == "W") {
	        dd = dd * -1;
	    } // Don't do anything for N or E
	    return dd;
	}
    btnTambah.addEventListener("click", function(){
    	if (btnTambah.value == "Cek Map") {
	    	lat_ = ConvertDMSToDD(parseFloat(latDrajat.value), parseFloat(latMenit.value), parseFloat(latDetik.value), latDirek.value);
	    	lng_ = ConvertDMSToDD(parseFloat(lngDrajat.value), parseFloat(lngMenit.value), parseFloat(lngDetik.value), lngDirek.value);

			var map = new google.maps.Map(mapDiv, {
			    center: {lat: lat_, lng: lng_},
			    zoom: 15
			});
			var marker = new google.maps.Marker({
				position:{lat: lat_, lng: lng_},
				map:map
			});

			inLat.value = lat_;
			inLng.value = lng_;
    		btnTambah.value = "Tambah";
		}
		else{
    		alert(lat_+" "+lng_);
    		btnTambah.value = "Cek Map";
		}
    });
</script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWYOBR2vNEocvI6JG-oF1sGVPQz4gF5GQ&callback=initMap&libraries=places">
	</script>
@endsection
@section('mainjs')
	<script>
		jQuery(document).ready(function() {
			Main.init();
			//SVExamples.init();
			Index.init();
			TableData.init();
			UIButtons.init();
			//FormElements.init();
		});
	</script>
@endsection
