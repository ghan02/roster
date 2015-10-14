<div class="form-group">
	<label for="name">Name</label>
	{!!Form::text('name',null, ['class'=>'form-control'])!!}
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="email">Email</label>
			{!!Form::email('email',null, ['class'=>'form-control'])!!}
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			<label for="username">UserName</label>
			{!!Form::text('username',null, ['class'=>'form-control'])!!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password">
</div>

<div class="form-group">
	<label for="confirmpassword">Confirm Password</label>
	<input type="password" class="form-control" name="confirmpassword">
	
	<div style="margin-top: 10px;">
		<small>
			<span class="lnr lnr-bullhorn"></span> If you dont specify a password a default password of <span class="label label-primary">P@ssword123</span> will be set.
		</small>
	</div>
</div>


@if($mode == true)
	<div class="form-group">
		<label for="notes">Role</label>
		{!!Form::select('role_id',$roles,null,['class'=>'form-control'])!!}
	</div>
@elseif($user->roles()->count() > 0 )
<div class="form-group">
	<label for="notes">Role</label>
	{!!Form::select('role_id',$roles,$user->roles()->first()->id,['class'=>'form-control'])!!}
</div>


@endif


<div class="form-group">
	<label for="notes">Notes</label>
	{!!Form::textarea('notes',null,['class'=>'form-control'])!!}
</div>

<hr>



<button type="submit" class="btn btn-default btn-md pull-right" style="margin-left: 5px;"><span class="lnr lnr-upload"></span> Save</button>

<a href="{!!route('users.index')!!}" class="btn btn-warning btn-md pull-right" ><span class="lnr lnr-cross-circle"></span> Cancel</a>