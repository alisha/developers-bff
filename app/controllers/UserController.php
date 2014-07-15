<?php

class UserController extends BaseController {
	public function generateUsers($numUsers = 2) {

		$users = array();
		for ($i = 0; $i < $numUsers; $i++) { 
			array_push($users, Faker\Factory::create());
		}
		return $users;
	}

	public function showUsers($numUsers = 2) {
		//$numUsers = $_POST['numItems'];
		//$numUsers = $_POST('numItems');
		//$showAddress = Input::get('showAddress');
		$users = App::make('UserController')->generateUsers($numUsers);
		return View::make('usergen', array('users' => $users, 'label' => 'Number of Users'));
	}

	public function getNumberOfUsers() {
		$numUsers = $_POST['numItems'];
		return App::make('UserController')->showUsers($numUsers);
	}
}