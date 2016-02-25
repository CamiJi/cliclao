<?php 
 
namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;

class LoginController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('login/index');
	}


	public function loginUser()
	{
		$email  =trim(htmlentities($_POST['email']));
		$password  =trim(htmlentities($_POST['password']));

		$errors = [];

		$userManager = new UserManager();
		$userManager->setTable('users');

		$resultUser = $userManager->getUserByUsernameOrEmail($email);
		
		// debug($resultUser);
		// die();

		if ($resultUser) {

			$authentificationManager = new AuthentificationManager();
			if ($authentificationManager->isValidLoginInfo($email, $password)) {
				$authentificationManager->logUserIn($resultUser);

				$this->redirectToRoute('home');
			}
			else{
				$errors['login'] = "Mauvais mot de passe ";
			}
			
		}
		else {
			
			$errors['login'] = "Cette adresse email n'existe pas";
		}


		$this->show('login/index', ['errors' => $errors]);

	}


	public function logoutUser()
	{
		echo "On entre dans le LoginController-> Method logoutUser ";
		$authentificationManager = new AuthentificationManager();
		$authentificationManager->logUserOut();
		$this->redirectToRoute('home');
	}



}