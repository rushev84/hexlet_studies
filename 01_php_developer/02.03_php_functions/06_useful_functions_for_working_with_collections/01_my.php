<?php

function slugify(string $str): string
{
    $str = Strings\toLower($str);

    $array = explode(' ', $str);

    foreach (array_keys($array, '') as $key) {
        unset($array[$key]);
    }

    return implode('-', $array);
}