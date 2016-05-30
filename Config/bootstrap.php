<?php
CroogoCache::config('switcher_default', array_merge(
	Configure::read('Cache.defaultConfig'),
	array('duration' => '+10 minutes')
));

Croogo::hookBehavior('Node', 'Switcher.Switcher');
Croogo::hookComponent('*', 'Switcher.Switcher');
Croogo::hookHelper('*', 'Switcher.Switcher');

Croogo::hookAdminTab('Nodes/admin_edit', 'Switcher', 'switcher.admin_tab_node');
Croogo::hookAdminTab('Nodes/admin_add', 'Switcher', 'switcher.admin_tab_node');
