<?php

$last = function ($text) {
    if ($text === '') {
        return null;
    }
    return $text[strlen($text) - 1];
};