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

// В реализации используем рекурсивный процесс,
// чтобы добраться до самого дна дерева.
function getNodesCount($tree)
{
    if (isFile($tree)) {
        // Возвращаем 1, для учета текущего файла
        return 1;
    }

    // Если узел — директория, получаем его детей
    $children = getChildren($tree);
    // Самая сложная часть
    // Считаем количество потомков для каждого из детей,
    // вызывая рекурсивно нашу функцию getNodesCount
    $descendantsCount = array_map(fn($child) => getNodesCount($child), $children);
//    dump($descendantsCount);
    // Возвращаем 1 (текущая директория) + общее количество потомков
    return 1 + array_sum($descendantsCount);
}

dump(getNodesCount($tree)); // 8


// ПРАКТИКА

$tree = mkdir('/', [
    mkdir('etc', [
        mkdir('apache', []),
        mkdir('nginx', [
            mkfile('.nginx.conf', ['size' => 800]),
        ]),
        mkdir('.consul', [
            mkfile('.config.json', ['size' => 1200]),
            mkfile('data', ['size' => 8200]),
            mkfile('raft', ['size' => 80]),
        ]),
    ]),
    mkfile('.hosts', ['size' => 3500]),
    mkfile('resolve', ['size' => 1000]),
]);

function getHiddenFilesCount($tree)
{
    if (isFile($tree)) {
        return str_starts_with(getName($tree), '.') ? 1 : 0;
    }

    $children = getChildren($tree);

    $count = array_map(fn($child) => getHiddenFilesCount($child), $children);
    return array_sum($count);
}

dump(getHiddenFilesCount($tree));