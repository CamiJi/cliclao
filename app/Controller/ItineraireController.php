<?php

namespace Controller;

use \W\Controller\Controller;

use \Manager\itManager;

class ItineraireController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('itineraire/index');
	}

	public function showIt($id)
		{
			// Je crée un gestionnaire 
			$itManager = new ItManager();
			// SELECT * FROM `country` WHERE `name` = $country;
			
			$itManager->setTable('voyages');


			$it = $itManager->findByVoyageId($id);

			print_r($it);

			// $this->show('itineraire/showIt',['it'=>$it]);
		}

}