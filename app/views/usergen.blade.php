@extends('form')

@section('title')
Fake User Genera Usertor
@stop

@section('content')
	<h1>Fake User Generator</h1>

	@parent

	@foreach ($users as $user)
		<p>{{ $user->name }}</p>
	@endforeach
@stop