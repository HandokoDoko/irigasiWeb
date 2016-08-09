@extends('layouts.app')

<style>
   #map {
    width: 100%;
    height: 400px;
  }
</style>
@section('content')
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
<!--                     <script>
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
                    </script> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
