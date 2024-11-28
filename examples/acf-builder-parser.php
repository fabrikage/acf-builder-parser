<?php

use Fabrikage\AcfBuilderParser\Export\AcfExport;
use Fabrikage\AcfBuilderParser\Parser\PhpParser;

$autoload = dirname(__DIR__) . '/vendor/autoload.php';

if (!file_exists($autoload)) {
    throw new \RuntimeException('Please run `composer install` first.'); // NOSONAR
}

require_once $autoload; // NOSONAR

// Give it some JSON to work with
$json = file_get_contents(__DIR__ . '/acf-all-fields-export-example.json');

// Create an object from the JSON
$acfJson = AcfExport::fromJson($json);

// Get the parser
$parser = PhpParser::getInstance();
$parser->setTextdomain('fabrikage');
$parser->setBuilderVariable('myBuilderVar');
$parser->setResultVariable('myResultVar');

// Parse and output the PHP code
echo '<pre>';
echo $parser->parse($acfJson);
echo '</pre>';
