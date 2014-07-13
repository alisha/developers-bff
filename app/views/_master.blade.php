<!doctype html>
<html>
	<head>
		<title>
			@yield('title', 'Developers\' BFF')
		</title>
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('style.css') }}">
	</head>

	<body>
		<p><a href="/">Home</a></p>
		<p><a href="/lorem-ipsum">Lorem Ipsum Generator</a></p>
		<p><a href="/users">Fake User Generator</a></p>

		@yield('content')
	</body>
</html>
