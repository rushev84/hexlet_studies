<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\User;

$time = new User(10, 15);
//echo $time; // => 10:15

$time = User::fromString('10:23');
print_r($time);

