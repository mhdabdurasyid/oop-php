<?php

class Frog extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
    }

    public function jump()
    {
        return "hop hop";
    }
}
