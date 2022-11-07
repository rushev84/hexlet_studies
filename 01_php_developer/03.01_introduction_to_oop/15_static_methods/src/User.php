<?php

namespace App;

// BEGIN (write your solution here)
use App\ComparableInterface;

class User implements ComparableInterface
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function compareTo($user)
    {
        return $this->getId() === $user->getId();
    }
}
// END