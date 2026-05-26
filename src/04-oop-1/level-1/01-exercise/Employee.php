<?php

  class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
      $this->name = $name;
      $this->salary = $salary;
    }

    public function getDetails() {
      if ($this->salary > 6000) {
        return "Name: " . $this->name . ", Salary: " . $this->salary . ". Pay taxes";
      } else {
        return "Name: " . $this->name . ", Salary: " . $this->salary;
      }
    }
  }