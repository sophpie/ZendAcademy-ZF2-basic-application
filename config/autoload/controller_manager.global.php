<?php
/**
 * This file provides controller manager configuration.
 * Controller manager is a service locator used to provide
 * the application with controller instances.
 * Each controller you want to use has to be registered within this service locator.
 * The key use to register the controller is the 'controller' parameter you set in your routes.
 */
return [
	'controllers' => [
		'invokables' => [
			'Application\Index' => 'Application\Controller\IndexController',
		],
	],
];