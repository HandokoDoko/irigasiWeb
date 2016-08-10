@extends('layouts.admin')

<style>
   #map {
    width: 100%;
    height: 400px;
  }
</style>
@section('content')
<div class="container">
                        <!-- start: PAGE HEADER -->
                        <!-- start: TOOLBAR -->
                        <div class="toolbar row">
                            <div class="col-sm-6 hidden-xs">
                                <div class="page-header">
                                    <h1>Dashboard</h1>
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
                                        Dashboard
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- end: BREADCRUMB -->
                        <!-- start: PAGE CONTENT -->
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-sm-6">
                                <div class="panel panel-default panel-white core-box">
                                    <div class="panel-tools">
                                        <a href="#" class="btn btn-xs btn-link panel-close">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="panel-body no-padding">
                                        <div class="partition-green padding-20 text-center core-icon">
                                            <i class="fa fa-bar-chart-o fa-2x icon-big"></i>
                                        </div>
                                        <div class="padding-20 core-content">
                                            <h3 class="title block no-margin">Total Data Pusat</h3>
                                            <h1>100</h1>
                                        </div>
                                    </div>
                                    <div class="panel-footer clearfix no-padding">
                                        <div class=""></div>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                                        <a href="{{ url('/data_provinsi') }}" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6">
                                <div class="panel panel-default panel-white core-box">
                                    <div class="panel-tools">
                                        <a href="#" class="btn btn-xs btn-link panel-close">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="panel-body no-padding">
                                        <div class="partition-blue padding-20 text-center core-icon">
                                            <i class="fa fa-bar-chart-o fa-2x icon-big"></i>
                                        </div>
                                        <div class="padding-20 core-content">
                                            <h3 class="title block no-margin">Total Data Provinsi</h3>
                                            <h1>210</h1>
                                        </div>
                                    </div>
                                    <div class="panel-footer clearfix no-padding">
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6">
                                <div class="panel panel-default panel-white core-box">
                                    <div class="panel-tools">
                                        <a href="#" class="btn btn-xs btn-link panel-close">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="panel-body no-padding">
                                        <div class="partition-red padding-20 text-center core-icon">
                                            <i class="fa fa-bar-chart-o fa-2x icon-big"></i>
                                        </div>
                                        <div class="padding-20 core-content">
                                            <h3 class="title block no-margin">Total Data Kebupaten</h3>
                                            <h1>320</h1>
                                        </div>
                                    </div>
                                    <div class="panel-footer clearfix no-padding">
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


<!-- 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Maps</div>

                <div class="panel-body">
                    <div id="map"></div>
                     <script>
                      function initMap() {
                        var mapDiv = document.getElementById('map');
                        var map = new google.maps.Map(mapDiv, {
                            center: {lat: 44.540, lng: -78.546},
                            zoom: 8
                        });
                      }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWYOBR2vNEocvI6JG-oF1sGVPQz4gF5GQ&callback=initMap">
                    </script>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Daerah Irigasi</div>

                <div class="panel-body">
                    <div id="map"></div>
                    <script>
                      function initMap() {
                        var mapDiv = document.getElementById('map');
                        var map = new google.maps.Map(mapDiv, {
                            center: {lat: 44.540, lng: -78.546},
                            zoom: 8
                        });
                      }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWYOBR2vNEocvI6JG-oF1sGVPQz4gF5GQ&callback=initMap">
                    </script> 
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
