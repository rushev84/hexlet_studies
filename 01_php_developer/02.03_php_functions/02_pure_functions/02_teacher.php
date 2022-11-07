<?php

// BEGIN
function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function sayPrimeOrNot(int $num): void
{
    $text = isPrime($num) ? 'yes' : 'no';
    print_r($text);
}