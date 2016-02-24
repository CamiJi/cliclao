<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\userManager;
use \W\Security\AuthentificationManager;
use \DateTime;

class RegisterController extends Controller
{


	public function index()
	{
		$this->show('register/index');
	}



	public function registerUser()
	{
		debug($_POST);

		$email = trim(htmlentities($_POST['email']));
		$name = trim(htmlentities($_POST['name']));
		$password = trim(htmlentities($_POST['password']));
		$confirmPassword = trim(htmlentities($_POST['confirmPassword']));

		$errors = [];

		$userManager = new UserManager();
		$userManager->setTable('users');




		if (empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL)) == false) {
			$errors['email'] = "Verifiez votre adresse email";
		}
		elseif ($userManager->emailExists($email)) {
			$errors['email'] = "Cet email existe déjà";
		}

		if ($password != $confirmPassword) {
			$errors['password'] = "Les mots de passe ne sont pas identiques";
		}
		elseif (strlen($password) <= 6 ) {
			$errors['password'] = "Les mots de passe doivent faire plus de 6 caractères";
		}

		if (empty($errors)) {

			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

			$date = new DateTime();

			$resultUser = $userManager->insert([
				'email' => $email,
				'name' => $name,
				'password' => $hashedPassword,
				'role' => 'member',
				'created_at' => $date->format('Y-m-d H:i:s'),
				'updated_at' => $date->format('Y-m-d H:i:s'),

			]);

			if ($resultUser) {
				$authentificationManager = new AuthentificationManager();
				$authentificationManager->logUserIn($resultUser);
				$this->redirectToRoute('home');
			}
			
		}
		else {
			$this->show('register/index', ['errors' => $errors, 'email' => $email]);
		}
	}


}