@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb pull-right">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li><a href="{!!route('user.events')!!}">events</a></li>
	  <li class="active">new event</li>
	</ol>
@stop

@section('profileContent')

	<div class="row">
		<div class="well" style="overflow: hidden; line-height: 170%;">
			<h4>New Event</h4>
			
			<small class="text-muted">Use this page to create a new event.</small>
			<img src="{!!asset('images/event.png')!!}" class="pageImage pull-right" style="margin-top: -30px;" alt="My Events">
		</div>
	</div>
	<div class="row">
		<form action="/upload" class="dropzone" id="my-awesome-dropzone">
			@include('users.events.partials._form',['type'=>'edit'])
		</form>
	</div>

@stop