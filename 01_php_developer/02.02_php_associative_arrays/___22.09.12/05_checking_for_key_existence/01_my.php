<?php

function countWords($text)
{
    if (strlen($text) === 0) {
        return [];
    }

    $result = [];

    $textArr = explode(' ', $text);

    foreach ($textArr as $word) {
        $word = mb_strtolower($word);
        if (array_key_exists($word, $result)) {
            $result[$word] += 1;
        } else {
            $result[$word] = 1;
        }
    }

    return $result;
}

$text1 = 'one two three two ONE one wow';
print_r(countWords($text1));

