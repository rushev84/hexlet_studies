<?php

function _invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';
    for ($i = 0; $i <= mb_strlen($text); $i += 1) {
        $currentChar = mb_substr($text, $i, 1);
        if (mb_strtoupper($currentChar) === $currentChar) {
            $currentChar = mb_strtolower($currentChar);
        } else {
            $currentChar = mb_strtoupper($currentChar);
        }
        $result = $result . $currentChar;
    }
    return $result;
    // END
}

var_dump(invertCase('ПрИвЕт!'));

// Решение учителя

function invertCase($text)
{
    // BEGIN
    $len = mb_strlen($text);
    $result = '';
    for ($i = 0; $i < $len; $i++) {
        $symbol = mb_substr($text, $i, 1);
        $lowerSymbol = mb_strtolower($symbol);
        if ($symbol === $lowerSymbol) {
            $result .= mb_strtoupper($symbol);
        } else {
            $result .= $lowerSymbol;
        }
    }

    return $result;
    // END
}

// Почти то же самое