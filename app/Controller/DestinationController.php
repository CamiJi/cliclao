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

	public function showSearchResult()
	{


		$countryName = trim(htmlentities($_POST['search']));

		// Je crée un gestionnaire 
		$countryManager = new CountryManager();
		// SELECT * FROM `country` WHERE `name` = $country;
		
		$countryManager->setTable('country');

		$country = $countryManager->findByName($countryName);


			if ($country) {
					
					
					$this->show('destination/showCountry',['country' => $country]);
			}
			else{		

				$errors['countryNotFind'] = $countryName;
					
				$this->show('destination/showCountry',['errors' => $errors]);

			}

			


	}

}