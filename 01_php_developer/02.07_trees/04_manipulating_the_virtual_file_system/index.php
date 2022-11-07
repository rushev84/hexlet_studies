<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getChildren;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;

// BEGIN (write your solution here)
function compressImages(array $tree): array
{
    $children = getChildren($tree);
    $newChildren = array_map(function ($child) {
        if (isFile($child)) {
            $extension = substr(getName($child), -4, 4);
            if ($extension === '.jpg') {
                return mkfile(getName($child), ['size' => getMeta($child)['size'] / 2]);
            } else {
                return mkfile(getName($child), getMeta($child));
            }
        }
        return mkdir(getName($child), getChildren($child), getMeta($child));
    }, $children);

    $newTree = mkdir(getName($tree), $newChildren, getMeta($tree));
    return $newTree;
}

// END


$tree = mkdir(
    'my documents', [
        mkfile('avatar.jpg', ['size' => 100]),
        mkfile('passport.jpg', ['size' => 200]),
        mkfile('family.jpg', ['size' => 150]),
        mkfile('addresses', ['size' => 125]),
        mkdir('presentations')
    ]
);

//dump(compressImages($tree));


