<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _getComposerFileData(): array
{
    $assoc = [
        'autoload' => [
            'files' => ["src/Arrays.php"]
        ],
        'config' => [
            'vendor-dir' => "/composer/vendor"
        ]
    ];

    return $assoc;
}
// END


// Решение учителя
// Значения ключей в одинарных кавычках - не знаю, это обязательно или нет

function getComposerFileData()
{
    return [
        'autoload' => [
            'files' => [
                'src/Arrays.php'
            ]
        ],
        'config' => [
            'vendor-dir' => '/composer/vendor'
        ]
    ];
}