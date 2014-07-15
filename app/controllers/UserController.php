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
		$users = App::make('UserController')->generateUsers($numUsers);
		return View::make('usergen', array('users' => $users, 'label' => 'Number of Users', 'value' => $numUsers));
	}

	public function getNumberOfUsers() {
		$numUsers = $_POST['numItems'];
		return App::make('UserController')->showUsers($numUsers);
	}
}