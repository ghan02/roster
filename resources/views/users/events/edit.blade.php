@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li><a href="{!!route('user.events')!!}">events</a></li>
	  <li class="active">edit event</li>
	</ol>
@stop

@section('profileContent')

	<div class="row">
		<div class="well" style="overflow: hidden; line-height: 170%;">
			<h4>Edit Event</h4>
			
			<small class="text-muted">Use this page to edit your event.</small>
			<img src="{!!asset('images/event.png')!!}" class="pageImage pull-right" style="margin-top: -30px;" alt="My Events">
		</div>
	</div>
	<div class="row">
		
		{!! Form::model($event, array('method' => 'PATCH','role'=>'form', 'id'=>'my-awesome-dropzone','class'=>'dropzone','route' => array('events.update', $event->id))) !!}
			@include('users.events.partials._form',['type'=>'edit','event'=>$event,'eventtypes'=>$eventtypes])
		{!!Form::close()!!}
	</div>

@stop

@section('scripts')
	<script>
		$(function(){
			$('.input-daterange').datepicker({
				startDate: "today",
				clearBtn: true,
				todayHighlight: true,
			});
			$('.colorpicker').colorpicker({format:'hex'});
		})
	</script>
@stop