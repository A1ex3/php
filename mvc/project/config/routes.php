<?php
	use \Core\Route;

	return [
		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key/', 'user', 'info'),
		new Route('/user/all', 'user', 'all'),
		new Route('/users/first/:n/', 'user', 'first')
	];

