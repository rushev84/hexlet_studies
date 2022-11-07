<?php

namespace App\Strings;

// BEGIN (write your solution here)
function _buildDefinitionList(array $definitons): string
{
    if (empty($definitons)) {
        return '';
    }

    $result = [];
    foreach ($definitons as $definiton) {
        $result[] = "<dt>{$definiton[0]}</dt><dd>{$definiton[1]}</dd>";
    }
    $innerValue = implode('', $result);
    return "<dl>{$innerValue}</dl>";
}

// END

$definitions1 = [
    ['key', 'value'],
    ['key2', 'value2'],
];
$actual1 = buildDefinitionList($definitions1);
print_r($actual1);

$expected1 = '<dl><dt>key</dt><dd>value</dd><dt>key2</dt><dd>value2</dd></dl>';
//$this->assertEquals($expected1, $actual1);



// Решение учителя не сильно лучше:

function buildDefinitionList(array $definitions)
{
    if (empty($definitions)) {
        return '';
    }

    $parts = [];
    foreach ($definitions as $definition) {
        $name = $definition[0];
        $description = $definition[1];
        $parts[] = "<dt>{$name}</dt><dd>{$description}</dd>";
    }
    $innerValue = implode('', $parts);
    $result = "<dl>{$innerValue}</dl>";

    return $result;
}