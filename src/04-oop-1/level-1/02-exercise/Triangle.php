<?php

  include_once "Shape.php";
  use oop1\level1\exercise2\Shape;

  class Triangle extends Shape {
    public function calculateArea() {
      return 0.5 * $this->width * $this->height;
    }
  }
