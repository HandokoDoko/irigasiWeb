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
										<form role="form" class="form-horizontal" action="/simpanDi" method="post">
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-1">
													Nama Pengambilan
												</label>
												<div class="col-sm-5">
													<input placeholder="" class="form-control" required="" id="nama" name="nama" type="text" >
                                                        @if ($errors->has('nama'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('nama') }}</strong>
                                                            </span>
                                                        @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-1">
													Kecamatan
												</label>
												<div class="col-sm-5">
													<input placeholder="" class="form-control" required="" id="nama" name="Kecamatan" type="text" >
                                                        @if ($errors->has('Kecamatan'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('Kecamatan') }}</strong>
                                                            </span>
                                                        @endif
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-1">
													Kewenangan
												</label>
												<div class="col-sm-5">
													<select id="form-field-select-1" class="form-control" name="kewenangan" required="">
												<option value="1" selected="">Pusat</option>
												<option value="2">Provinsi</option>
												<option value="3">Kabupaten</option>
											</select>
                                                        @if ($errors->has('kewenangan'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('kewenangan') }}</strong>
                                                            </span>
                                                        @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Jumlah Bendungan
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" name="jlhBendung" required="">
													@if ($errors->has('jlhBendung'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('jlhBendung') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Luas Area
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="luasArea">
													@if ($errors->has('luasArea'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('LuasArea') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Panjang Saluran
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="panjangSaluran">
													@if ($errors->has('panjangSaluran'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('panjangSaluran') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Saluran Primer
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="saluranPrimer">
													@if ($errors->has('saluranPrimer'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('saluranPrimer') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Jenis Saluran Primer
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="jnsSaluranPrimer">
													@if ($errors->has('jnsSaluranPrimer'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('jnsSaluranPrimer') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											 <input type="hidden" name="_method" value="put">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Saluran Skunder
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="saluranSkunder">
													@if ($errors->has('saluranSkunder'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('saluranSkunder') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Jenis Saluran Skunder
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="jnsSaluranSkunder">
													@if ($errors->has('jnsSaluranSkunder'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('jnsSaluranSkunder') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-2">
													Debit Air
												</label>
												<div class="col-sm-5">
													<input type="text" placeholder="" id="form-field-2" class="form-control" required="" name="debitAir">
													@if ($errors->has('debitAir'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('debitAir') }}</strong>
                                                            </span>
                                                    @endif
												</div>
											</div>
										<div class="from-group">
											 <div class="col-sm-7" align="center">
												<button data-style="expand-right" class="ladda-button" data-color="green"> Simpan <i class="fa fa-arrow-circle-right"></i>
												</button>
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

@section('js')
<script src="assets-admin/plugins/ladda-bootstrap/dist/spin.min.js"></script>
<script src="assets-admin/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
<script src="assets-admin/js/ui-buttons.js"></script>
<script type="text/javascript">	
    var drajat = document.getElementById('drajat');
    var menit = document.getElementById('menit');
    var detik = document.getElementById('detik');
    var btnTambah = document.getElementById('tambah');
    var milDet = 3600;
    var hslDetik = milDet+"."+(parseFloat(menit.value)*60+parseFloat(detik.value));
    btnTambah.addEventListener("click", function(){
    	alert(parseFloat(parseFloat(drajat.value)+parseFloat(parseFloat(hslDetik)/3600)));
    });
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
			FormElements.init();
		});
	</script>
@endsection
