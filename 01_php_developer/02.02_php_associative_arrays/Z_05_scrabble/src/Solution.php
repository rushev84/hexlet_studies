<?php

namespace App\Solution;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _scrabble(string $chars, string $word): bool
{
    $chars = str_split(mb_strtolower($chars));
    $word = str_split(mb_strtolower($word));

    foreach ($word as $symbol) {
        if (!in_array($symbol, $chars)) {
            return false;
        }
        unset($chars[array_search($symbol, $chars)]);
    }

    return true;
}
// END

dump(scrabble('rkqodlw', 'world')); // true
scrabble('avj', 'java'); // false
scrabble('avjafff', 'java'); // true
scrabble('', 'hexlet'); // false
scrabble('scriptingjava', 'JavaScript'); // true


// Решение учителя. На мой взгляд, оно хуже

function countByChars($str)
{
    $symbols = str_split($str);
    return array_count_values($symbols);
}

function scrabble($str, $word)
{
    $charsStr = countByChars($str);
    $charsWord = countByChars(mb_strtolower($word));
    foreach ($charsWord as $char => $count) {
        if (!array_key_exists($char, $charsStr)) {
            return false;
        }
        if ($charsStr[$char] < $count) {
            return false;
        }
    }
    return true;
}