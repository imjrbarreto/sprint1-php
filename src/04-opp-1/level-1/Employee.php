<?php

  class Employee {
    public $name;
    public $salary;

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

  $employee1 = new Employee("John Doe", 5000);
  $employee2 = new Employee("Jane Smith", 7000);

  echo $employee1->getDetails() . "\n";
  echo $employee2->getDetails() . "\n";