<?php

  include_once "Shape.php";
  use oop1\level1\exercise2\Shape;

  class Rectangle extends Shape {
    public function calculateArea() {
      return $this->width * $this->height;
    }
  }