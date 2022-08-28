

<?php

    require('Animal.php');
    require('Cat.php');
    require('Dog.php');
    require('Cow.php');



    switch($argv[2]){
        case 'cat':
            $cat=new Cat($argv[1]);
            print($cat->greeting());
            break;
        case 'dog':
            $dog=new Dog($argv[1]);
            print($dog->greeting());
            break;
        case 'cow':
            $cow=new Cow($argv[1]);
            print($cow->greeting());
            break;
        default:
            print(ucfirst($argv[2])."s  are not real");
    }
print("\n");



