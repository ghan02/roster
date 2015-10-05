<!-- more info dialog -->

<div class="modal fade" id="moreInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="modalTitle"></span> info</h4>
      </div>
      <div class="modal-body">
        <dl class="dl-horizontal">
          <dt>Request created on</dt>
          <dd id="requestCreatedOn"></dd>          
          <dt>Last updated on</dt>
          <dd id="lastUpdatedOn"></dd>
          <dt>Current attachments</dt>
          <dd id="attachment">
          	<ul></ul>
          </dd>
          <dt>Notes</dt>
          <dd><p id="notes"></p></dd>
          
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>