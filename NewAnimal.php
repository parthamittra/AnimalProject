<?php

class NewAnimal extends Animal
{
    private $cry;

    public function __construct($name, $cry, $weight = 0)
    {
         $this->cry=$cry;
        parent::__construct($name, $cry, $weight);
    }

    
}