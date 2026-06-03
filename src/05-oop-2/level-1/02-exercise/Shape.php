<?php

namespace oop2\level1\exercise2;

abstract class Shape {
  private string $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  abstract public function calculateArea(): float;

  public function getName(): string {
    return $this->name;
  }
}
