<?php
/**
 * This file provide router configuration.
 */
return [
	'router' => [
		'routes' => [
			'home' => [
				'type' => 'Literal',
				'options' => [
					'route' => '/',
					'defaults' => [
						'controller'	=> 'Application\Index',
						'action' 		=> 'index',
					],
				],
			],
		],
	],
];