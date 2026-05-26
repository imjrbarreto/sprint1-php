<?php

  class ShapeOne {
    private $name;
    protected $width;
    protected $height;

    public function __construct($name,$width, $height) {
      $this->name = $name;
      $this->width = $width;
      $this->height = $height;
    }

    public function getName() {
      return $this->name;
    }
  }