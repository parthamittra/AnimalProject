<?php

class Dog extends Animal
{
    public function __construct($name, $cry="", $weight = 0)
    {
        $cry="Bark Bark Bark!";
        parent::__construct($name, $cry, $weight);
    }

}