<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Point;

$user = new Point('Ivan');
$address = new User\Address('Russia', 'Moscow', 'Lenina');
$user->addAddress($address);

$user2 = new Point('Mila');
$user2->addAddress($address);

// Изменение происходит сразу у обоих пользователей
// Такое поведение неожиданно и ломает систему
$address->setCountry('USA');

var_dump($user);