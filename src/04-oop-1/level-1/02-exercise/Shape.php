<?php

  namespace oop1\level1\exercise2;

  class Shape {
    private string $name;
    protected float $width;
    protected float $height;

    public function __construct(string $name, float $width, float $height) {
      $this->name = $name;
      $this->width = $width;
      $this->height = $height;
    }

    public function getName() {
      return $this->name;
    }
  }