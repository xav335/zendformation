<?php
return array(
	'controllers' => array(
			'invokables' => array(
				'POTM\Controller\Index' => 'POTM\Controller\IndexController'
			)
	),
	'router' => array(
		'routes' => array(
			'POTM' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/POTM',
					'defaults' => array(
						'__NAMESPACE__' => 'POTM\Controller',
						'controller' => 'Index',
						'action' => 'index',	
					)
				)
			)
		)	
	),
	'view_manager' => array(
		'template_path_stack' => array(
			'POTM' => __DIR__. '/../view'
		)
	)
);