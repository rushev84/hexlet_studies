<?php

namespace App\Url;

// BEGIN (write your solution here)
function make(string $url): array
{
    return parse_url($url);
}

function setScheme(array &$data, string $scheme): void
{
    $data['scheme'] = $scheme;
}

function getScheme(array $data): string
{
    return $data['scheme'];
}

function setHost(array &$data, string $host): void
{
    $data['host'] = $host;
}

function getHost($data): string
{
    return $data['host'];
}

function setPath(array &$data, string $path): void
{
    $data['path'] = $path;
}

function getPath(array $data): string
{
    return $data['path'];
}

function setQueryParam(array &$data, $key, $value): void
{
    parse_str($data['query'], $query);
    $query[$key] = $value;
    $strQuery = http_build_query($query);
    $data['query'] = $strQuery;
}

function getQueryParam(array $data, string $paramName, $default = null)
{
    parse_str($data['query'], $query);
    return $query[$paramName] ?? $default;
}

function toString(array $data): string
{
    $scheme = getScheme($data);
    $host = getHost($data);
    $path = getPath($data);
    $query = isset($data['query']) ? "?{$data['query']}" : "";
    return "{$scheme}://{$host}{$path}{$query}";
}

// END

//$url = make('https://hexlet.io/community');
//
//var_dump(toString($url));

// Решение учителя - отличается от моего тем, что все параметры строки запроса преобразуются в массив на этапе создания объекта урла.