<?php

// Exercise 1
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $number) {
  echo $number . "\n";
}


// Exercise 2
$ages = [25, 15, 40, 18, 30, 12];

$count = count($ages);
echo "Initial elements: $count";

echo "\n";

array_splice($ages, 2, 1);
$count = count($ages);
echo "Number of elements after removal: $count \n";

foreach ($ages as $key => $age) {
  echo "Index: $key, Value: $age\n";
}


// Exercise 3
$words = ["hola", "Php", "Html"];

function charExists($words, $character) {
  foreach ($words as $word) {
    $result = stripos($word, $character);
    if ($result === false) {
      return "false";
      break;
    }
  }
  return "true";
}
echo charExists($words, "h") . "\n";
echo charExists($words, "l") . "\n";

// Exercise 4
$personalInfo = [
  "name" => "Jaime",
  "age" => 30,
  "email" => "jaime@example.com",
  "food-favorite" => "Pizza"
];

foreach ($personalInfo as $key => $value) {
  echo "$key: $value \n";
}