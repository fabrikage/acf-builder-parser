# ACF Builder Parser

### This project is a work in progress and is not yet ready for use.

![Work in progress](https://img.shields.io/badge/status-work_in_progress-orange.svg)

## Description

This project provides a parser for converting ACF (Advanced Custom Fields) exports into PHP code that uses [ACF Builder](https://github.com/StoutLogic/acf-builder) for the creation of ACF fields. It provides a simple way to batch convert ACF fields from ACF exports into PHP code that can be used in a theme or plugin. An example use case would be to convert a legacy project that uses ACF fields into a more modern (version controllable) approach that uses ACF Builder.

## Requirements

- PHP 8.1 or higher
- Composer

## Installation

1. Clone the repository

2. Install dependencies using Composer:
   ```sh
   composer install
   ```

## Example

The `examples/acf-builder-parser.php` script demonstrates how to use the parser:

```php
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
```