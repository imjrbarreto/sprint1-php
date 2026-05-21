<?php

// Exercise 1

// $minutos = readline("Ingrese la cantidad de minutos de su llamada: ");

// function costoLlamada($minutos) {
//   $total = 10;
//     if ($minutos <= 3) {
//         return $total;
//     } else {
//         $adicional = ($minutos - 3) * 5;
//         $total += $adicional;
//         return $total;
//     }
// }

// $costo = costoLlamada($minutos);
// echo "El costo de su llamada es: $" . $costo;
// echo "\n";


// Exercise 2
$puntuacion1 = readline("Ingrese la primera puntuacion: ");
$puntuacion2 = readline("Ingrese la segunda puntuacion: ");
$puntuacion3 = readline("Ingrese la tercera puntuacion: ");

echo "\n\n";
  
function sum($a, $b, $c) {
    return $a + $b + $c;
}

function average($a, $b, $c) {
    return sum($a, $b, $c) / 3;
}

function clasification($puntuacion) {
  $respuesta = "";
  if ($puntuacion < 4000)
    $respuesta = "Principiante";
  else if ($puntuacion < 8000)
    $respuesta = "Intermedio";
  else
    $respuesta = "Avanzado";
  return $respuesta;
}

$total = sum($puntuacion1, $puntuacion2, $puntuacion3);
$average = average($puntuacion1, $puntuacion2, $puntuacion3);
$nivel1 = clasification($puntuacion1);
$nivel2 = clasification($puntuacion2);
$nivel3 = clasification($puntuacion3);

echo "La suma de las puntuaciones es: " . $total . "\n\n";

echo "El promedio de las puntuaciones es: " . $average . "\n\n";

echo "La clasificación del estudiante 1 es: " . $nivel1 . "\n\n";
echo "La clasificación del estudiante 2 es: " . $nivel2 . "\n\n";
echo "La clasificación del estudiante 3 es: " . $nivel3 . "\n\n";