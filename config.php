<?php

use WPDev\Docs\ClassParser;
use WPDev\Template\Template;

return [
    'baseUrl' => '',
    'production' => false,
    'githubUrl' => 'https://github.com/JoshMoreno/wpdev',
    'collections' => ['features', 'classes',],
    'navItems' => require __DIR__.'/data/navigation.php',

    'activeClass' => function ($page, $section) {
	    return ($page->getPath() === $section) ? 'active' : '';
    },

	'classes' => [
		'Template' => new ClassParser(Template::class),
	]
];
