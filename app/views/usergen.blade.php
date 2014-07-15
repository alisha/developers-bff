@extends('form')

@section('title')
Fake User Generator
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