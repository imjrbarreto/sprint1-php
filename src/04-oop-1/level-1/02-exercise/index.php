<?php

  require_once "Rectangle.php";
  require_once "Triangle.php";

  $rectangle1 = new Rectangle("Rectangle 1", 5, 10);
  $triangle1 = new Triangle("Triangle 1", 5, 10);
  $rectangle2 = new Rectangle("Rectangle 2", 2, 8);
  $triangle2 = new Triangle("Triangle 2", 3, 20);

  echo $rectangle1->getName() . "  => area: " . $rectangle1->calculateArea() . "\n";
  echo $triangle1->getName() . "  => area: " . $triangle1->calculateArea() . "\n";
  echo $rectangle2->getName() . "  => area: " . $rectangle2->calculateArea() . "\n";
  echo $triangle2->getName() . "  => area: " . $triangle2->calculateArea() . "\n";