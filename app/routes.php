<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/destination', 'Destination#index', 'destination'],
		['GET', '/itineraire', 'Itineraire#index', 'itineraire'],


		['GET', '/login', 'Login#index', 'login'],
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],


		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/private', 'default#privateHome', 'privateHome'],
		['GET', '/bo', 'default#backOffice', 'bo'],
	);