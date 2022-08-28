<?php

interface Creature{



   public function getName();
   public function getCry();
   public function getWeight();
   public function setWeight($weight);
   public function setName($name);
   public function greeting();

}