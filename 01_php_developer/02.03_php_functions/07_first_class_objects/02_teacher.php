<?php

$last = function (string $text) {
    if ($text === '') {
        return null;
    }
    return $text[strlen($text) - 1];
};