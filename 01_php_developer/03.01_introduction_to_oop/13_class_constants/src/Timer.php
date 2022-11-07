<?php

namespace App;

class Timer
{
    // BEGIN (write your solution here)

    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOUR = self::SEC_PER_MIN * 60;

    private $secondsCount;

    public function __construct($sec, $min = 0, $hour = 0)
    {
        $this->secondsCount = $sec + $min * self::SEC_PER_MIN + $hour * self::SEC_PER_HOUR;
    }

    // END

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}
