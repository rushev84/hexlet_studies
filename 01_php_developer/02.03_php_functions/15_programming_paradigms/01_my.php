<?php

require_once __DIR__ . '/vendor/autoload.php';

use Funct\Collection;

// Реализуйте функцию enlargeArrayImage, которая принимает изображение в виде двумерного массива и увеличивает его в два раза.

function enlargeArrayImage(array $image)
{
    $imageStretchedLine = array_map(function ($item) {
        $stretchedLine = array_map(function ($innerItem) {
            return [$innerItem, $innerItem];
        }, $item);
        return Collection\flatten($stretchedLine);
    }, $image);

    $imageDoubledLine = array_map(function ($line) {
        return [$line, $line];
    }, $imageStretchedLine);

    return Collection\flatten($imageDoubledLine);
}

$image = [
    ['*', '*', '*', '*'],
    ['*', ' ', ' ', '*'],
    ['*', ' ', ' ', '*'],
    ['*', '*', '*', '*']
];
// ****
// *  *
// *  *
// ****

print_r(enlargeArrayImage($image));
// ********
// ********
// **    **
// **    **
// **    **
// **    **
// ********
// ********


$image_str_double = [
    ['*', '*', '*', '*', '*', '*', '*', '*'],
    ['*', '*', ' ', ' ', ' ', ' ', '* ', '*'],
    ['*', '*', ' ', ' ', ' ', ' ', '* ', '*'],
    ['*', '*', '*', '*', '*', '*', '*', '*'],
];

//print_r(Collection\flatten([[1, 2], [3, 4]]));