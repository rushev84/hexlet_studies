<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Funct\Collection\flatten;

function getChildren(array $users): array
{
    return flatten(array_map(fn($user) => $user['children'], $users));
}