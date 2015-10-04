<!-- more info dialog -->
<!-- Modal -->
<div class="modal fade" id="moreInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{!!$event->title!!} info</h4>
      </div>
      <div class="modal-body">
        <dl class="dl-horizontal">
          <dt>Request created on</dt>
          <dd>{!!$event->created_at!!}</dd>          
          <dt>Last updated on</dt>
          <dd>{!!$event->updated_at!!}</dd>
          <dt>Current attachments</dt>
          <dd>
          	<ul>
          		@foreach($event->attachments()->get() as $attache)
          			<li><a href="#">{!!$attache->filename!!}</a></li>
          		@endforeach
			</ul>
          </dd>
          <dt>Notes</dt>
          <dd><p>{!!$event->notes!!}</p></dd>
          
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>