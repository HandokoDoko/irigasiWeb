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
                                                                        <td>Telephon</td>
                                                                        <td>{{ Auth::user()->phone }}</td>
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
                                                                        <td>Description</td>
                                                                        <td>{{ Auth::user()->description }}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-md-8">
                                                    <form action="#" role="form" id="form">
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
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Email
                                                            </label> 
                                                            <input placeholder="peter@example.com" required class="form-control" id="email" name="email" type="email" value="{{ Auth::user()->email }}">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Password
                                                            </label>
                                                            <input placeholder="password" class="form-control" required name="password" id="password" type="password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Nip
                                                            </label>
                                                            <input placeholder="NIP" class="form-control" required name="Nip" id="password" type="password" value="{{ Auth::user()->nip }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Informasi Tambahan
                                                            </label>
                                                            <textarea placeholder="Desc...." id="desc" name="desc" class="form-control" value="{{ Auth::user()->desc }}"></textarea>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Username
                                                            </label>
                                                            <input placeholder="Clark" class="form-control" required id="username" name="username" type="text" value="{{ Auth::user()->username }}">
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="control-label">
                                                                Telepon
                                                            </label>
                                                            <input placeholder="(641)-734-4763" class="form-control" id="phone" name="phone" type="tel" value="{{ Auth::user()->phone }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Confirm Password
                                                            </label>
                                                            <input placeholder="password" class="form-control" required id="password_again" name="password_again" type="password" >
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
                                                                    <img src="{{ asset('') }}assets/img/profile/{{ Auth::user()->pic }}.jpg" alt="">
                                                                @endif
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
                                            </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panel_edit_account" class="tab-pane fade">
                                            <form action="#" role="form" id="form">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Account Info</h3>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                First Name
                                                            </label>
                                                            <input placeholder="Peter" class="form-control" id="firstname" name="firstname" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Last Name
                                                            </label>
                                                            <input placeholder="Clark" class="form-control" id="lastname" name="lastname" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Email Address
                                                            </label>
                                                            <input placeholder="peter@example.com" class="form-control" id="email" name="email" type="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Phone
                                                            </label>
                                                            <input placeholder="(641)-734-4763" class="form-control" id="phone" name="email" type="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Password
                                                            </label>
                                                            <input placeholder="password" class="form-control" name="password" id="password" type="password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Confirm Password
                                                            </label>
                                                            <input placeholder="password" class="form-control" id="password_again" name="password_again" type="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group connected-group">
                                                            <label class="control-label">
                                                                Date of Birth
                                                            </label>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select name="dd" id="dd" class="form-control">
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
                                                                    <select name="mm" id="mm" class="form-control">
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
                                                                    <input placeholder="1982" id="yyyy" name="yyyy" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Gender
                                                            </label>
                                                            <div>
                                                                <label class="radio-inline">
                                                                    <div style="position: relative;" class="iradio_minimal-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="grey" value="" name="gender" id="gender_female" type="radio"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                                    Female
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <div style="position: relative;" class="iradio_minimal-grey checked"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="grey" value="" name="gender" id="gender_male" checked="checked" type="radio"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
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
                                                                    <input class="form-control" placeholder="12345" name="zipcode" id="zipcode" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label class="control-label">
                                                                        City
                                                                    </label>
                                                                    <input class="form-control tooltips" placeholder="London (UK)" data-original-title="We'll display it when you write reviews" data-rel="tooltip" title="" data-placement="top" name="city" id="city" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>
                                                                Image Upload
                                                            </label>
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <div class="fileupload-new thumbnail"><img src="assets/images/avatar-1-xl.jpg" alt="">
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
                                                        <h3>Additional Info</h3>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Twitter
                                                            </label>
                                                            <span class="input-icon">
                                                                <input class="form-control" placeholder="Text Field" type="text">
                                                                <i class="fa fa-twitter"></i> </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Facebook
                                                            </label>
                                                            <span class="input-icon">
                                                                <input class="form-control" placeholder="Text Field" type="text">
                                                                <i class="fa fa-facebook"></i> </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Google Plus
                                                            </label>
                                                            <span class="input-icon">
                                                                <input class="form-control" placeholder="Text Field" type="text">
                                                                <i class="fa fa-google-plus"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Github
                                                            </label>
                                                            <span class="input-icon">
                                                                <input class="form-control" placeholder="Text Field" type="text">
                                                                <i class="fa fa-github"></i> </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Linkedin
                                                            </label>
                                                            <span class="input-icon">
                                                                <input class="form-control" placeholder="Text Field" type="text">
                                                                <i class="fa fa-linkedin"></i> </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Skype
                                                            </label>
                                                            <span class="input-icon">
                                                                <input class="form-control" placeholder="Text Field" type="text">
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
                                            </form>
                                        </div>
                                        <div id="panel_projects" class="tab-pane fade">
                                            <table class="table table-striped table-bordered table-hover" id="projects">
                                                <thead>
                                                    <tr>
                                                        <th class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey selectall" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></th>
                                                        <th>Project Name</th>
                                                        <th class="hidden-xs">Client</th>
                                                        <th>Proj Comp</th>
                                                        <th class="hidden-xs">%Comp</th>
                                                        <th class="hidden-xs center">Priority</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey foocheck" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></td>
                                                        <td>IT Help Desk</td>
                                                        <td class="hidden-xs">Master Company</td>
                                                        <td>11 november 2014</td>
                                                        <td class="hidden-xs">
                                                        <div class="progress active progress-xs">
                                                            <div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
                                                                <span class="sr-only"> 70% Complete (danger)</span>
                                                            </div>
                                                        </div></td>
                                                        <td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
                                                        <td class="center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                            <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                                </a>
                                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-share"></i> Share
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey foocheck" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></td>
                                                        <td>PM New Product Dev</td>
                                                        <td class="hidden-xs">Brand Company</td>
                                                        <td>12 june 2014</td>
                                                        <td class="hidden-xs">
                                                        <div class="progress active progress-xs">
                                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
                                                                <span class="sr-only"> 40% Complete</span>
                                                            </div>
                                                        </div></td>
                                                        <td class="center hidden-xs"><span class="label label-warning">High</span></td>
                                                        <td class="center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                            <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                                </a>
                                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-share"></i> Share
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey foocheck" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></td>
                                                        <td>ClipTheme Web Site</td>
                                                        <td class="hidden-xs">Internal</td>
                                                        <td>11 november 2014</td>
                                                        <td class="hidden-xs">
                                                        <div class="progress active progress-xs">
                                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                                <span class="sr-only"> 90% Complete</span>
                                                            </div>
                                                        </div></td>
                                                        <td class="center hidden-xs"><span class="label label-success">Normal</span></td>
                                                        <td class="center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                            <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                                </a>
                                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-share"></i> Share
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey foocheck" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></td>
                                                        <td>Local Ad</td>
                                                        <td class="hidden-xs">UI Fab</td>
                                                        <td>15 april 2014</td>
                                                        <td class="hidden-xs">
                                                        <div class="progress active progress-xs">
                                                            <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
                                                                <span class="sr-only"> 50% Complete</span>
                                                            </div>
                                                        </div></td>
                                                        <td class="center hidden-xs"><span class="label label-success">Normal</span></td>
                                                        <td class="center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                            <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                                </a>
                                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-share"></i> Share
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey foocheck" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></td>
                                                        <td>Design new theme</td>
                                                        <td class="hidden-xs">Internal</td>
                                                        <td>2 october 2014</td>
                                                        <td class="hidden-xs">
                                                        <div class="progress active progress-xs">
                                                            <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
                                                                <span class="sr-only"> 20% Complete (warning)</span>
                                                            </div>
                                                        </div></td>
                                                        <td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
                                                        <td class="center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                            <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                                </a>
                                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-share"></i> Share
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                        <div class="checkbox-table">
                                                            <label>
                                                                <div style="position: relative;" class="icheckbox_flat-grey"><input style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="flat-grey foocheck" type="checkbox"><ins style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                                                            </label>
                                                        </div></td>
                                                        <td>IT Help Desk</td>
                                                        <td class="hidden-xs">Designer TM</td>
                                                        <td>6 december 2014</td>
                                                        <td class="hidden-xs">
                                                        <div class="progress active progress-xs">
                                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                                <span class="sr-only"> 40% Complete (warning)</span>
                                                            </div>
                                                        </div></td>
                                                        <td class="center hidden-xs"><span class="label label-warning">High</span></td>
                                                        <td class="center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                            <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                                </a>
                                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-share"></i> Share
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
