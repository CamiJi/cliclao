<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function privateHome(){

		$user = $this->getUser();
		debug($user);

		$email = $user['email'];
		$this->show('default/home', ['email' => $email]);
	}

	public function backoffice(){
		$this->allowTo('admin');
		echo 'BackOffice';
	}

}