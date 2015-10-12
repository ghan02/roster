@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li class="active">teams</li>
	</ol>
@stop

@section('profileContent')


	<div  id="teams">
		<div class="row">
			<a href="{!!route('teams.create')!!}" class="btn btn-primary btn-sm pull-right"><span class="lnr lnr-users"></span> Create a Team</a>
			<button v-on="click:this.getTeams()" type="button" class="btn btn-info btn-sm pull-right" style="margin-right: 5px;"><span class="lnr lnr-sync"></span></button>
		</div>
		<div class="row" style="margin-top: 20px;">
			<table class="table table-striped table-hover" >
				<thead>
					<tr>
						<th>Team Name</th>
						<th>Team Notes</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr v-repeat="team:teams"  v-on="mouseover: this.getUsers(team)">
						<td >@{{team.title}}</td>
						<td>@{{team.notes}}</td>
						<td>
							<a href="/teams/@{{team.id}}/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit [@{{team.title}}] team record"><span class="lnr lnr-pencil"></span></a>
							<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete [@{{team.title}}] team record"><span class="lnr lnr-cross-circle"></span></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<hr>
		<div class="row">
			<h4>Team Members <span class="label label-default">@{{currentTeam}}</span></h4>
			<div class="col-xs-12 col-sm-4 col-md-4" v-repeat="users">
			           <div class="well well-sm" style="margin-top: 6px;">
			               <div class="row">
			                   <div class="col-sm-12 col-md-12">
			                       <h4>@{{name}}</h4>
			                       <p>
			                           <small><span class="lnr lnr-envelope"></span> @{{email}}
			                           </small>
									</p>
									<p><small>@{{notes}}</small></p>
			                   </div>
			               </div>
			           </div>
			       </div>
		</div>
	</div>
@stop

@section('scripts')
	{!!Html::script('js/teams.js')!!}
@stop