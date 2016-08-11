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
                                    <h1>Halaman Profile</h1>
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
                                        Profile
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- end: BREADCRUMB -->
                        <!-- start: PAGE CONTENT -->
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
                                        <li class="active">
                                            <a data-toggle="tab" href="#panel_overview">
                                                Overview
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="panel_overview" class="tab-pane fade active in">
                                            <div class="row">
                                                <div class="col-sm-5 col-md-4">
                                                    <div class="user-left">
                                                        <div class="panel-body">
                                                            <div class="center">
                                                                <h4>{{ Auth::user()->name }}</h4>
                                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                    <div class="user-image">
                                                                        @if(Auth::user()->pic==null)
                                                                        <div class="fileupload-new thumbnail"><img src="{{ asset('') }}assets/img/profile/anonymous.jpg" alt=""></div>
                                                                        @endif
                                                                        @if(Auth::user()->pic!=null)
                                                                        <div class="fileupload-new thumbnail"><img src="{{ asset('') }}assets/img/profile/{{ Auth::user()->pic }}.jpg" alt=""></div>
                                                                        @endif
                                                                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                                                        <div class="user-image-buttons">
                                                                            
                                                                            <a href="#" class="btn fileupload-exists btn-red btn-sm" data-dismiss="fileupload">
                                                                                <i class="fa fa-times"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr />

                                                            

                                                            <table class="table table-condensed table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="2">Detail Info </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Username</td>
                                                                        <td>{{ ucfirst(Auth::user()->username) }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email</td>
                                                                        <td>{{ Auth::user()->email }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td>Status</td>
                                                                        <td><span class="label label-sm label-info">Administrator</span></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table class="table table-condensed table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="2">Informasi Tambahan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{ Auth::user()->desc }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-md-8">
                                                    <form action="profile/{{ Auth::user()->id }}" role="form" id="form" method="post" >
                                                  
                                                    {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Edit Profile Anda</h3>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Nama Lengkap
                                                            </label>
                                                            <input placeholder="Peter" class="form-control" required="" id="name" name="name" type="text" value="{{ Auth::user()->name }}">
                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Password
                                                            </label>
                                                            <input placeholder="password" class="form-control"  name="password" id="password" type="password">
                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Email
                                                            </label> 
                                                            <input placeholder="peter@example.com" required class="form-control" id="email" name="email" type="email" value="{{ Auth::user()->email }}">
                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Nip
                                                            </label>
                                                            <input placeholder="NIP" class="form-control" required name="nip" id="nip" type="nip" value="{{ Auth::user()->nip }}">
                                                            @if ($errors->has('nip'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('nip') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Informasi Tambahan
                                                            </label>
                                                            <textarea placeholder="kett..." id="desc" name="desc" class="form-control">{{ Auth::user()->desc }}</textarea>
                                                            @if ($errors->has('desc'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('desc') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Username
                                                            </label>
                                                            <input placeholder="username" class="form-control" required id="username" name="username" type="text" value="{{ Auth::user()->username }}">
                                                            @if ($errors->has('username'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('username') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                         
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Confirm Password
                                                            </label>
                                                            <input placeholder="password" class="form-control"  id="password_again" name="password_again" type="password" >
                                                            @if ($errors->has('password_confirmation'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label>
                                                                Image Upload
                                                            </label>
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <div class="fileupload-new thumbnail">
                                                                @if(Auth::user()->pic==null)
                                                                    <img src="{{ asset('') }}assets/img/profile/anonymous.jpg" alt="">
                                                                @endif
                                                                @if(Auth::user()->pic!=null)
                                                                    <img src="{{ asset('') }}assets/img/profile/{{ Auth::user()->pic }}" alt="">
                                                                @endif
                                                                </div>
                                                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                                                <div class="user-edit-image-buttons">
                                                                    <span class="btn btn-azure btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
                                                                        <input type="file" name="pic" id="pic" value="{{Auth::user()->pic}}">
                                                                    </span>
                                                                    <a href="#" class="btn fileupload-exists btn-red" data-dismiss="fileupload">
                                                                        <i class="fa fa-times"></i> Remove
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="_method" value="put">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p>
                                                            By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-green btn-block" type="submit">
                                                            Update <i class="fa fa-arrow-circle-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                               </form><!--
                                            <form action="profile/{{ Auth::user()->id }}" role="form" id="form" method="post">
                                                    {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Ubah Password</h3>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Password
                                                            </label>
                                                            <input placeholder="password" class="form-control"  name="password" id="password" type="password">
                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Confirm Password
                                                            </label>
                                                            <input placeholder="password" class="form-control"  id="password_again" name="password_again" type="password" >
                                                            @if ($errors->has('password_confirmation'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="_method" value="put">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p>
                                                            By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-green btn-block" type="submit">
                                                            Update <i class="fa fa-arrow-circle-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>-->
                                                </div>

                                            </div>

                                        </div>
                                                                                
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
