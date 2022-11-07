<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\reduce;
use function Php\Immutable\Fs\Trees\trees\isDirectory;
use function Php\Immutable\Fs\Trees\trees\getChildren;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;

//$tree = mkdir('/', [
//    mkdir('etc', [
//        mkdir('apache'),
//        mkdir('nginx', [
//            mkfile('nginx.conf'),
//        ]),
//    ]),
//    mkdir('consul', [
//        mkfile('config.json'),
//        mkfile('file.tmp'),
//        mkdir('data'),
//    ]),
//    mkfile('hosts'),
//    mkfile('resolve'),
//]);

function getFilesCount($tree)
{
    if (isFile($tree)) {
        return 1;
    }

    $children = getChildren($tree);
    $descendantsCount = array_map(fn($child) => getFilesCount($child), $children);
    return array_sum($descendantsCount);
}

function getSubdirectoriesInfo($tree)
{
    $children = getChildren($tree);
    // Нас интересуют только директории
    $filtered = array_filter($children, fn($child) => isDirectory($child));
    // Запускаем подсчет для каждой директории
    // При таком подходе некоторые узлы будут обходиться много раз
    $result = array_map(fn($child) => [getName($child), getFilesCount($child)], $filtered);

    return $result;
}

//print_r(getSubdirectoriesInfo($tree));

// ПРАКТИКА


$tree = mkdir('/', [
    mkdir('etc', [
        mkdir('apache'),
        mkdir('nginx', [
            mkfile('nginx.conf', ['size' => 800]),
        ]),
        mkdir('consul', [
            mkfile('config.json', ['size' => 1200]),
            mkfile('data', ['size' => 8200]),
            mkfile('raft', ['size' => 80]),
        ]),
    ]),
    mkfile('hosts', ['size' => 3500]),
    mkfile('resolve', ['size' => 1000]),
]);


function getFilesSize(array $node): int
{
    if (isFile($node)) {
        return getMeta($node)['size'];
    }

    $children = getChildren($node);
    $size = array_map(fn($child) => getFilesSize($child), $children);
    return array_sum($size);
}

function _du(array $tree): array
{
    $result = array_map(function ($child) {
        $name = getName($child);
        if (isFile($child)) {
            return [$name, getMeta($child)['size']];
        }

        return [$name, getFilesSize($child)];
    }, getChildren($tree));

    usort($result, function ($a, $b) {
        if ($a[1] === $b[1]) {
            return 0;
        }
        return ($a[1] > $b[1]) ? -1 : 1;
    });

    return $result;
}

dump(du(getChildren($tree)[0]));


// Решение учителя

function calculateFilesSize($node)
{
    return reduce(function ($acc, $n) {
        if (isDirectory($n)) {
            return $acc;
        }

        $meta = getMeta($n);

        return $acc + $meta['size'];
    }, $node, 0);
}

function du($node)
{
    $result = array_map(fn($node) => [
        getName($node), calculateFilesSize($node)
    ], getChildren($node));

    usort($result, fn($arr1, $arr2) => $arr2[1] <=> $arr1[1]);

    return $result;
}

// 1. Более короткое написание usort()
// 2. Вцелом всё более лаконично - видимо, за счёт использования reduce() и немного другой логики
