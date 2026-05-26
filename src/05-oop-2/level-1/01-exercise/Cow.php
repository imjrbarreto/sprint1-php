<?php

require_once "Animals.php";

class Cow extends Animal {
  public function makeSound(): string {
    return "Moo!";
  }
}