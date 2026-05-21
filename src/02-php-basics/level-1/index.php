<?php
  // Exercise 1
  $numberInt = 10;
  $numberFloat = 3.14;
  $wordString = "Hello";
  $opcBoolean = true;
  const NAME = "Jaime Romero";

  // echo "Integer: " . $numberInt . "\n";
  // echo "Float: " . $numberFloat . "\n";
  // echo "String: " . $wordString . "\n";
  // echo "Boolean: " . $opcBoolean . "\n";
  // echo "Constant: " . NAME . "\n";

  // Exercise 2
  $greeting = "Hello, world!";
  $description = "Este es el curso de PHP";

  // Exercise 3
  // a)
  $x = 5;
  $y = 10;
  $m = 2.5;
  $n = 3.7;

  // b)
  function operations($a, $b, $operation) {
    $result = match($operation) {
      'suma' => $a + $b,
      'resta' => $a - $b,
      'producto' => $a * $b,
      'modulo' => $b != 0 ? $a % $b : "Error: Division por cero",
      default => 'Operacion no valida'
    };
    return $result;
  }

  // Exercise 4
  function countIncrement($increment, $number = 10) {
    $result = "";
    for ($i = 0; $i <= $number; $i+= $increment) {
      $result .= $i . " ";
    }
    return $result;
  }

  // Exercise 5
  function studentGrade($nota) {
    $nota = (int) $nota;
    $grade = match(true) {
      $nota < 33 => 'reprobado',
      $nota <= 44 => 'tercera division',
      $nota <= 59 => 'segunda division',
      $nota <= 100 => 'primera division',
      default => 'Nota no valida'
    };
    return $grade;
  }

  // Exercise 6
  function isBitten() {
    $probability = rand(1, 100);
    return $probability <= 50 ? "te ha mordido" : "no te ha mordido";
  }
?>

<main>
  <h1> SPRINT 1 - PHP BASICS </h1>

  <h2> Level 1 </h2>

  <h3> Exercise 1 </h3>
  <p>Integer: <?= $numberInt ?></p>
  <p>Float: <?= $numberFloat ?></p>
  <p>String: <?= $wordString ?></p>
  <p>Boolean: <?= $opcBoolean ?></p>
  <p>Constant: <?= NAME ?></p>

  <h3> Exercise 2 </h3>
  <p><?= $greeting ?></p>
  <p><?= strtoupper($greeting) ?></p>
  <p><?= strlen($greeting) ?></p>
  <p><?= strrev($greeting) ?></p>
  <p><?= $greeting . ". " . $description ?></p>

  <h3> Exercise 3 - A</h3>
  <p>X= <?= $x ?> and Y= <?= $y ?></p>
  <p>suma: <?= $x + $y ?></p>
  <p>resta: <?= $x - $y ?></p>
  <p>producto: <?= $x * $y ?></p>
  <p>modulo: <?= $x % $y ?></p>

  <p>M= <?= $m ?> and N= <?= $n ?></p>
  <p>suma: <?= $m + $n ?></p>
  <p>resta: <?= $m - $n ?></p>
  <p>producto: <?= $m * $n ?></p>
  <p>modulo: <?= $m % $n ?></p>

  <p>Doble de cada variable: <?=  $x*2 ?>, <?= $y*2 ?>, <?= $m*2 ?>, <?= $n*2 ?></p>
  <p>Suma total: <?= $x + $y + $m + $n ?></p>
  <p>Producto total: <?= $x * $y * $m * $n ?></p>

  <h3> Exercise 3 - B</h3>
  <p>suma: <?= operations(9, 6, 'suma') ?></p>
  <p>resta: <?= operations(9, 6, 'resta') ?></p>
  <p>producto: <?= operations(9, 6, 'producto') ?></p>
  <p>modulo (error): <?= operations(9, 0, 'modulo') ?></p>
  <p>modulo: <?= operations(9, 6, 'modulo') ?></p>
  <p>otro valor en operador: <?= operations(9, 0, 'otro') ?></p>

  <h3> Exercise 4 </h3>
  <p>Contador:</p>
  <strong><?= countIncrement(2, 20) ?></strong>

  <h3> Exercise 5 </h3>
  <p>Nota 25: <?= studentGrade(25) ?></p>
  <p>Nota 40: <?= studentGrade(40) ?></p>
  <p>Nota 50: <?= studentGrade(50) ?></p>
  <p>Nota 80: <?= studentGrade(80) ?></p>
  <p>Nota 120: <?= studentGrade(120) ?></p>

  <h3> Exercise 6 </h3>
  <p>Charlie <?= isBitten() ?></p>
</main>