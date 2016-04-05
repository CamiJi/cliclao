<?php

namespace Controller;

use \W\Controller\Controller;

use \Manager\CountryManager;



class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		// Je crée un gestionnaire dans le CountryManager;
		$countryManager = new CountryManager();
		// SELECT * FROM `country` WHERE `name` = $country;
		
		// on va chercher les infos dans la table 'voyages' via le CountryManager
		$countryManager->setTable('voyages');

		// On cherche avec la méthode ramdomTravel des voyages au hasard
		$randomTravel = $countryManager->randomTravel();

		// print_r($randomTravel);

		// die();

		// On réaffiche notre page home en lui envoyant les données  des voyages choisit au hasard
		$this->show('default/home',['randomTravel' => $randomTravel]);
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