<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getChildren;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;

//$tree = mkdir('/', [
//    mkdir('etc', [
//        mkfile('bashrc'),
//        mkfile('consul.cfg'),
//    ]),
//    mkfile('hexletrc'),
//    mkdir('bin', [
//        mkfile('ls'),
//        mkfile('cat'),
//    ]),
//]);

function dfs($tree)
{
    // Распечатываем содержимое узла
    echo getName($tree) . "\n";
    // Если это файл, то возвращаем управление
    if (isFile($tree)) {
        return;
    }

    // Получаем детей
    $children = getChildren($tree);

    // Применяем функцию dfs ко всем дочерним элементам
    // Множество рекурсивных вызовов в рамках одного вызова функции
    // называется древовидной рекурсией
    array_map(fn($child) => dfs($child), $children);
}

//dfs($tree);
// => /
// => etc
// => bashrc
// => consul.cfg
// => hexletrc
// => bin
// => ls
// => cat

function changeOwner($tree, $owner)
{
    $name = getName($tree);
    $newMeta = getMeta($tree);
    $newMeta['owner'] = $owner;

    if (isFile($tree)) {
        // Возвращаем обновленный файл
        return mkfile($name, $newMeta);
    }

    $children = getChildren($tree);
    // Ключевая строчка
    // Вызываем рекурсивное обновление каждого ребенка
    $newChildren = array_map(function ($child) use ($owner) {
        return changeOwner($child, $owner);
    }, $children);
    // Создаем директорию
    $newTree = mkdir($name, $newChildren, $newMeta);

    // Возвращаем обновленную директорию
    return $newTree;
}


//dump(changeOwner($tree, 'sergey'));

// ПРАКТИКА

$tree = mkdir('/', [
    mkdir('eTc', [
        mkdir('NgiNx'),
        mkdir('CONSUL', [
            mkfile('config.json'),
        ]),
    ]),
    mkfile('hOsts'),
]);

function downcaseFileNames(array $tree): array
{
    $meta = getMeta($tree);
    $name = getName($tree);

    if (isFile($tree)) {
        return mkfile(strtolower($name), $meta);
    }

    $children = getChildren($tree);
    $newChildren = array_map(function ($child) {
        return downcaseFileNames($child);
    }, $children);

    $newTree = mkdir($name, $newChildren, $meta);
    return $newTree;
}


dump(downcaseFileNames($tree));