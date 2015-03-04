<?php
/**
 * This file provide router configuration.
 */
return [
	'router' => [
		//Route list
		'routes' => [
			//Home page route
			'home' => [
				'type' => 'Literal',	//route type
				'options' => [
					'route' => '/',		//Parsing mask
					'defaults' => [
						'controller'	=> 'default',	
						'action' 		=> 'index',
					],
				],
			],
		],
	],
];