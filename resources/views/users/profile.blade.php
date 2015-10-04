@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb pull-right">
	  <li><a href="#"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li class="active">profile home</li>
	</ol>
@stop

@section('profileContent')
	<div class="row">
		<div class="well" style="overflow: hidden; line-height: 170%;">
			<h4>Profile Home</h4>
			
			<small class="text-muted">Your account information</small>
			<img src="{!!asset('images/team.png')!!}" class="pageImage pull-right" style="margin-top: -30px;" alt="My Team">
		</div>
	</div>
	
	<div class="row">

		<table class="table borderless">
			<tr>
				<td>Your Roster Manager </td>
				<td>
					<div class="managerInfo">
						<img src="{!!asset('images/manager.png')!!}" class="manager" alt="Roster Manager">
						<div><a href="#">Manager Name here</a></div>
					</div>
				</td>
			</tr>
			<tr>
				<td>Your Team</td>
				<td>Team Name</td>
			</tr>
			<tr>
				<td>Team Members</td>
				<td>Your team members</td>
			</tr>
		</table>
	</div>
@stop

@section('scripts')

@stop