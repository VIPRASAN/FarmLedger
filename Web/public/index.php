<?php

use Phalcon\Loader;
use Phalcon\Config;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Di\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Session\Adapter\Files as Session;


// Define some absolute path constants to aid in locating resources
define( 'BASE_PATH', dirname( __DIR__ ) );
define( 'APP_PATH', BASE_PATH . '/app' );

// Register an autoloader
$objAutoLoader = new Loader();

$objAutoLoader->registerDirs(
	[
		APP_PATH . '/controllers/',
		APP_PATH . '/controllers/Authentication',
		APP_PATH . '/controllers/Ledger',
		APP_PATH . '/controllers/Profile',
		APP_PATH . '/models/',
	]
);

$objAutoLoader->register();

// Create a DI
$objDiContainer = new FactoryDefault();

// Setup the config component
$objDiContainer->set(
	'config',
	function () {
		$configDataFilePath = require BASE_PATH . '/../../FarmLedgerConfig/default_config.php';

		return new Config( $configDataFilePath );
	}
);


if( true == $objDiContainer->get( 'config' )->site_maintenance ) {
	require 'index.html';
	exit;
}

// Setup the view component
$objDiContainer->set(
	'view',
	function () {
		$objView = new View();
		$objView->setViewsDir( APP_PATH . '/views/' );
		return $objView;
	}
);

// Setup a base URI so that all generated URIs include the "tutorial" folder
$objDiContainer->set(
	'url',
	function () {
		$objUrlProvider = new UrlProvider();
		$objUrlProvider->setBaseUri( '/' );
		return $objUrlProvider;
	}
);

// Setup the database service
$objDiContainer->set(
	'db',
	function () {

		$objConfig = $this->get( 'config' );

		return new DbAdapter(
			[
				'host'     => $objConfig->database->host,
				'username' => $objConfig->database->username,
				'password' => $objConfig->database->password,
				'dbname'   => $objConfig->database->dbname,
			]
		);
	}
);

// Start the session the first time when some component request the session service
$objDiContainer->setShared(
	'session',
	function () {
		$objSession = new Session();
		$objSession->start();

		return $objSession;
	}
);

$objApplication = new Application( $objDiContainer );

try {
	// Handle the request
	$objResponse = $objApplication->handle();

	$objResponse->send();
} catch ( \Exception $objException ) {
	echo 'Exception: ', $objException->getMessage();
}