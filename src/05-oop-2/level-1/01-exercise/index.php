<?php

require_once "Dog.php";
require_once "Cat.php";
require_once "Cow.php";

$dog = new Dog("Willo");
echo $dog->getName() . " is a dog and says: " . $dog->makeSound() . "\n";

$cat = new Cat("Perla");
echo $cat->getName() . " is a cat and says: " . $cat->makeSound() . "\n";

$cow = new Cow("Lola");
echo $cow->getName() . " is a cow and says: " . $cow->makeSound() . "\n";