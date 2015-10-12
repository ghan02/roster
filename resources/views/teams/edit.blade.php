@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li><a href="{!!route('teams.index')!!}">teams</a></li>
	  <li class="active">edit team</li>
	</ol>
@stop

@section('profileContent')


	<div class="row">
		{!! Form::model($team, array('method' => 'PATCH','role'=>'form','route' => array('teams.update', $team->id))) !!}
			@include('teams.partials._form')
		{!!Form::close()!!}
	</div>
@stop

