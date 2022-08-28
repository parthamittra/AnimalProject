

<?php

    require('Animal.php');
    require('Cat.php');
    require('Dog.php');
    require('Cow.php');
    require('NewAnimal.php');

for($i=1;$i<count($argv);$i += 2) {

    switch ($argv[$i + 1]) {
        case 'cat':
            $cat = new Cat($argv[$i]);
            print($cat->greeting());
            break;
        case 'dog':
            $dog = new Dog($argv[$i]);
            print($dog->greeting());
            break;
        case 'cow':
            $cow = new Cow($argv[$i]);
            print($cow->greeting());
            break;
        default:
            $newAnimal = new NewAnimal($argv[$i]);
            print($newAnimal->greeting());
    }
    print("\n");
}



