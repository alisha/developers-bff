<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('index');
});

Route::get('/lorem-ipsum/{numParagraphs?}', array('as' => 'generateIpsum' ,function($numParagraphs = 2) {
	$generator = new Badcow\LoremIpsum\Generator();
    $text = $generator->getParagraphs($numParagraphs);
   	return View::make('loremipsum', array('text' => $text, 'label' => 'Number of Paragraphs'));
}));

Route::post('/lorem-ipsum/{numParagraphs?}', function() {
	Input::flash();
	$data = Input::old('numItems');
	$path = '/lorem-ipsum/' . $data;
	return Redirect::to($path);
});

Route::get('/users/{numUsers?}', function($numUsers = 1) {
	return "let's generate ".$numUsers." fake users";
});

Route::get('/form', function() {
	return View::make('form');
});