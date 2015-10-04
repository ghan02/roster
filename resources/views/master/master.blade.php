<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roster</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('master.partials.styles')
</head>
<body>

	@include('master.partials.navbar')
	<!-- Begin page content -->
	 <div class="container ">
	   <div class="content">
	   		@yield('content')
	   </div>
	 </div>

	@include('master.partials.footer')
	@include('master.partials.scripts')
</body>
</html>