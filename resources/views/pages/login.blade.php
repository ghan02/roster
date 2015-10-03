@extends('master.master')

@section('content')
	<div class="text-center">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			    <div class="panel-heading">
				    Sign in to your account
				</div>
				<div class="panel-body">
				    <form class="form-horizontal" role="form">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-offset-2">
								<a href="#" class="btn btn-primary">
									<span class="lnr lnr-checkmark-circle"></span> Login
								</a>
								<a class="btn btn-link" href="#">Forgot Your Password?</a>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop