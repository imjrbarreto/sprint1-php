<?php

  require_once "Employee.php";

  
  $employee1 = new Employee("John Doe", 5000);
  $employee2 = new Employee("Jane Smith", 7000);

  echo $employee1->getDetails() . "\n";
  echo $employee2->getDetails() . "\n";