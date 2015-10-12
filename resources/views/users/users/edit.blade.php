@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li><a href="{!!route('users.index')!!}">users</a></li>
	  <li class="active">edit user</li>
	</ol>
@stop

@section('profileContent')


	<div class="row">
		{!! Form::model($user, array('method' => 'PATCH','role'=>'form','route' => array('users.update', $user->id))) !!}
			@include('users.users.partials._form')
		{!!Form::close()!!}
	</div>
@stop