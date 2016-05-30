<?php

CroogoNav::add('extensions.children.switcher', array(
    'title' => 'Switcher',
	'url' => '#',
	'children' => array(
		'paths' => array(
			'title' => 'Paths',
			'url' => array(
				'admin' => true,
				'plugin' => 'switcher',
				'controller' => 'switcher_paths',
				'action' => 'index',
			),
			'weight' => 10,
		),
	),
));
