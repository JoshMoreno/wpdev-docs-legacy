use WPDev\Facades\PostType;

PostType::create('project')
->supportsPageAttributes()
->menuIcon('dashicons-hammer')
->register();