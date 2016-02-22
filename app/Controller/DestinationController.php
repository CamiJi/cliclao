<?php

namespace Controller;

use \W\Controller\Controller;

use \Manager\CountryManager;

class DestinationController extends Controller
{


	public function index()
	{
		$this->show('destination/index');
	}



	public function showCountry($country)
	{
		// Je crée un gestionnaire 
		$countryManager = new CountryManager();
		// SELECT * FROM `country` WHERE `name` = $country;
		
		$countryManager->setTable('country');


		$country = $countryManager->findByName($country);

		// print_r($country);

		$this->show('destination/showCountry',['country' => $country]);
	}

}