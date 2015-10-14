@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li><a href="{!!route('users.index')!!}">users</a></li>
	  <li class="active">new user</li>
	</ol>
@stop

@section('profileContent')
	<div class="row">
		{!!Form::open(array('route'=>'users.store','id'=>'formProjects'))!!}
			@include('users.users.partials._form',['roles'=>$roles,'mode'=>true])
		{!!Form::close()!!}
	</div>
@stop

