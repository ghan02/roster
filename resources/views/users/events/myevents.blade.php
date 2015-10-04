@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb pull-right">
	  <li><a href="#"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li class="active">events</li>
	</ol>
@stop

@section('profileContent')

	<div class="row">
		<div class="well" style="overflow: hidden; line-height: 170%;">
			<h4>Events</h4>
			
			<small class="text-muted">Use this page to manage your events.</small>
			<img src="{!!asset('images/event.png')!!}" class="pageImage pull-right" style="margin-top: -30px;" alt="My Events">
		</div>
	</div>
	<div class="row">
		<a href="#" class="btn btn-primary btn-sm pull-right"><span class="lnr lnr-rocket"></span> Create an Event</a>
	</div>

	<div class="row">
		<div style="margin-top: 70px;">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<td>Name</td>
						<td>Start Date</td>
						<td>End Date</td>
						<td>Is Approved</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@foreach(Auth::user()->events as $event)
						<tr>
							<td>{!!$event->title!!}</td>
							<td>{!!$event->startdate!!}</td>
							<td>{!!$event->enddate!!}</td>
							<td>{!!$event->isauthorized!!}</td>
							

							<td>
								<button class="btn btn-sm btn-info"  data-toggle="modal" data-target="#moreInfo"><span class="lnr lnr-file-add"></span> More Info</button>
								<button class="btn btn-sm btn-warning"><span class="lnr lnr-pencil"></span> Edit</button>
								<button class="btn btn-sm btn-danger"><span class="lnr lnr-cross-circle"></span> Delete</button>
								@include('users.events.partials._moreinfo',['event'=>$event])
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="alert alert-warning" style="margin-top: 40px;">
			<span class="lnr lnr-bullhorn"></span> <span class="text text-danger"></span>
			Please note the following. Your event will be forwared to your roster manager for approval. But once
			<ul>
				<li>The event has been approved or</li>
				<li>The event has been passed the start date and/or the end date</li>
			</ul>
			<p>you will <span class="highlight">not</span> be able to edit the event request.</p>

		</div>	
	</div>
	

@stop

@section('scripts')
	
@stop