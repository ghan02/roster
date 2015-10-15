<div class="modal fade" id="usersToTeams" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="lnr lnr-users"></span> Assign Users to Teams</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="users">Select Users</label>
            {!!Form::text('users', null,['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
            <label for="teams">Select Teams</label>
            {!!Form::text('teams', null,['class'=>'form-control'])!!}
          </div>

          <small style="line-height: 170%">
            <span class="text-danger"><span class="lnr lnr-bullhorn"></span> Note:</span>
            <p>You can select multiple users and multiple teams. Each user will be assigned to each selected team. Click the assign button to assign users to teams.</p>
          </small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><span class="lnr lnr-cloud-sync"></span> Assign</button>
      </div>
    </div>
  </div>
</div>