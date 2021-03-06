@extends('master.master')

@section('breadcrumb')
	@yield('breadcrumbprofile')
@stop

@section('content')
	<div class="profile defaultContainer">
		<div class="row">
						<div class="col-md-3">
							<div class="profile-sidebar">
								<!-- SIDEBAR USERPIC -->
								<div class="profile-userpic">
									<img src="{!!asset('images/profile.png')!!}" class="img-responsive" alt="">
								</div>
								<!-- END SIDEBAR USERPIC -->
								<!-- SIDEBAR USER TITLE -->
								<div class="profile-usertitle">
									<div class="profile-usertitle-name">
										{!!Auth::user()->name!!}
									</div>
									<div class="">
										<small><a href="#">change avtaar</a></small>
									</div>
								</div>
								<!-- END SIDEBAR USER TITLE -->
								<!-- SIDEBAR BUTTONS -->
								<div class="profile-userbuttons">
									<a href="{!!route('user.logout')!!}" class="btn btn-danger btn-sm"><span class="lnr lnr-select"></span> Logout</a>
								</div>
								<!-- END SIDEBAR BUTTONS -->
								<!-- SIDEBAR MENU -->
								<div class="profile-usermenu">
									<ul class="nav">
			            				{!!HTML::navlink('user.profile', '<span class="lnr lnr-home"></span> Home')!!}
			            				{!!HTML::navlink('user.events', '<span class="lnr lnr-rocket"></span> Events')!!}
			            				{!!HTML::navlink('user.password', '<span class="lnr lnr-lock"></span> Password')!!}
			            				@can('administer')
			            					{!!HTML::navlink('teams.index', '<span class="lnr lnr-users"></span> Teams')!!}
			            					{!!HTML::navlink('users.index', '<span class="lnr lnr-user"></span> User')!!}
											
			            				@endcan
			            				@can('roster_manager')
			            					{!!HTML::navlink('users.index', '<span class="lnr lnr-user"></span> Users')!!}
			            				@endcan
									</ul>
								</div>
								<!-- END MENU -->
							</div>
						</div>
						<div class="col-md-9">
				            <div class="profile-content">
							   @yield('profileContent')
				            </div>
						</div>
		</div>
	</div>
@stop

@section('script')
	@yield('scripts')
@stop
