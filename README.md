Switch Plugin Version 0.1
-------------------------

This plugin enables per node theme/layout switching

Configuration
-------------

1. Activate the plugin

2. Create or edit a new Node/Blog/Page and choose the theme/layout in
   the Switcher tab

   or

3. Use the Switcher -> Paths menu to configure theme/layouts based on url path

Layout Restriction By Content Type
----------------------------------

You can limit layouts for use based on Content Type. To enable this feature,
you will need run following during your app bootstrap cycle:

	```php
	Configure::write('Switcher', array(
		'filterByContentType' => true,
		'contentTypes' => array(
			'page' => array(
				'default',
				'full',
			),
			'blog' => array(
				'default',
				'blog-sidebar',
			),
		),
	));
	```

Requirements
------------

Croogo >= 2.2 - http://croogo.org/

Good luck and have fun.

-- rchavik
