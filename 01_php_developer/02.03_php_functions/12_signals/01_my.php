<?php

require_once __DIR__ . '/vendor/autoload.php';

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];


function getFreeDomainsCount(array $emails): array
{
    $domains = array_map(function ($email) {
        $arr = explode('@', $email);
        return $arr[1];
    }, $emails);

    $freeDomains = array_filter($domains, function ($domain) {
        return in_array($domain, FREE_EMAIL_DOMAINS);
    });

    $freeDomainsCount = array_reduce($freeDomains, function ($acc, $freeDomain) {
        array_key_exists($freeDomain, $acc) ? $acc[$freeDomain]++ : $acc[$freeDomain] = 1;
        return $acc;
    }, []);

    return $freeDomainsCount;
}