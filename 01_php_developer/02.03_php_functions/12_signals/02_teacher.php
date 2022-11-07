<?php

require_once __DIR__ . '/vendor/autoload.php';

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount(array $emails)
{
    $domains = array_map(fn($email) => explode('@', $email)[1], $emails);
    $freeDomains = array_filter(
        $domains,
        fn($domain) => in_array($domain, FREE_EMAIL_DOMAINS)
    );

    return array_reduce($freeDomains, function ($acc, $domain) {
        $acc[$domain] = ($acc[$domain] ?? 0) + 1;
        return $acc;
    }, []);
}