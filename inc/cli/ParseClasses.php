<?php

namespace WPDev\Docs\CLI;

use Stringy\Stringy;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use WPDev\Docs\ClassToYaml;

class ParseClasses extends Command
{
    protected $input;
    protected $output;
    /** @var \Composer\Autoload\ClassLoader $loader */
    protected $loader;

    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->loader = require dirname(__DIR__, 2).'/vendor/autoload.php';
    }

    protected function configure()
    {
        $this->setName('parseClasses')
             ->setDescription('Parses wpdev classes into yaml files.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input  = $input;
        $this->output = $output;
        $dir          = dirname(__DIR__).'/source/_classes';
        $this->parseClassesIntoYamlFiles('WPDev\\Models', $dir.'/models');
        $this->parseClassesIntoYamlFiles('WPDev\\Facades', $dir.'/facades');
        $this->parseClassesIntoYamlFiles('WPDev\\Template', $dir.'/template');
    }

    protected function parseClassesIntoYamlFiles($namespace, $folder)
    {
        $this->getClassesByNamespace($namespace)
             ->each(function ($class) use ($folder) {
                 ClassToYaml::init($class, $folder)->execute();
             })
        ;
    }

    protected function getClassesByNamespace($namespace)
    {
        return collect($this->loader->getClassMap())
            ->flip()
            ->filter(function ($class) use ($namespace) {
                return Stringy::create($class)->startsWith($namespace);
            });
    }
}