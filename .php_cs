<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PSR2' => true,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces' => [
        'align_double_arrow' => false,
        'align_equals' => false,
    ],
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_return' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'declare_equal_normalize' => [
        'space' => 'single',
    ],
    'function_declaration' => [
        'closure_function_spacing' => 'one',
    ],
    'no_blank_lines_after_phpdoc' => true,
    'no_extra_consecutive_blank_lines' => true,
    'no_unused_imports' => true,
    'no_whitespace_in_blank_line' => true,
    'ordered_imports' => true,
    'phpdoc_align' => false,
    'phpdoc_indent' => true,
    'phpdoc_inline_tag' => true,
    'phpdoc_order' => true,
    'phpdoc_trim' => true,
    'single_blank_line_before_namespace' => true,
    'single_quote' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline_array' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
];

return Config::create()
    ->setRules($rules)
    ->setFinder(Finder::create()->in(__DIR__))
    ->setRiskyAllowed(true);
