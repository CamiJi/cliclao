<?php

namespace Controller;

use \W\Controller\Controller;

class ItineraireController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('itineraire/index');
	}

}