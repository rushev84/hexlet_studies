<?php

namespace App\Solution;

// BEGIN (write your solution here)
require_once 'Symbols.php';

use function App\Symbols\isVowel;

function countVowels(string $text): int
{
    $count = 0;
    foreach (str_split($text) as $symbol) {
        if(isVowel(strtolower($symbol))) {
            $count += 1;
        }
    }
    return $count;
}

// END

//var_dump(countVowels('One')); // 2
var_dump(countVowels('London is the capital of Great Britain')); // 13
