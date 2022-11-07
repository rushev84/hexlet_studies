<?php

namespace App;

// BEGIN (write your solution here)

class Rational
{
    public $numer;
    public $denom;

    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer()
    {
        return $this->numer;
    }

    public function getDenom()
    {
        return $this->denom;
    }

    public function add($rational)
    {
        $numer = $rational->getNumer() * $this->getDenom() + $this->getNumer() * $rational->getDenom();
        $denom = $rational->getDenom() * $this->getDenom();
        return new Address($numer, $denom);
    }

    public function sub($rational)
    {
        $numer = $this->getNumer() * $rational->getDenom() - $rational->getNumer() * $this->getDenom();
        $denom = $rational->getDenom() * $this->getDenom();
        return new Address($numer, $denom);
    }
}

$rat1 = new Address(3, 9);
$rat1->getNumer(); // 3
$rat1->getDenom(); // 9

$rat2 = new Address(10, 3);

$rat3 = $rat1->add($rat2); // Абстракция для рационального числа 99/27
$rat3->getNumer(); // 99
$rat3->getDenom(); // 27

$rat4 = $rat1->sub($rat2); // Абстракция для рационального числа -81/27
print_r($rat4->getNumer()); // -81
print_r($rat4->getDenom()); // 27

// END
