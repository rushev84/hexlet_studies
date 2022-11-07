<?php

function union($first, ...$rest)
{
    return array_values(array_unique(array_merge($first, ...$rest)));
}

