<?php

require_once "Animals.php";

class Dog extends Animal {
  public function makeSound(): string {
    return "Woof!";
  }
}