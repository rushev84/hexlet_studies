<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Funct\Collection\firstN;

function takeOldest($users, $n = 1)
{
    $cmp = fn($a, $b) => $a['birthday'] <=> $b['birthday'];
    usort($users, $cmp);
    return firstN($users, $n);
}