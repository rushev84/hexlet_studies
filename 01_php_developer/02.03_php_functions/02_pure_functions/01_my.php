<?php

function isPrime(int $num)
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

function sayPrimeOrNot(int $num)
{
    if (isPrime($num))
    {
        echo 'yes';
    } else {
        echo 'no';
    }
}

sayPrimeOrNot(-3);