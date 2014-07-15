@extends('_master')

@section('content')
	{{ Form::open(array()) }}
		{{ Form::label('numItems', $label) }}
		{{ Form::input('number', 'numItems', $value) }}
		{{ Form::submit('Submit') }}
	{{ Form::close() }}

	@yield('results')
@stop