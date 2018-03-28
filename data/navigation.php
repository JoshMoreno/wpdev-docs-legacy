<?php

use WPDev\Docs\MenuItem;

return [
    //MenuItem::create('Home', '/'),
    MenuItem::create('Getting Started')->children([
        MenuItem::create('Overview', '/docs'),
        MenuItem::create('Controllers', '/docs/controllers'),
        MenuItem::create('Collections', '/docs/collections'),
        MenuItem::create('Hooks'),
    ]),
    MenuItem::create('Models')->children([
        MenuItem::create('Post'),
        MenuItem::create('Image'),
    ]),
    MenuItem::create('Facades')->children([
        MenuItem::create('PostType'),
        MenuItem::create('OptionsPage'),
    ]),
	MenuItem::create('Template Helpers')->children([
		MenuItem::create('Template', '/docs/template'),
		MenuItem::create('Plugin Template', '/docs/plugin-template'),
	]),
];