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
			// Je crée un gestionnaire pour récupérer les données du voyage
			$itManager = new ItManager();
			$it = $itManager->findByVoyageId($id);

			
		
			$this->show('itineraire/showIt',['it' => $it]);
		}

}


