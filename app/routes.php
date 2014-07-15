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

Route::get('/users/{numUsers?}', 'UserController@showUsers');

Route::post('/users/{numUsers?}', 'UserController@getNumberOfUsers');
