<?php

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