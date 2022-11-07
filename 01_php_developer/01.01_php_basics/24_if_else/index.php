<?php

function _normalizeUrl(string $url): string
{
    if (strpos($url, 'https://') === 0) {
        return $url;
    } elseif (strpos($url, 'http://') === 0) {
        return str_replace('http://', 'https://', $url);
    } else {
        return 'https://' . $url;
    }
}

var_dump(normalizeUrl('yandex.ru'));
//var_dump(str_replace('http://yandex.ru', 'https://', 'http://'));

// Решение учителя

function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } elseif (strpos($url, 'https://') === 0) {
        $domain = substr($url, 8);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}

// Другой подход немного - сначала вычленяем домен, а потом в финальном return соединяем его с 'https://'