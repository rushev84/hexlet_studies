<?php

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    $i = $firstNumber;
    while ($i > 0) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('finished!');
    // END
}

printNumbers(12);