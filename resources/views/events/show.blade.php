@extends('master.master')

@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{!!url('/')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li class="active">event show</li>
	</ol>
@stop

@section('content')
	<div class="defaultContainer">
		<h4>{!!$event->title!!}</h4>
		<hr>
		<div>
			<ul class="list-inline">
				<li><span class="badge badge-info">Start Date : {!!$event->startdate!!}</span></li>
				<li><span class="badge badge-info">End Date : {!!$event->startdate!!}</span></li>
				<li><span class="badge badge-info">Event Created on : {!!$event->created_at!!}</span></li>
				<li><span class="badge badge-info">Event Updated on : {!!$event->updated_at!!}</span></li>
			</ul>
		</div>
		<div class="col-md-9" style="margin-top: 25px;">
				<p style="font-size:15px">{!!$event->notes!!}</p>
		</div>
		<div class="col-md-3" style="margin-top: 25px;">
			<strong>Attachments</strong>
			<ol>
				@foreach($event->attachments as $attachment)
					<li><small><a href="#">{!!$attachment->filename!!}</a></small></li>
				@endforeach
			</ol>
		</div>
	
	</div>
	
@stop