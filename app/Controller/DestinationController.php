<?php

namespace Controller;

use \W\Controller\Controller;

class DestinationController extends Controller
{


	public function index()
	{
		$this->show('destination/index');
	}



	public function showCountry($country)
	{
		// $this->show('destination/showCountry');
		echo $country;
	}

}