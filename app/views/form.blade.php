@extends('_master')

@section('content')
	{{ Form::open(array()) }}
		{{ Form::label('numItems', $label) }}
		{{ Form::input('number', 'numItems', '2') }}
		{{ Form::submit('Submit') }}
	{{ Form::close() }}

	@yield('results')
@stop