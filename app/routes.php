<?php 
	
	$w_routes = array(

		// Page Index
		['GET', '/', 'Default#home', 'home'],

		// Page Destinations (tout les pays sont proposés)
		['GET', '/destination', 'Destination#index', 'destination'],

		// Page Destination (pays par pays)
		['GET', '/destination/[:country]', 'Destination#showCountry', 'destinationCountry'],

		// Page Itinéraire
		['GET', '/itineraire/[:id]', 'Itineraire#showIt', 'itineraire'],


		// Page Login + logique de log
		['GET', '/login', 'Login#index', 'login'],
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],

		// Logique de Logout
		['GET', '/logout', 'Login#logoutUser', 'logoutUser'],

		// Page d'inscription + logique de register
		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],


		// Page formulaire : ajout de voyage + logique d'ajout
		['GET', '/proposerunvoyage', 'Addtravel#index', 'addTravel'],
		['POST', '/proposerunvoyage', 'Addtravel#addTravel', 'addTravelUser'],


		// Page de backoffice et de privatehome
		['GET', '/private', 'default#privateHome', 'privateHome'],
		['GET', '/bo', 'default#backOffice', 'bo'],
	);