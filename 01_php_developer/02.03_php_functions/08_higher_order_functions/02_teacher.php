<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Funct\Collection\firstN;

function takeOldest(array $users, int $count = 1)
{
    usort(
        $users,
        fn($user1, $user2) => $user1['birthday'] <=> $user2['birthday']
    );

    return firstN($users, $count);
}