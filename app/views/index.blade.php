@extends('_master')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('index.css') }}">
@stop

@section('content')
	<h1>Developers' BFF</h1>
	<h2>Would you like to generate some <a href="lorem-ipsum" id="loremipsumlink">lorem ipsum text</a> or <a href="users" id="fakeuserlink">fake users</a>?</h2>
@stop