<?php

namespace App\Strings;

// BEGIN (write your solution here)
function _countUniqChars(string $text): int
{
    if ($text === '') {
        return 0;
    }
    $text = str_split($text);
    $uniqueChars = [];
    foreach ($text as $symbol){
        if (!in_array($symbol, $uniqueChars)) {
            $uniqueChars[] = $symbol;
        }
    }
    return count($uniqueChars);
}
// END


//$text1 = 'yyab';
//print_r(countUniqChars($text1)); // 3

$text2 = 'You know nothing Jon Snow';
print_r(countUniqChars($text2)); // 13
//
//$text3 = '';
//countUniqChars($text3); // 0

// Решение учителя
// В моём решении проверка на пустую строку лишняя.
// Вцелом алгоритм похож

function countUniqChars($text)
{
    $uniqChars = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (!in_array($text[$i], $uniqChars)) {
            $uniqChars[] = $text[$i];
        }
    }
    return count($uniqChars);
}