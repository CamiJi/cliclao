<?php

namespace Controller;

use \W\Controller\Controller;

class DestinationController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('destination/index');
	}

}