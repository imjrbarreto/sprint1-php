<?php

  require_once "ShapeOne.php";

  class RectangleOne extends ShapeOne {
    public function getArea() {
      return $this->width * $this->height;
    }
  }