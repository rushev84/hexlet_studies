<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\User;

$timer1 = new User(10);
//print_r($timer1->getLeftSeconds()); // 10
$timer1->tick();
//print_r($timer1->getLeftSeconds()); // 9

$timer2 = new User(8, 20, 8);
print_r($timer2->getLeftSeconds()); // 30008
