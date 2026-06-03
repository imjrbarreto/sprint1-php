<?php

require_once "Shape.php";
use oop2\level1\exercise2\Shape;

class Rectangle extends Shape {
  private float $width;
  private float $height;

  public function __construct(string $name, float $width, float $height) {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea(): float {
    return $this->width * $this->height;
  }
}