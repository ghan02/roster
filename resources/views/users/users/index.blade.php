@extends('master.profilemaster')

@section('breadcrumbprofile')
	<ol class="breadcrumb">
	  <li><a href="{!!route('user.profile')!!}"><span class="lnr lnr-home"></span></a></li>
	  <li><a href="#">{!!Auth::user()->name!!}'s profile</a></li>
	  <li class="active">users</li>
	</ol>
@stop

@section('profileContent')

	<div  id="users">
		<div class="row">
			<a href="{!!route('users.create')!!}" class="btn btn-primary btn-sm pull-right"><span class="lnr lnr-user"></span> Create a User</a>
			<button class="btn btn-sm btn-primary pull-right" style="margin-right: 2px;"> <span class="lnr lnr-shirt"></span> Assign user to team</button>
			<button v-on="click:this.getTeams()" type="button" class="btn btn-info btn-sm pull-right" style="margin-right: 5px;"><span class="lnr lnr-sync"></span></button>
		</div>
		<div class="row" style="margin-top: 20px;">
			<table class="table table-striped table-hover" >
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>UserName</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr v-repeat="user:users"  v-on="mouseover: this.getTeams(user)">
						<td>@{{user.name}}</td>
						<td>@{{user.name}}</td>
						<td>@{{user.email}}</td>
						<td>
							<a href="/users/@{{user.id}}/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit [@{{user.title}}] team record"><span class="lnr lnr-pencil"></span></a>
							<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete [@{{user.title}}] team record"><span class="lnr lnr-cross-circle"></span></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4>Teams <span>[@{{currentUser}}]</span> is subscribed to</h4>
				<ul>
					<li v-repeat="teams"><a href="#" class="label label-info">@{{title}}</a></li>
				</ul>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
@stop

@section('scripts')
	{!!Html::script('js/users.js')!!}
@stop