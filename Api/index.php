<?php

use Phalcon\Loader;
use Phalcon\Mvc\Micro;
use Phalcon\Di\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as PdoMysql;

// Use Loader() to autoload our model
$loader = new Loader();

$loader->registerNamespaces(
[
'Sams\Farming' => __DIR__ . '/models/',
]
);

$loader->register();

$di = new FactoryDefault();

// Set up the database service
$di->set(
'db',
function () {
return new PdoMysql(
[
	'host'     => '127.0.0.1',
	'username' => 'phalcon',
	'password' => 'secret',
	'dbname'   => 'sams',
]
);
}
);

// Create and bind the DI to the application
$app = new Micro($di);

$app->get(
	'/farm_api/farmers',
	function () use ($app) {
		$phql = 'SELECT * FROM Sams\Farming\Farmers ORDER BY first_name';

		$robots = $app->modelsManager->executeQuery($phql);

		$data = [];

		foreach ($robots as $robot) {
			$data[] = [
				'id'   => $robot->id,
				'first_name' => $robot->first_name,
			];
		}

		echo json_encode($data);
	}
);

// Searches for robots with $name in their name
$app->get(
	'/farm_api/farmers/search/{name}',
	function ($name) {

	}
);

// Retrieves robots based on primary key
$app->get(
	'/farm_api/farmers/{id:[0-9]+}',
	function ($id) {

	}
);

// Adds a new robot
$app->post(
	'/farm_api/farmers',
	function () {

	}
);

// Updates robots based on primary key
$app->put(
	'/farm_api/farmers/{id:[0-9]+}',
	function () {

	}
);

// Deletes robots based on primary key
$app->delete(
	'/farm_api/farmers/{id:[0-9]+}',
	function () {

	}
);

$app->handle();