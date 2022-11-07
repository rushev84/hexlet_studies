<?php

require_once __DIR__ . '/vendor/autoload.php';

use Funct\Collection;

function duplicateEach(array $items)
{
    return Collection\flatten(
        array_map(fn($item) => [$item, $item], $items)
    );
}

function enlargeArrayImage($matrix)
{
    $horizontallyStretched = array_map(fn($col) => duplicateEach($col), $matrix);
    return duplicateEach($horizontallyStretched);
}