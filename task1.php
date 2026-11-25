<?php

$square = fn($x) => $x ** 2;
$isEven = fn($x) => $x % 2 === 0;
$greet = fn($name) => "Привет, $name!";
$max = fn($a, $b) => $a > $b ? $a : $b;

// $square = function ($x) { return $x ** 2; };
// Стрелочная запись короче: не нужны фигурные скобки и return.

echo $square(3) . PHP_EOL;
echo $square(5) . PHP_EOL;
echo ($isEven(4) ? 'true' : 'false') . PHP_EOL;
echo ($isEven(7) ? 'true' : 'false') . PHP_EOL;
echo $greet('Иван') . PHP_EOL;
echo $greet('Анна') . PHP_EOL;
echo $max(5, 8) . PHP_EOL;
echo $max(12, 3) . PHP_EOL;
