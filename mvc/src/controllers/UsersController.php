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

	public function update($args) {
		$user = User::select()->find($args['id']);
		$this->render('update', [
			'user' => $user
		]);
	}

	public function updateAction($args) {
		$name = filter_input(INPUT_POST, 'name');
		$email = filter_input(INPUT_POST, 'email');

		if($name && $email) {
			User::update()->set('name', $name)->set('email', $email)->where('id', $args['id'])->execute();

			$this->redirect('/');
		}

		$this->redirect('/user/'.$args['id'].'/update');
	}

	public function delete($args) {
		User::delete()->where('id', $args['id'])->execute();
		$this->redirect('/');
	}
}