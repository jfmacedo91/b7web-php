<?php
namespace src\controllers;

use \core\Controller;
use \src\models\User;

class UsersController extends Controller {

	public function create() {
		$this->render('create');
  }

	public function createAction() {
		$name = filter_input(INPUT_POST, 'name');
		$email = filter_input(INPUT_POST, 'email');

		if($name && $email) {
			$data = User::select()->where('email', $email)->execute();

			if(count($data) === 0) {
				User::insert([
					'name' => $name,
					'email' => $email
				])->execute();
				
				$this->redirect('/');
			}
		}
		$this->redirect('/create');
	}

	public function update() {

	}

	public function delete() {
		
	}
}