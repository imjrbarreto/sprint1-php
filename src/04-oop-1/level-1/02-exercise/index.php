<?php

  require_once "RectangleOne.php";
  require_once "TriangleOne.php";

  $rectangle = new RectangleOne("Rectangle One", 5, 10);
  $triangle = new TriangleOne("Triangle One", 5, 10);

  echo $rectangle->getName() . "  => area: " . $rectangle->getArea() . "\n";
  echo $triangle->getName() . "  => area: " . $triangle->getArea() . "\n";