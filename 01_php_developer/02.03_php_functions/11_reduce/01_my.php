<?php

require_once __DIR__ . '/vendor/autoload.php';

function getMenCountByYear(array $users): array
{
    $men = array_reduce($users, function ($acc, $user) {
        if ($user['gender'] === 'male') {
            $birthYear = date('Y', strtotime($user['birthday']));
            array_key_exists($birthYear, $acc) ? $acc[$birthYear]++ : $acc[$birthYear] = 1;
        }
        return $acc;
    }, []);

    return $men;
}
