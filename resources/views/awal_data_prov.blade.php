@extends('layouts.awal')
@section('content')


        <div class="row">

            <div class="col-md-3">
                <p class="lead"></p>
                <div class="list-group">
                    <a href="/data/irigasi" class="list-group-item">Data Pusat</a>
                    <a href="/data_provinsi" class="list-group-item active">Data Provinsi</a>
                    <a href="/data_kabupaten" class="list-group-item">Data Kabupaten</a>
                </div>
            </div>
            <div class="col-md-9">

                <div class="thumbnail">
                    <div class="caption-full">
                        <h4><a href="#">Data Provinsi</a>
                        </h4>
                        <p>
                            <div class="panel panel-default">

                              <!-- Table -->
                              <table class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Daerah</th>
                                    <th>Kecamatan</th>
                                    <th>Lihat</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                <div style="display: none;">
                                {{ $no=0 }}
                                </div>
                                @if($irgs != null)
                                @foreach($irgs as $key => $data)
                                <tr>
                                    <td>{{ $no+=1 }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{$data->Kecamatan}}</td>
                                    <td>
                                        <a href="lihat/{{ $data->id}}">Lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td>Data Tidak Ada!!!</td>
                                </tr>
                                @endif
                                </tbody>
                                </tbody>
                              </table>
                            </div>
                        </p>
                    </div>
                </div>

            </div>

        </div>


@endsection
