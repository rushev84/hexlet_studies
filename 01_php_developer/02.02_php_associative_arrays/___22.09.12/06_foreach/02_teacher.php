<?php

function pick(array $data, array $keys)
{
    $result = [];
    foreach ($keys as $key) {
        if (array_key_exists($key, $data)) {
            $result[$key] = $data[$key];
        }
    }

    return $result;
}