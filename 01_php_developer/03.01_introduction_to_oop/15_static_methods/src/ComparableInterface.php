<?php

namespace App;

// BEGIN (write your solution here)
interface ComparableInterface
{
    public function __construct($id, $name);
    public function compareTo($obj);
}
// END
