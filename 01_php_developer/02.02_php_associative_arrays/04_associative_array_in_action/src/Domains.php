<?php


namespace App\Domains;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _getDomainInfo(string $domain): array
{
    $scheme = 'http';

    if (substr($domain, 0, 8) === 'https://') {
        $scheme = 'https';
        $domain = substr($domain, 8);
    }

    if (substr($domain, 0, 7) === 'http://') {
        $domain = substr($domain, 7);
    }

    return [
        'scheme' => $scheme,
        'name' => $domain
    ];
}
// END


// Если домен передан без указания протокола,
// то по умолчанию берется http
//dump(getDomainInfo('yandex.ru'));
// [
//     'scheme' => 'http',
//     'name' => 'yandex.ru'
// ]

//dump(getDomainInfo('https://hexlet.io'));
// [
//     'scheme' => 'https',
//     'name' => 'hexlet.io'
// ]

//dump(getDomainInfo('http://google.com'));
// [
//     'scheme' => 'http',
//     'name' => 'google.com'
// ]


// Решение учителя
// Более лаконичное. Основной момент - str_replace. И даже если в изначальном домене нет нужной строки, то тоже получается норм - просто вернётся он же.

function getDomainInfo(string $domain): array
{
    if (substr($domain, 0, 8) === 'https://') {
        $scheme = 'https';
    } else {
        $scheme = 'http';
    }

    $name = str_replace("{$scheme}://", '', $domain);

    return ['scheme' => $scheme, 'name' => $name];
}

