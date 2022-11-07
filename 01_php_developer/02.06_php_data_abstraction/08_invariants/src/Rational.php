<?php

namespace App\Rational;

require_once 'Utils.php';

use function App\Utils\gcd;
use function Symfony\Component\Console\Input\getArgumentDefaults;

// BEGIN (write your solution here)
function makeRational(int $numer, int $denom): array
{
    if ($denom < 0) {
        $numer = -$numer;
        $denom = -$denom;
    }
    $gcd = gcd($numer, $denom);
    return [
        'numer' => $numer / $gcd,
        'denom' => $denom / $gcd
    ];
}

function getNumer(array $rat): int
{
    return $rat['numer'];
}

function getDenom(array $rat): int
{
    return $rat['denom'];
}

function add(array $rat1, array $rat2): array
{
    $numer = getNumer($rat1) * getDenom($rat2) + getNumer($rat2) * getDenom($rat1);
    $denom = getDenom($rat1) * getDenom($rat2);
    return makeRational($numer, $denom);
}

function sub(array $rat1, array $rat2): array
{
    $numer = getNumer($rat1) * getDenom($rat2) - getNumer($rat2) * getDenom($rat1);
    $denom = getDenom($rat1) * getDenom($rat2);
    return makeRational($numer, $denom);
}
// END

function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}

$rat5 = makeRational(3, -9);
print_r($rat5);
//$this->assertEquals('-1/3', ratToString($rat5));


// Решение учителя абсолютно идентично!!