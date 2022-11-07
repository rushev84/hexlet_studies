src/Domains.php
Реализуйте функцию getDomainInfo(), которая принимает на вход имя сайта и возвращает информацию о нем:

<?php

use function App\Domains\getDomainInfo;

// Если домен передан без указания протокола,
// то по умолчанию берется http
getDomainInfo('yandex.ru');
// [
//     'scheme' => 'http',
//     'name' => 'yandex.ru'
// ]

getDomainInfo('https://hexlet.io');
// [
//     'scheme' => 'https',
//     'name' => 'hexlet.io'
// ]

getDomainInfo('http://google.com');
// [
//     'scheme' => 'http',
//     'name' => 'google.com'
// ]
?>

Подсказки
substr()
str_replace()