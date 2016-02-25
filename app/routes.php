<?php 
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/destination', 'Destination#index', 'destination'],
		['GET', '/itineraire/[:id]', 'Itineraire#showIt', 'itineraire'],

		['GET', '/destination/[:country]', 'Destination#showCountry', 'destinationCountry'],


		['GET', '/login', 'Login#index', 'login'],

		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],

		['GET', '/logout', 'Login#logoutUser', 'logoutUser'],


		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/private', 'default#privateHome', 'privateHome'],
		['GET', '/bo', 'default#backOffice', 'bo'],
	);