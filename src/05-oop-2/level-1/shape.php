<?php

abstract class Shape {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }

  abstract public function area(): float;
}

class Rectangle extends Shape {
  public $width;
  public $height;

  public function __construct($name, $width, $height) {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function area(): float {
    return $this->width * $this->height;
  }
}

class Triangle extends Shape {
  public $base;
  public $height;

  public function __construct($name, $base, $height) {
    parent::__construct($name);
    $this->base = $base;
    $this->height = $height;
  }

  public function area(): float {
    return 0.5 * $this->base * $this->height;
  }
}

$rectangle = new Rectangle("Rectangle 1", 5, 10);
$triangle = new Triangle("Triangle 1", 3, 8);

echo $rectangle->name . " area: " . $rectangle->area() . "\n";
echo $triangle->name . " area: " . $triangle->area() . "\n";

