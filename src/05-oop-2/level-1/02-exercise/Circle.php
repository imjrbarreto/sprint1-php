<?php

require_once "Shape.php";

class Circle extends Shape {
  private float $radius;

  public function __construct(string $name, float $radius) {
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea(): float {
    $area = pi() * pow($this->radius, 2);
    return round($area, 3);
  }
}