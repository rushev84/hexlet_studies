<?php

namespace App\Symbols;

function isVowel($char)
{
    $vowels = 'aeiouy';

    return str_contains($vowels, strtolower($char));
}