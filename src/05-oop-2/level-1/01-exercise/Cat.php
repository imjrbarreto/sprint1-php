<?php 

require_once "Animals.php";

class Cat extends Animal {
  public function makeSound(): string {
    return "Meow!";
  }
}