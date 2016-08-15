@extends('layouts.admin')

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

                        var locations = [
                          ['Bondi Beach', 3.405096, 99.157628, 4],
                          ['Coogee Beach', 3.330823, 99.159543, 5],
                          ['Cronulla Beach', 3.5000, 99.159212, 3],
                          ['Manly Beach', 3.3430, 99.159800, 2],
                          ['Medan', 3.33109, 99.159102, 1]
                        ];

                        var map = new google.maps.Map(mapDiv, {
                          zoom: 10,
                          center: new google.maps.LatLng(3.330823, 99.159543),
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        });

                        var infowindow = new google.maps.InfoWindow();

                        var marker, i;

                        for (i = 0; i < locations.length; i++) {  
                          marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            map: map,
                          });

                          marker.setIcon("http://googlemaps.googlermania.com/img/marker_flag.png");

                          google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                              infowindow.setContent(locations[i][0]);
                              infowindow.open(map, marker);
                            }
                          })(marker, i));
                        }
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