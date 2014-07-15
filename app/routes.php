<?php

Route::get('/', function() {
	return View::make('index');
});

Route::get('/lorem-ipsum/{numParagraphs?}', 'TextController@showText');

Route::post('/lorem-ipsum/{numParagraphs?}', 'TextController@getNumParagraphs');

Route::get('/users/{numUsers?}', 'UserController@showUsers');

Route::post('/users/{numUsers?}', 'UserController@getNumberOfUsers');
