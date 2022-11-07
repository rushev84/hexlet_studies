<?php

require_once 'src/Strings.php';

function isPalindrome(string $word): bool
{
    return $word === reverse($word);
}

var_dump(isPalindrome('raddar')); // true

