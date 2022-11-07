<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Funct\Collection\flatten;

function getGirlFriends(array $users): array
{
    $friends = flatten(array_map(fn($user) => $user['friends'], $users));
    $girlFriends = array_filter($friends, fn($friend) => $friend['gender'] === 'female');
    return array_values($girlFriends);
}