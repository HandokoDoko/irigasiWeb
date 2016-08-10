
@extends('layouts.site')


@section('css')
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/select2/select2.css" />
@endsection



@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="user-left panel panel-white">
                <div class="panel-body">
                        <div class="center">
                            <h4>{{ Auth::user()->orgName }}</h4>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="user-image">
                                    <div class="fileupload-new thumbnail"><img src="{{ asset('') }}assets/img/avatar-1-xl.jpg" alt=""></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                    <div class="user-image-buttons">
                                        <span class="btn btn-azure btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
                                            <input type="file">
                                        </span>
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
                                    <td><a href="#panel_edit_account_personal" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ ucfirst(Auth::user()->name) }}</td>
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
                                    <td><a href="#panel_edit_account_Additional" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ Auth::user()->description }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <!-- start: TAB PANEL -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="tabbable">
                        <div class="panel tab-content">
                            <div id="panel_overview" class="tab-pane fade in active">
                                <div class="alert alert-info">
                                            <button data-dismiss="alert" class="close">
                                                ×
                                            </button>
                                            <strong>Hai {{ ucfirst(Auth::user()->name) }}!</strong>
                                            Selamat Datang di <a class="alert-link" href="#">
                                                Halaman Admin</a>
                                </div>
<!--                                 <div>
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Kabupaten</th>
                                        <th>Alamat</th>
                                        <td>Aksi</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1.</td>
                                        <td>Delitua</td>
                                        <td>Jl. Mataram</td>
                                        <td>
                                          <span class="glyphicon glyphicon-tag"></span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                                </div>-->

                               <!--<div class="row">
                                    <div class="col-sm-12">
                                         start: PANLEL TABS 
                                        <div class="panel-white">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><span class="text-bold">Data daerah irigasi</span> Pemerintah Pusat</h4>
                                            <div class="panel-tools">
                                                <div class="dropdown">
                                                    <a href="" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                        Manage <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-striped table-bordered table-hover table-full-width" id="EventList">
                                                    <thead>
                                                        <tr>
                                                            <th class="">Event Name</th>
                                                            <th class="" >Date</th>
                                                            <th class="hidden-xs">Speaker</th>
                                                            <th class="" >Status</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- end: PANLEL TABS 
                                    </div>

                                </div>-->
                            </div>
                            <div id="panel_edit_account" class="tab-pane fade">
                                <form action="#" role="form" id="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Profile Edit</h3>
                                            <hr>
                                        </div>
                                        <div class="form-group{{ $errors->has('orgName') ? ' has-error' : '' }}">
                                            <label class="col-sm-3 control-label">
                                                Nama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="orgName" name="orgName" value="{{ old('orgName') }}">

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('orgName') ? ' has-error' : '' }}">
                                            <label class="col-sm-3 control-label">
                                                User Name <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="orgName" name="orgName" value="{{ old('orgName') }}">

                                                @if ($errors->has('userName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('orgEmail') ? ' has-error' : '' }}">
                                            <label class="col-md-3 control-label">
                                                Email Address
                                            </label>
                                            <div class="col-md-7">
                                                <input type="email" class="form-control" name="orgEmail" value="{{ old('orgEmail') }}">

                                                @if ($errors->has('orgEmail'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('orgEmail') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('orgPhone') ? ' has-error' : '' }}">
                                            <label class="col-sm-3 control-label">
                                                Phone Number
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="orgPhone" name="orgPhone" value="{{ old('orgPhone') }}">

                                                @if ($errors->has('orgPhone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('orgPhone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('orgCountry') ? ' has-error' : '' }}">
                                            <label class="col-md-3 control-label">
                                                Country
                                            </label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="orgCountry" value = "{{ old('orgCountry') }}">
                                            
                                                @if ($errors->has('orgCountry'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('orgCountry') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('orgCity') ? ' has-error' : '' }}">
                                            <label class="col-md-3 control-label">
                                                City
                                            </label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="orgCity" value = "{{ old('orgCity') }}">

                                                @if ($errors->has('orgCity'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('orgCity') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('orgPhone') ? ' has-error' : '' }}">
                                            <label class="col-sm-3 control-label">
                                                Address
                                            </label>
                                            <div class="col-sm-7">
                                                <input class="form-control" id="orgAddress" name="orgAddress" value="{{ old('orgAddress') }}" />
                                                @if ($errors->has('orgAddress'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('orgAddress') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                Required Fields
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-grey btn-block" data-toggle="tab" href="#panel_overview">
                                                Cancel
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-green btn-block" type="submit">
                                                Update <i class="fa fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="panel_edit_account_personal" class="tab-pane fade">
                                <form action="#" role="form" id="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Personal Account Info</h3>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label class="control-label">
                                                    Lama Lengkap
                                                </label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Last Name
                                                </label>
                                                <input type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Email Address
                                                </label>
                                                <input type="email" placeholder="peter@example.com" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Phone
                                                </label>
                                                <input type="email" placeholder="(641)-734-4763" class="form-control" id="phone" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Password
                                                </label>
                                                <input type="password" placeholder="password" class="form-control" name="password" id="password">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Confirm Password
                                                </label>
                                                <input type="password"  placeholder="password" class="form-control" id="password_again" name="password_again">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group connected-group">
                                                <label class="control-label">
                                                    Date of Birth
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <select name="dd" id="dd" class="form-control" >
                                                            <option value="">DD</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21" selected="selected">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select name="mm" id="mm" class="form-control" >
                                                            <option value="">MM</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10" selected="selected">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" placeholder="1982" id="yyyy" name="yyyy" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Gender
                                                </label>
                                                <div>
                                                    <label class="radio-inline">
                                                        <input type="radio" class="grey" value="" name="gender" id="gender_female">
                                                        Female
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" class="grey" value="" name="gender"  id="gender_male" checked="checked">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">
                                                            Zip Code
                                                        </label>
                                                        <input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label">
                                                            City
                                                        </label>
                                                        <input class="form-control tooltips" placeholder="London (UK)" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Image Upload
                                                </label>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail"><img src="{{ asset('') }}assets/img/avatar-1-xl.jpg" alt="">
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                                    <div class="user-edit-image-buttons">
                                                        <span class="btn btn-azure btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
                                                            <input type="file">
                                                        </span>
                                                        <a href="#" class="btn fileupload-exists btn-red" data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                Required Fields
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-grey btn-block" data-toggle="tab" href="#panel_overview">
                                                Cancel
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-green btn-block" type="submit">
                                                Update <i class="fa fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="panel_edit_account_Additional" class="tab-pane fade">
                                <form action="#" role="form" id="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Additional Info</h3>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Twitter
                                                </label>
                                                <span class="input-icon">
                                                    <input class="form-control" type="text" placeholder="Text Field">
                                                    <i class="fa fa-twitter"></i> </span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Facebook
                                                </label>
                                                <span class="input-icon">
                                                    <input class="form-control" type="text" placeholder="Text Field">
                                                    <i class="fa fa-facebook"></i> </span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Google Plus
                                                </label>
                                                <span class="input-icon">
                                                    <input class="form-control" type="text" placeholder="Text Field">
                                                    <i class="fa fa-google-plus"></i> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Github
                                                </label>
                                                <span class="input-icon">
                                                    <input class="form-control" type="text" placeholder="Text Field">
                                                    <i class="fa fa-github"></i> </span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Linkedin
                                                </label>
                                                <span class="input-icon">
                                                    <input class="form-control" type="text" placeholder="Text Field">
                                                    <i class="fa fa-linkedin"></i> </span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Skype
                                                </label>
                                                <span class="input-icon">
                                                    <input class="form-control" type="text" placeholder="Text Field">
                                                    <i class="fa fa-skype"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                Required Fields
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-grey btn-block" data-toggle="tab" href="#panel_overview">
                                                Cancel
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-green btn-block" type="submit">
                                                Update <i class="fa fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: TAB PANEL -->
        </div>
    </div>
@endsection



@section('script')
        <script type="text/javascript" src="{{ asset('') }}assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}assets/js/table-data.js"></script>
        <script>
            jQuery(document).ready(function() {
                TableData.init('EventListInProfilePage');
            });
        </script>


@endsection