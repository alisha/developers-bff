<!doctype html>
<html>
	<head>
		<title>
			@yield('title', 'Developers\' BFF')
		</title>
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('style.css') }}">
		@yield('stylesheets')
	</head>

	<body>
		<div class="navbar">
			<p><a href="/">Home</a></p>
			<p><a href="/lorem-ipsum">Lorem Ipsum Generator</a></p>
			<p><a href="/users">Fake User Generator</a></p>
		</div>

		<div class="content">
			@yield('content')
		</div>
	</body>
</html>
