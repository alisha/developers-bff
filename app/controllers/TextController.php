<?php

class TextController extends BaseController {
	public function generateText($numParagraphs = 2) {
		$generator = new Badcow\LoremIpsum\Generator();
    	$text = $generator->getParagraphs($numParagraphs);
   		return $text;
	}

	public function showText($numParagraphs = 2) {
		$text = App::make('TextController')->generateText($numParagraphs);
		return View::make('loremipsum', array('text' => $text, 'label' => 'Number of Paragraphs'));
	}

	public function getNumParagraphs() {
		$numParagraphs = $_POST['numItems'];
		return App::make('TextController')->showText($numParagraphs);
	}
}