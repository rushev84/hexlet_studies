<?php

function union($first, ...$rest)
{
    $mapWithUniqKeys = array_unique(array_merge($first, ...$rest));
    return array_values($mapWithUniqKeys);
}

