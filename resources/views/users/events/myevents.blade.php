@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb pull-right">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
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
		<a href="{!!route('events.create')!!}" class="btn btn-primary btn-sm pull-right"><span class="lnr lnr-rocket"></span> Create an Event</a>
	</div>

	<div class="row" id="rosterevent">
		<div style="margin-top: 70px;">
			<table class="table table-striped table-hover footable">
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
					
						<tr v-repeat="event:events">
							
							<td>@{{event.title}}</td>
							<td>@{{event.startdate}}</td>
							<td>@{{event.enddate}}</td>
							<td>@{{event.isapproved}}</td>
							

							<td>
								<button class="btn btn-sm btn-info" v-on="click:this.showEventInfo(event)"><span class="lnr lnr-file-add"></span></button>
								<a href="/events/@{{event.id}}/edit" class="btn btn-sm btn-warning"><span class="lnr lnr-pencil"></span></a>
								<button class="btn btn-sm btn-danger"><span class="lnr lnr-cross-circle"></span></button>
								@include('users.events.partials._moreinfo')
							</td>
						</tr>
					
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
	{!!Html::script('js/events.js')!!}
	<script>
		
	</script>
@stop