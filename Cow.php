<?php

class Cow extends Animal
{
    public function __construct($name, $cry="", $weight = 0)
    {
        $cry='moo';
        parent::__construct($name, $cry, $weight);
    }

}