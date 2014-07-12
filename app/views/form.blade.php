@extends('_master')

@section('content')
	{{ Form::open(array(
		//stuff
	)) }}
		{{ Form::label('hi', 'hello') }}
		
	{{ Form::close() }}
@stop