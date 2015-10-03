<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roster</title>
	@include('master.partials.styles')
</head>
<body>
	@include('master.partials.navbar')
	@yield('content')
	@include('master.partials.footer')
	@include('master.partials.scripts')
</body>
</html>