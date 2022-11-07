<?php

function average(...$numbers)
{
    return empty($numbers) ? null : (array_sum($numbers) / count($numbers));
}

var_dump(average(1, 2, 4));