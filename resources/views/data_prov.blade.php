@extends('layouts.admin')

@section('css')
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets-admin/plugins/select2/select2.css" />
@endsection

@section('content')
<div class="container">
    <!-- start: PAGE HEADER -->
    <!-- start: TOOLBAR -->
    <div class="toolbar row">
        <div class="col-sm-6 hidden-xs">
            <div class="page-header">
                <h1>Detail Data Provinsi</h1>
            </div>
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
                    Data Provinsi
                </li>
            </ol>
        </div>

		<div class="col-md-12">
			<!-- start: DYNAMIC TABLE PANEL -->
			<div class="panel panel-white">
				<div class="panel-heading">
					<h4 class="panel-title">Tabel <span class="text-bold">Data</span></h4>
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
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 space20">
							<a href="{{ url('tambah_data') }}" class="btn btn-green">
								Tambah Data <i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
						<thead>
							<tr>
								<th>No.</th>
								<th class="hidden-xs">Nama Daerah Irigasi</th>
								<th>Kecamatan</th>
								<th class="hidden-xs">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td class="hidden-xs">AEK BOLON</td>
								<td>Kecamatan Serdang</td>
								<td class="hidden-xs">Lihat</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- end: DYNAMIC TABLE PANEL -->
		</div>
	</div>
</div>
@endsection

@section('mainjs')
	<script>
		jQuery(document).ready(function() {
			Main.init();
			//SVExamples.init();
			Index.init();
			TableData.init();
		});
	</script>
@endsection