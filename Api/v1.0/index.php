<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

// Retrieves all farmers
$app->get(
	'/api/farmers',
	function () use ($app) {
		$phql = 'SELECT * FROM Store\Toys\Robots ORDER BY name';

		$robots = $app->modelsManager->executeQuery($phql);

		$data = [];

		foreach ($robots as $robot) {
			$data[] = [
				'id'   => $robot->id,
				'name' => $robot->name,
			];
		}

		echo json_encode($data);
	}
);

// Searches for robots with $name in their name
$app->get(
	'/api/farmers/search/{name}',
	function ($name) use ($app) {
		$phql = 'SELECT * FROM Store\Toys\Robots WHERE name LIKE :name: ORDER BY name';

		$robots = $app->modelsManager->executeQuery(
			$phql,
			[
				'name' => '%' . $name . '%'
			]
		);

		$data = [];

		foreach ($robots as $robot) {
			$data[] = [
				'id'   => $robot->id,
				'name' => $robot->name,
			];
		}

		echo json_encode($data);
	}
);

// Retrieves robots based on primary key
$app->get(
	'/api/farmers/{id:[0-9]+}',
	function ($id) {

	}
);


$app->handle();