<?php

class Animal
{
    protected $legs = 2;
    protected $cold_blooded = false;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function get_cold_blooded()
    {
        return $this->cold_blooded;
    }
}
