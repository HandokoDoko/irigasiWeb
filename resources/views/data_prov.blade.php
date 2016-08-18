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
                <h1>Detail Data daerah Irigasi</h1>
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
							<a href="/tambah_data" class="btn btn-green">
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
						{{ $no=0 }}
						@if($irgs!="")
						@foreach($irgs as $key => $data)
							<tr>
								<td>{{ $no+=1 }}</td>
								<td class="hidden-xs">{{ $data->nama }}</td>
								<td>{{$data->Kecamatan}}</td>
								<td <td class="center">
									<form action="/data/remove/{{ $data->id}}" method="post">
                                        <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="delete">
                                        <a class="btn btn-blue" href="/detail/view/{{ $data->id}}"><i class="fa fa-share"></i></a>
                                        <a class="btn btn-blue" href="/data/{{ $data->id}}/edit"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-red" href="#" onclick="$(this).closest('form').submit()"><i class="fa fa-times fa fa-white" width="10"></i></a>
                                        
                                    </form>
								</td>
								
									<!-- <td class="center">
								<div class="visible-md visible-lg hidden-sm hidden-xs">
									<a href="#" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="lihat"><i class="fa fa-share"></i></a>
									<a href="#" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
								</div>
								<div class="visible-xs visible-sm hidden-md hidden-lg">
									<div class="btn-group">
										<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
											<i class="fa fa-cog"></i> <span class="caret"></span>
										</a>
										<ul role="menu" class="dropdown-menu pull-right dropdown-dark">
											<li>
												<a role="menuitem" tabindex="-1" href="#">
													<i class="fa fa-edit"></i> Edit
												</a>
											</li>
											<li>
												<a role="menuitem" tabindex="-1" href="#">
													<i class="fa fa-share"></i> Share
												</a>
											</li>
											
											<li>
											<form action="data/remove/{{$data->id}}" method="post" name="form">
											<input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
												<a role="menuitem" tabindex="-1" onclick="$(this).closest('form').submit()">
													<i class="fa fa-times" ></i> Remove
												</a>
											</form>
											</li>
											
										</ul>
									</div>
								</div>
								</td> -->
							
							</tr>
							@endif
						@endforeach
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