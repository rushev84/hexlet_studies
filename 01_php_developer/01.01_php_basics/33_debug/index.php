<?php

function isPalindrome(string $word): bool
{
    for ($i = 0; $i < floor(mb_strlen($word) / 2); $i += 1) {
        $symbol1 = mb_substr($word, $i, 1);
        $symbol2 = mb_substr($word, mb_strlen($word) - $i - 1, 1);
        if ($symbol1 !== $symbol2) {
            return false;
        }
    }
    return true;
}

var_dump(isPalindrome('raddaar')); // true
//isPalindrome('maam'); // true
//isPalindrome('a');     // true
//isPalindrome('abs');   // false
//// Функция должна уметь работать с юникодом
//isPalindrome('шалаш'); // true

