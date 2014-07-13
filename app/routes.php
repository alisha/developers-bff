<?php

Route::get('/', function() {
	return View::make('index');
});

Route::get('/lorem-ipsum/{numParagraphs?}', function($numParagraphs = 2) {
	$generator = new Badcow\LoremIpsum\Generator();
    $text = $generator->getParagraphs($numParagraphs);
   	return View::make('loremipsum', array('text' => $text, 'label' => 'Number of Paragraphs'));
});

Route::post('/lorem-ipsum/{numParagraphs?}', function() {
	Input::flash();
	$data = Input::old('numItems');
	$path = '/lorem-ipsum/' . $data;
	return Redirect::to($path);
});

Route::get('/users/{numUsers?}', function($numUsers = 2) {
	$users = array();
	for ($i = 0; $i < $numUsers; $i++) { 
		array_push($users, Faker\Factory::create());
	}
	return View::make('usergen', array('users' => $users, 'label' => 'Number of Users'));
});

Route::post('/users/{numUsers?}', function() {
	Input::flash();
	$data = Input::old('numItems');
	$path = '/users/' . $data;
	return Redirect::to($path);
});

Route::get('/form', function() {
	return View::make('form', array('label' => 'Secrets'));
});