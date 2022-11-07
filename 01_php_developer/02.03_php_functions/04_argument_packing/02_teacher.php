<?php

function average(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }

    return (array_sum($numbers)) / (count($numbers));
}