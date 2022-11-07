<?php

require_once __DIR__ . '/vendor/autoload.php';

function getMenCountByYear(array $users)
{
    $menfolk = array_filter($users, fn($user) => $user['gender'] === 'male');

    $years = array_map(fn($user) => date('Y', strtotime($user['birthday'])), $menfolk);

    return array_reduce($years, function ($acc, $year) {
        if (!array_key_exists($year, $acc)) {
            $acc[$year] = 1;
        } else {
            $acc[$year] += 1;
        }

        return $acc;
    }, []);
}