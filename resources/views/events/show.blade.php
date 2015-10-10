@extends('master.master')

@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{!!url('/')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li class="active">event show </li>
	  <li class="active"><a href="{!!url('/')!!}"><span class="lnr lnr-undo"></span></a></li>
	</ol>
@stop

@section('content')
	<div class="defaultContainer">
		<h4>{!!$event->title!!} <small class="label label-info">{!!$event->user->name!!}</small></h4>
		<hr>
		<div>
			<ul class="list-inline">
				<li><small class="text-muted">Start Date : {!!$event->startdate!!}</small></li>
				<li><small class="text-muted">End Date : {!!$event->startdate!!}</small></li>
				<li><small class="text-muted">Event Created on : {!!$event->created_at!!}</small></li>
				<li><small class="text-muted">Event Updated on : {!!$event->updated_at!!}</small></li>
			</ul>
		</div>
		<div class="row">
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
				<hr>
				<strong>Links</strong>
				<ol>
					@foreach($event->links as $link)
						<li><small><a href="#">{!!$link->title!!}</a></small></li>
					@endforeach
				</ol>
			</div>
		</div>
	</div>
	
@stop