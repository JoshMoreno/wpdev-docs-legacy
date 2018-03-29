<?php

use WPDev\Docs\ClassParser;
use WPDev\Models\Image;
use WPDev\Models\Post;
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
		'PluginTemplate' => new ClassParser(Template::class),
		'Post' => new ClassParser(Post::class),
		'Image' => new ClassParser(Image::class),
	],
];
