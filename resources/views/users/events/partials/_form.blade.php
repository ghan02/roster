<div class="form-group">
	<label for="title">Title</label>
	{!!Form::text('title',null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	<div class="input-daterange input-group" id="datepicker">
		{!!Form::text('startdate',null,['class' => 'input-sm form-control','readonly'=>'readonly'])!!}
	    <span class="input-group-addon"><span class="lnr lnr-chevron-left"></span>to <span class="lnr lnr-chevron-right"></span></span>
		{!!Form::text('enddate',null,['class' => 'input-sm form-control','readonly'=>'readonly'])!!}
	</div>
</div>

<div class="form-group">
	<label for="notes">Notes</label>
	{!!Form::textarea('notes',null,['class'=>'form-control'])!!}
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="color">Color</label>
			<small>[background color of the event]</small>
			{!!Form::text('color',null,['class'=>'form-control'])!!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="color">Text Color</label>
			<small>[textcolor of the event]</small>
			{!!Form::text('textColor',null,['class'=>'form-control'])!!}
		</div>
	</div>
</div>

<hr>

@if($type=='edit')
	<div class="fallback">
	    <input name="file" type="file" multiple />
	</div>
@else
	<p><small class="text-warning"><span class="lnr lnr-bullhorn"></span> You must save the event first in order to upload files to it.</small></p>
@endif

<button type="submit" class="btn btn-default btn-md pull-right" style="margin-left: 5px;"><span class="lnr lnr-upload"></span> Save</button>
<a href="{!!route('user.events')!!}" class="btn btn-warning btn-md pull-right" ><span class="lnr lnr-cross-circle"></span> Cancel</a>
