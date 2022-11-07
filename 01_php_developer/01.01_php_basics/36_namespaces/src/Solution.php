<?php

namespace Solution;

use function Strings\reverse;

//require_once "Strings.php";
// BEGIN (write your solution here)
function isPalindrome(string $word): bool
{
    return $word === reverse($word);
}
// END

var_dump(isPalindrome('raddadr')); // true