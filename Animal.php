<?php

require('Creature.php');
class Animal implements Creature{

    private $name;
    private $cry;



    public function __construct($name,$cry,$weight=0){
        $this->name=$name;
        $this->cry=$cry;
        $this->weight=$weight;
    }

    public function getName() : string{
            return $this->name;

    }
    public function getCry() : string{
            return $this->cry;

    }
    public function getWeight() : string{
            return $this->weight;

    }
    public function setWeight($weight) : void{
        $this->weight=$weight;

    }
    public function setName($name): void{
        $this->name=$name;


    }

    public function __sleep(){
        return ['name','cry'];

    }


    public function greeting(): string
    {
       return "$this->name says $this->cry";
    }


}