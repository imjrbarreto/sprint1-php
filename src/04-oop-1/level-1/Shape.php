<?php

  class Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
    }
  }

  class Rectangle extends Shape {
    public function getArea() {
      return $this->width * $this->height;
    }
  }

  class Triangle extends Shape {
    public function getArea() {
      return 0.5 * $this->width * $this->height;
    }
  }

  $rectangle = new Rectangle(5, 10);
  $triangle = new Triangle(5, 10);

  echo "Rectangle area: " . $rectangle->getArea() . "\n";
  echo "Triangle area: " . $triangle->getArea() . "\n";