<?php

require_once "Shape.php";
use oop2\level1\exercise2\Shape;

class Triangle extends Shape {
  private float $base;
  private float $height;

  public function __construct(string $name, float $base, float $height) {
    parent::__construct($name);
    $this->base = $base;
    $this->height = $height;
  }

  public function calculateArea(): float {
    return 0.5 * $this->base * $this->height;
  }
}