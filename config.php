<?php

use Illuminate\View\Compilers\BladeCompiler;

return [
    'baseUrl' => '',
    'production' => false,
    'githubUrl' => 'https://github.com/JoshMoreno/wpdev',
    'collections' => ['features', 'classes',],
    'navItems' => require __DIR__.'/data/navigation.php',

    'activeClass' => function ($page, $section) {
	    return ($page->getPath() === $section) ? 'active' : '';
    },
	'snippet' => function($page, $snippetFile) {
		$snippetFile = str_replace('.', '/', $snippetFile);
		$snippetFile = __DIR__.'/source/_partials/snippets/'.$snippetFile.'.php';
		if (!file_exists($snippetFile)) {
			return '';
		}
		return file_get_contents($snippetFile);
	},
];
