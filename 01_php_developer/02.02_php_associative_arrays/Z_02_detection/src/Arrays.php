<?php

namespace App\Arrays;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _findWhere(array $books, array $toFind)
{
    $count = 0;

    foreach ($books as $book) {
        foreach ($book as $key => $value) {
            if (array_key_exists($key, $toFind) && $toFind[$key] === $value) {
                $count++;
            }
        }
        if ($count === count($toFind)) {
            return $book;
        } else {
            $count = 0;
        }
    }

    return null;
}

// END


dump(findWhere(
    [
        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
    ],
    ['author' => 'Shakespeare', 'year' => 1611]
)); // ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611]


// Решение учителя
// Да, оно лучше. Итак, сначала происходит итерация по элементам $data. По умолчанию считаем, что текущий элемент - тот, что нужен, т.е. сразу ставим $find = true. Далее итерируем по ключам $where и смотрим значение элемента из $item, полученного по ключу из $where, со значением конкретного элемента $where (т.е. $value). Если совпадения нет, то выставляем флаг $find = false. Затем идёт переход на новую итерацию верхнего цикла. Если же $find остался равен true, то возвращаем текущий $item.

function findWhere($data, $where)
{
    foreach ($data as $item) {
        $find = true;
        foreach ($where as $key => $value) {
            if ($item[$key] !== $value) {
                $find = false;
            }
        }
        if ($find) {
            return $item;
        }
    }
}