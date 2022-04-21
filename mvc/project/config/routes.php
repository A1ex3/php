<?php
	use \Core\Route;

	return [
		new Route('/product/:n/', 'product', 'show'),
		new Route('/product/all', 'product', 'all')
	];

