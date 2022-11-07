<?php

namespace App\Url;

// BEGIN
function make($url)
{
    $data = parse_url($url);
    $queryParams = [];
    if (isset($data['query'])) {
        parse_str($data['query'], $queryParams);
    }
    $data['queryParams'] = $queryParams;
    return $data;
}

function setScheme(&$data, $scheme)
{
    $data['scheme'] = $scheme;
}

function getScheme($data)
{
    return $data['scheme'];
}

function setHost(&$data, $host)
{
    $data['host'] = $host;
}

function getHost($data)
{
    return $data['host'];
}

function setPath(&$data, $path)
{
    $data['path'] = $path;
}

function getPath($data)
{
    return $data['path'];
}

function setQueryParam(&$data, $key, $value)
{
    $data['queryParams'][$key] = $value;
}

function getQueryParam($data, $paramName, $default = null)
{
    return $data['queryParams'][$paramName] ?? $default;
}

function getQueryParams($data)
{
    return $data['queryParams'];
}

function toString($data)
{
    $queryString = http_build_query(getQueryParams($data));
    $fullQueryString = $queryString ? "?{$queryString}" : '';
    $scheme = getScheme($data);
    $host = getHost($data);
    $path = getPath($data);
    return "{$scheme}://{$host}{$path}{$fullQueryString}";
}
// END