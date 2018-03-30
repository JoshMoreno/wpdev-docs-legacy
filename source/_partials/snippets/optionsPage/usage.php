use WPDev\Facades\OptionsPage;

OptionsPage::create('Site Settings')
->topLevel()
->menuIcon('dashicons-admin-settings')
->register();