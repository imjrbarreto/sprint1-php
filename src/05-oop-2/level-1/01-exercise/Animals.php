<?php

abstract class Animal {
  private string $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  abstract public function makeSound(): string;

  public function getName(): string {
    return $this->name;
  }
}