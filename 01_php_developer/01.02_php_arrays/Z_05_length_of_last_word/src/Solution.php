<?php

function lengthOfLastWord(string $text)
{
    $arr = explode(' ', trim($text));
    return strlen($arr[count($arr) - 1]);
}

var_dump(lengthOfLastWord('')); // 0

//var_dump(lengthOfLastWord('man in BlacK')); // 5

//var_dump(lengthOfLastWord('hello, world!  ')); // 6
