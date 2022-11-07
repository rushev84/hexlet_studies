<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Funct\Collection\flatten;

function getChildren(array $users)
{
    $children = array_map(fn($user) => $user['children'], $users);
    return flatten($children);
}