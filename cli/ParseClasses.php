<?php
namespace WPDev\Docs\CLI;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseClasses extends Command
{
	protected $input;
	protected $output;
	/** @var \Composer\Autoload\ClassLoader $loader */
	protected $loader;

	public function __construct($name = null)
	{
		parent::__construct($name);
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
		$this->loader = require_once dirname(__DIR__).'/vendor/autoload.php';
	}

	protected function parseClassesIntoYamlFiles()
	{
		$this->filterClasses('WPDev\\Models');
		$this->filterClasses('WPDev\\Facades');
		$this->filterClasses('WPDev\\Template');
	}

	protected function filterClasses($namespace) {
		foreach ($this->loader->getClassMap() as $class => $path) {
			if (Stringy::create($class)->startsWith($namespace)) {
				var_dump($namespace);
			}
		}
	}
}