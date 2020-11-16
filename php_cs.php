<?php
/**
 * Coding standards fixer configuration file. Contains rules to fix your 
 * code. 
 * For more information on CS rules and configuration, 
 * Check https://mlocati.github.io/php-cs-fixer-configurator
 */

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests')
    ->in(__DIR__);

return PhpCsFixer\Config::create()->setRules([
    'align_multiline_comment' => [
        'comment_type' => 'phpdocs_only'
    ],
])->setFinder($finder);