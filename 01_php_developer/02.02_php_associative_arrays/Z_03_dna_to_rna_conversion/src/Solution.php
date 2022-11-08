<?php

namespace App\Solution;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _toRna(string $dna): string
{
    $replaceRule = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U'
    ];

    $dna = str_split($dna);
    $rna = [];

    foreach ($dna as $key => $value) {
        $rna[] = $replaceRule[$value];
    }

    return implode($rna);
}
// END

dump(toRna('ACGTGGTCTTAA'));
// → 'UGCACCAGAAUU'


// Решение учителя

function toRna($nucleotide)
{
    $map = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];

    $length = strlen($nucleotide);

    $result = [];
    for ($i = 0; $i < $length; $i += 1) {
        $result[] = $map[$nucleotide[$i]];
    }

    return implode('', $result);
}