<?php

abstract class Animal {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  abstract public function makeSound();
}

class Dog extends Animal {
  public function makeSound() {
    return "Woof!";
  }
}

class Cat extends Animal {
  public function makeSound() {
    return "Meow!";
  }
}

class Cow extends Animal {
  public function makeSound() {
    return "Moo!";
  }
}

$dog = new Dog("Willo");
echo $dog->name . " is a dog and says: " . $dog->makeSound() . "\n";

$cat = new Cat("Perla");
echo $cat->name . " is a cat and says: " . $cat->makeSound() . "\n";

$cow = new Cow("Lola");
echo $cow->name . " is a cow and says: " . $cow->makeSound() . "\n";