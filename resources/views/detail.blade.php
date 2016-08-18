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
                <div class="panel-heading">Map
            </div>

                <div class="panel-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
                <div class="panel panel-white">
                  <div class="panel-heading">
                    Data Irigasi Koordinat
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
                          <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                        </li>
                        <li>
                          <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                        </li>
                        <li>
                          <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                        </li>                   
                      </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p>
                      <a class="btn btn-primary" href="/tambah_titik/{{ $irigasi->id}}"><i class="fa fa-plus"></i> Add Coordinates</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover" id="tblData">

                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($koor as $dts)
                          <tr>   
                            <td>{{ $dts->nama }}</td>
                            <td>{{ $dts->desc }}</td>
                            <td>{{ $dts->lat }}</td>
                            <td>{{ $dts->lng }}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
    </div>

        <div class="col-md-12">
                <div class="panel panel-white">
                  <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    Detail Data
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
                          <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                        </li>
                        <li>
                          <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                        </li>
                        <li>
                          <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                        </li>                   
                      </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover" id="sample-table-1">
                        <tr>
                          <td>Nama Pengambilan</td>
                          <td>{{ $irigasi->nama }}</td>
                        </tr>
                        <tr>
                          <td>Kewenangan</td>
                          <td>{{ $irigasi->kewenangan }}</td>
                        </tr>
                        <tr>
                          <td>Kecamatan</td>
                          @if($irigasi->Kecamatan==1)
                            <td>Pusat</td>
                          @elseif($irigasi->Kecamatan==2)
                            <td>Provinsi</td>
                          @elseif($irigasi->Kecamatan==3)
                            <td>Kecamatan</td>
                          @endif
                        </tr>
                        <tr>
                          <td>Jumlah Bendungan</td>
                          <td>{{ $irigasi->jlhBendung }}</td>
                        </tr>
                        <tr>
                          <td>Luas Area</td>
                          <td>{{ $irigasi->luasArea }}</td>
                        </tr>
                        <tr>
                          <td>Panjang Saluran</td>
                          <td>{{ $irigasi->panjangSaluran }}</td>
                        </tr>
                        <tr>
                          <td>Saluran Primer</td>
                          <td>{{ $irigasi->saluranPrimer }}</td>
                        </tr>
                        <tr>
                          <td>Jumlah Saluran Primer</td>
                          <td>{{ $irigasi->jnsSaluranPrimer }}</td>
                        </tr>
                        <tr>
                          <td>Saluran Skunder</td>
                          <td>{{ $irigasi->saluranSkunder }}</td>
                        </tr>
                        <tr>
                          <td>Jumlah Saluran Skunder</td>
                          <td>{{ $irigasi->jnsSaluranSkunder }}</td>
                        </tr>
                        <tr>
                          <td>Debit Air</td>
                          <td>{{ $irigasi->debitAir }}</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  <script src="{{ asset('') }}assets-admin/plugins/ladda-bootstrap/dist/spin.min.js"></script>
  <script src="{{ asset('') }}assets-admin/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
  <script src="{{ asset('') }}assets-admin/js/ui-buttons.js"></script>
@endsection

@section('mainjs')
                      <script>
                      function initMap() {
                        var mapDiv = document.getElementById('map');
                        var tabel = document.getElementById("tblData");
                        var data = [];
                        for (var i = 1; i < tabel.rows.length; i++) {
                          data.push({
                            nama:tabel.rows[i].cells[i-1].textContent,
                            deskripsi:tabel.rows[i].cells[1].textContent,
                            lat:tabel.rows[i].cells[2].textContent,
                            lng:tabel.rows[i].cells[3].textContent,

                          });
                        }

                        if(data.length != 0){

  /*                        var locations = [
                            ['Bondi Beach', 3.405096, 99.157628, 4],
                            ['Coogee Beach', 3.330823, 99.159543, 5],
                            ['Cronulla Beach', 3.5000, 99.159212, 3],
                            ['Manly Beach', 3.3430, 99.159800, 2],
                            ['Medan', 3.33109, 99.159102, 1]
                          ];

                          console.log(locations);*/

                          var map = new google.maps.Map(mapDiv, {
                            zoom: 5,
                            center: new google.maps.LatLng(data[0].lat, data[1].lng),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                          });

                          var infowindow = new google.maps.InfoWindow();
                          
                          var marker, i;

                          for (i = 0; i < data.length; i++) {  
                            console.log(data[i].lat);
                            console.log(data[i].lng);
                            marker = new google.maps.Marker({
                              position: new google.maps.LatLng(data[i].lat, data[i].lng),
                              map: map,
                            });

                            marker.setIcon("http://googlemaps.googlermania.com/img/marker_flag.png");

                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                              return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                                alert(data);
                              }
                            })(marker, i));
                          }
                        }
                        else
                        {
                          alert("Data Tidak Ada");
                        }

  /*                      var marker, i;

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
                              alert(data);
                            }
                          })(marker, i));
                        }*/
                      }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWYOBR2vNEocvI6JG-oF1sGVPQz4gF5GQ&callback=initMap">
                    </script>
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