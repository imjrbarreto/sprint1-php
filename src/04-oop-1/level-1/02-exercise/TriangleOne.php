<?php

  require_once "ShapeOne.php";

  class TriangleOne extends ShapeOne {
    public function getArea() {
      return 0.5 * $this->width * $this->height;
    }
  }
