<?php

namespace WPDev\Docs;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Yaml\Yaml;

class ClassToYaml {
    protected $className;
    protected $directory;

    protected function __construct(string $class_name, string $directory)
    {
        $this->className = $class_name;
        $this->directory = rtrim($directory, '/');
    }

    public static function init(string $class_name, string $directory)
    {
        return new static($class_name, $directory);
    }

    public function execute()
    {
        $class = new ClassParser($this->className);
        $data = [
            'name'      => $class->getName(),
            'shortName' => $class->getShortName(),
            'namespace' => $class->getNamespaceName(),
            'methods'   => [],
        ];
        $methods = $class->getPublicMethods();
        foreach ($methods as $method) {
            $method_data = [
                'name'        => $method->getName(),
                'summary'     => $this->convertBackticksToCodeTags($method->getSummary()),
                'description' => $this->convertBackticksToCodeTags($method->getDescription()),
                'visibility'  => $method->getVisibility(),
            ];
            if ($method->isStatic()) {
                $method_data['static'] = true;
            }
            if ($method->hasReturnTag()) {
                $method_data['return'] = [
                    'type'        => $method->getReturnType(),
                    'description' => $this->convertBackticksToCodeTags($method->getReturnDescription()),
                ];
            }
            if ($method->getNumberOfParameters()) {
                $method_data['args'] = $method->getParameters();
                foreach ($method_data['args'] as $arg) {
                    if ( ! empty($arg['description'])) {
                        $arg['description'] = $this->convertBackticksToCodeTags($arg['description']);
                    }
                }
            }
            $data['methods'][] = $method_data;
        }


        $fs = new Filesystem;
        $fs->mkdir($this->directory, 0755);
        $filename = $this->directory.'/'.basename($class->getFileName(), '.php').'.md';

        $yaml = Yaml::dump($data, 5);
        $yaml = "---\n{$yaml}\n---";

        file_put_contents($filename, $yaml);
    }

    protected function convertBackticksToCodeTags($string)
    {
        return preg_replace('/`([^`]+)`/', '<code>$1</code>', $string);
    }
}