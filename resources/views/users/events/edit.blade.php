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
		
		{!! Form::model($event, array('method' => 'PATCH','role'=>'form', 'route' => array('events.update', $event->id))) !!}
			@include('users.events.partials._form',['type'=>'edit','event'=>$event,'eventtypes'=>$eventtypes])
		{!!Form::close()!!}
		
		{!! Form::model($event, array('method' => 'PATCH','role'=>'form', 'id'=>'my-awesome-dropzone','class'=>'dropzone','route' => array('events.uploadfile', $event->id))) !!}
			<div class="fallback">
			 	<input name="file" type="file" multiple />
			</div>
			<small class="text text-primary">You can only upload files of the following types : <span class="label label-default">jpg</span> <span class="label label-default">jpeg</span> <span class="label label-default">png</span> <span class="label label-default">bmp</span> <span class="label label-default">doc</span> <span class="label label-default">docx</span> <span class="label label-default">pdf</span> <span class="label label-default">ppt</span> <span class="label label-default">pptx</span></small>
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

			Dropzone.options.myAwesomeDropzone = {
			  maxFilesize: 2, // MB
			  acceptedFiles:'image/*','doc','docx','pdf','ppt','pptx'
			};
		})
	</script>
@stop