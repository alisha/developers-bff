@extends('form')

@section('title')
	Fake User Generator
@stop

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('usergen.css') }}">
@stop

@section('content')
	<h1>Fake User Generator</h1>

	@parent
@stop

@section('results')
	@foreach ($users as $user)
		<p>{{ $user->name }}</p>
		@if (isset($showAddress))
			<p>{{ $user->address }}</p>
		@endif
	@endforeach
@stop