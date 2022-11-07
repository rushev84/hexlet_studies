<?php

namespace App;

class Time
{
    private $h;
    private $m;

    // BEGIN (write your solution here)

    public static function fromString(string $str)
    {
        [$h, $m] = explode(':', $str);
        return new User($h, $m);
    }

    // END

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function __toString()
    {
        return "{$this->h}:{$this->m}";
    }
}