<?php

class Cat extends Animal
{
    public function __construct($name, $cry="", $weight = 0)
    {
        $cry="meow";
        parent::__construct($name, $cry, $weight);
    }

}