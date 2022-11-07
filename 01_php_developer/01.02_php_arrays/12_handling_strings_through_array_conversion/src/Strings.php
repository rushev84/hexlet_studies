<?php

namespace App\Strings;

// BEGIN (write your solution here)
function _makeCensored(string $sentence, array $stopWords): string
{
    $result = [];
    $sentenceArr = explode(' ', $sentence);
    foreach ($sentenceArr as $word) {
        $wordToAdd = in_array($word, $stopWords) ? '$#%!' : $word;
        $result[] = $wordToAdd;
    }
    return implode(' ', $result);
}
// END

$sentence = 'When you play the game of thrones, you win or you die';
//print_r(makeCensored($sentence, ['die', 'play']));
// => When you $#%! the game of thrones, you win or you $#%!

$sentence2 = 'chicken chicken? chicken! chicken';
print_r(makeCensored($sentence2, ['?', 'chicken']));
// => '$#%! chicken? chicken! $#%!';


// Решение учителя
// Массив из слов лучше называть просто $words. Переменная $wordToAdd вообще не нужна, можно сразу добавлять в новый массив

function makeCensored(string $text, array $stopWords)
{
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }

    return implode(' ', $result);
}