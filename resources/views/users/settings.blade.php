@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb pull-right">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li class="active">settings</li>
	</ol>
@stop

@section('profileContent')
	<div class="row">
		<div class="well" style="overflow: hidden; line-height: 170%;">
			<h4>Account Settings</h4>
			
			<small class="text-muted">Your settings</small>
			<img src="{!!asset('images/team.png')!!}" class="pageImage pull-right" style="margin-top: -30px;" alt="My Team">
		</div>
	</div>
	<div class="row">
		<form>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" class="form-control" name="password">
			</div>
			<div class="form-group">
				<label for="confirmpassword">Confirm Password</label>
				<input type="text" class="form-control" name="confirmpassword">
			</div>
			<div class="form-group">
				<label>The email you are registered with : <span class="text-primary">{!!Auth::user()->email!!}</span></label>
				<small class="text-muted">If you would like to change this email , please contact your Roster Manager.</small>
			</div>
			<a href="#" class="btn btn-default btn-md pull-right"><span class="lnr lnr-upload"></span> Save</a>
		</form>
	</div>
@stop