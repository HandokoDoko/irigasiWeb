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
                            <div class="col-lg-4 col-md-5">
                                <div class="panel panel-red panel-calendar">
                                    <div class="panel-heading border-light">
                                        <h4 class="panel-title">Appointments</h4>
                                        <div class="panel-tools">
                                            <div class="dropdown">
                                                <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-white">
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
                                        <div class="height-170">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="actual-date">
                                                        <span class="actual-day"></span>
                                                        <span class="actual-month"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clock-wrapper">
                                                                <div class="clock">
                                                                    <div class="circle">
                                                                        <div class="face">
                                                                            <div id="hour"></div>
                                                                            <div id="minute"></div>
                                                                            <div id="second"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="weather text-light">
                                                                <i class="wi-day-sunny"></i>
                                                                25°
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                            <h1>0</h1>
                                        </div>
                                    </div>
                                    <div class="panel-footer clearfix no-padding">
                                        <div class=""></div>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                                        <a href="{{ url('/data/1') }}" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
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
                                            <h1>0</h1>
                                        </div>
                                    </div>
                                    <div class="panel-footer clearfix no-padding">
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                                        <a href="{{ url('/data/2') }}" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
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
                                            <h1>0</h1>
                                        </div>
                                    </div>
                                    <div class="panel-footer clearfix no-padding">
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                                        <a href="{{ url('/data/3') }}" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
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