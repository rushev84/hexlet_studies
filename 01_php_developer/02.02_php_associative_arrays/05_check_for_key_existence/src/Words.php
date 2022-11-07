<?php

namespace App\Words;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _countWords(string $text): array
{
    if (empty($text)) {
        return [];
    }

    $text = explode(' ', mb_strtolower($text));
    $result = [];

    foreach ($text as $word) {
        $result[$word] = ($result[$word] ?? 0) + 1;
    }

    return $result;
}
// END


// Если предложение пустое, то возвращается пустой объект
dump(countWords(''));
// []

//$text1 = 'one two three two ONE one wow';
//dump(countWords($text1));
// [
//     'one' => 3,
//     'two' => 2,
//     'three' => 1,
//     'wow' => 1
// ]

$text2 = 'another one sentence with strange Words words';
//dump(countWords($text2));
// [
//     'another' => 1,
//     'one' =>  1,
//     'sentence' => 1,
//     'with' => 1,
//     'strange' => 1,
//     'words' => 2
// ]


// Решение учителя. Аналогично

function countWords(string $sentence): array
{
    if ($sentence === '') {
        return [];
    }
    $lowerSentence = mb_strtolower($sentence);
    $words = explode(' ', $lowerSentence);
    $result = [];
    foreach ($words as $word) {
        $result[$word] = ($result[$word] ?? 0) + 1;
    }

    return $result;
}