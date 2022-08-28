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

    public function getName(){
            return $this->name;

    }
    public function getCry(){
            return $this->cry;

    }
    public function getWeight(){
            return $this->weight;

    }
    public function setWeight($weight){
        $this->weight=$weight;

    }
    public function setName($name){
        $this->name=$name;


    }

    public function greeting(): string
    {
       return "$this->name says $this->cry";
    }


}