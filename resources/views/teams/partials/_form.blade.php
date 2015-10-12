<div class="form-group">
	<label for="title">Title</label>
	{!!Form::text('title',null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	<label for="notes">Notes</label>
	{!!Form::textarea('notes',null,['class'=>'form-control'])!!}
</div>


<button type="submit" class="btn btn-default btn-md pull-right" style="margin-left: 5px;"><span class="lnr lnr-upload"></span> Save</button>

<a href="{!!route('teams.index')!!}" class="btn btn-warning btn-md pull-right" ><span class="lnr lnr-cross-circle"></span> Cancel</a>