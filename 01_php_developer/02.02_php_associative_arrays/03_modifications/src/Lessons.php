<?php

namespace App\Lessons;

// BEGIN (write your solution here)
function _normalize(array &$lesson): void
{
    $lesson['name'] = mb_convert_case(mb_strtolower($lesson['name']), MB_CASE_TITLE, "UTF-8");
    $lesson['description'] = mb_strtolower($lesson['description']);
}
// END

$lesson = [
    'name' => 'ДеструКТУРИЗАЦИЯ',
    'description' => 'каК удивитЬ друзей',
];

// Обратите внимание, что не используется возврат.
// Изменение переданного массива внутри отражается
// на самом ассоциативном массиве:
normalize($lesson);

print_r($lesson);
// => [
// =>     'name' => 'Деструктуризация',
// =>     'description' => 'как удивить друзей'
// => ]

// Решение учителя
// mb_strtolower для $lesson['name'] - лишний

function normalize(array &$lesson): void
{
    $lesson['name'] = mb_convert_case($lesson['name'], MB_CASE_TITLE, 'UTF-8');
    $lesson['description'] = mb_strtolower($lesson['description']);
}