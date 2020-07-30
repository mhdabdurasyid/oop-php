<?php

class Frog extends Animal
{
    protected function set_legs()
    {
        $this->legs = 4;
    }

    public function get_legs()
    {
        $this->set_legs();
        return $this->legs;
    }

    public function jump(){
        return "hop hop";
    }
}
