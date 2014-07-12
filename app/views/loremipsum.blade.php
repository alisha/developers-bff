@extends('_master')

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
	@foreach ($text as $paragraph)
		<p>{{ $paragraph }}</p>
	@endforeach
@stop