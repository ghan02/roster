@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li><a href="{!!route('teams.index')!!}">teams</a></li>
	  <li class="active">new team</li>
	</ol>
@stop

@section('profileContent')


	<div class="row">
		{!!Form::open(array('route'=>'teams.store','id'=>'formProjects'))!!}
			@include('teams.partials._form')
		{!!Form::close()!!}
	</div>
@stop

