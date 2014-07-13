@extends('form')

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>

	@parent

	@foreach ($text as $paragraph)
		<p>{{ $paragraph }}</p>
	@endforeach
@stop