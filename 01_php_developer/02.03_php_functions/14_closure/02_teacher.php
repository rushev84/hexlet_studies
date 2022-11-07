<?php

require_once __DIR__ . '/vendor/autoload.php';

function without(array $items, ...$values)
{
    $filtered = array_filter($items, fn($item) => !in_array($item, $values, true));

    // Сбрасываем ключи
    return array_values($filtered);
}
