<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Funct\Collection\flatten;

function getGirlFriends(array $users)
{
    $allFriendsLists = array_map(fn($user) => $user['friends'], $users);
    $friends = flatten($allFriendsLists);
    $girlFriends = array_filter($friends, fn($user) => $user['gender'] === 'female');

    return array_values($girlFriends);
}