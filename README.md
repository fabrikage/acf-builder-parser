# ACF Builder Parser

### This project is a work in progress and is not yet ready for use. Feel free to submit pull requests.

![Work in progress](https://img.shields.io/badge/status-work_in_progress-orange.svg)

## Description

This project provides a parser for converting ACF (Advanced Custom Fields) exports into PHP code that uses [ACF Builder](https://github.com/StoutLogic/acf-builder) for the creation of ACF fields. It provides a simple way to batch convert ACF fields from ACF exports into PHP code that can be used in a theme or plugin. An example use case would be to convert a legacy project that uses ACF fields into a more modern (version controllable) approach that uses ACF Builder.

## Requirements

- PHP 8.1 or higher
- Composer

## Installation into project via Composer

1. Install via Composer:
   ```sh
   composer require fabrikage/acf-builder-parser
   ```

## Manual installation

1. Clone the repository:

   ```sh
   git clone git@github.com:fabrikage/acf-builder-parser.git
   ```

2. Install dependencies:
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
    throw new \RuntimeException('Please run `composer install` first.');
}

require_once $autoload;

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

## Example output

Note: [`stoutlogic/acf-builder`](https://github.com/StoutLogic/acf-builder) is required in the project to use the generated code.

```php
// $myBuilderVar has been manually set in the parser
$myBuilderVar = new StoutLogic\AcfBuilder\FieldsBuilder('group_67482934dadb3', [
    // The translation function has been added by the parser, using the textdomain defined in the parser
    'title' => __('A collection of all possible ACF fields containing dummy data', 'fabrikage'),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => __('', 'fabrikage'),
    'show_in_rest' => 0,
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ],
        ],
    ],
]);

$myBuilderVar->addImage('field_674829d308c37', [
    'label' => __('Sint dolores ratione', 'fabrikage'),
    'name' => 'sint_dolores_ratione',
    'return_format' => 'array',
    'library' => 'uploadedTo',
    'preview_size' => 'medium',
]);

$myBuilderVar->addWysiwyg('field_674829ef08c39', [
    'label' => __('Et duis nobis archit', 'fabrikage'),
    'name' => 'et_duis_nobis_archit',
    'default_value' => __('Tempor doloribus dol', 'fabrikage'),
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => true,
]);

$myBuilderVar->addTrueFalse('field_67482db351f0b', [
    'label' => __('Eum occaecat laborum', 'fabrikage'),
    'name' => 'eum_occaecat_laborum',
    'message' => __('Amet incidunt odio', 'fabrikage'),
    'default_value' => false,
]);

$myBuilderVar->addLink('field_67482dc251f0c', [
    'label' => __('Non officiis consequ', 'fabrikage'),
    'name' => 'non_officiis_consequ',
    'return_format' => 'url',
]);

$myBuilderVar->addPostObject('field_67482dd651f0d', [
    'label' => __('Autem numquam et asp', 'fabrikage'),
    'name' => 'autem_numquam_et_asp',
    'post_type' => [
        'attachment',
    ],
    'post_status' => [
        'draft',
    ],
    'taxonomy' => [
        'category:niet-gecategoriseerd',
        'category:test',
    ],
    'multiple' => true,
    'return_format' => 'id',
    'ui' => true,
]);

$myBuilderVar->addMessage('field_67482e86395d4', [
    'label' => __('Aut impedit quam es', 'fabrikage'),
    'name' => 'aut_impedit_quam_es',
    'message' => __('Qui sit quisquam no', 'fabrikage'),
]);

// Note that a variable is used to store the group
$accusamusQuisquamE = $myBuilderVar->addGroup('field_67482eb6395d7', [
    'label' => __('Accusamus quisquam e', 'fabrikage'),
    'name' => 'accusamus_quisquam_e',
    'layout' => 'row',
]);

// The group is used to add fields to it
$accusamusQuisquamE->addText('field_67482ed7395d9', [
    'label' => __('Quis corporis volupt', 'fabrikage'),
    'name' => 'quis_corporis_volupt',
    'default_value' => __('Consequatur nihil d', 'fabrikage'),
    'maxlength' => '',
]);

// Repeaters work in the same way
$elitSitQuoDolore = $myBuilderVar->addRepeater('field_67482ec2395d8', [
    'label' => __('Elit sit quo dolore', 'fabrikage'),
    'name' => 'elit_sit_quo_dolore',
    'min' => 0,
    'max' => 0,
    'button_label' => __('Nieuwe regel', 'fabrikage'),
    'layout' => 'table',
    'pagination' => false,
    'rows_per_page' => 20,
]);

// Add to the repeater
$elitSitQuoDolore->addText('field_67482ed7395d9', [
    'label' => __('Quis corporis volupt', 'fabrikage'),
    'name' => 'quis_corporis_volupt',
    'default_value' => __('Consequatur nihil d', 'fabrikage'),
    'maxlength' => '',
]);

// $myResultVar has been manually set in the parser
$myResultVar = $myBuilderVar->build();
```
