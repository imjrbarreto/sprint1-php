<?php

require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Circle.php";

$rectangle = new Rectangle("Rectangle 1", 5, 10);
$triangle = new Triangle("Triangle 1", 3, 8);
$cicle = new Circle("Circle 1", 4);

echo $rectangle->getName() . " area: " . $rectangle->calculateArea() . "\n";
echo $triangle->getName() . " area: " . $triangle->calculateArea() . "\n";
echo $cicle->getName() . " area: " . $cicle->calculateArea() . "\n";