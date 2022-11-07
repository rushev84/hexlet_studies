<?php

function slugify($text)
{
    $prepared = Strings\toLower($text);
    $parts = explode(' ', $prepared);
    $parts = Collection\compact($parts);
    return implode('-', $parts);
}
