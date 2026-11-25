<?php

$discount = 0.9;
$applyDiscount = fn($price) => $price * $discount;

echo $applyDiscount(100) . PHP_EOL;
echo $applyDiscount(250) . PHP_EOL;
echo $applyDiscount(500) . PHP_EOL;

$discount = 0.5;
echo $applyDiscount(100) . PHP_EOL;
// fn захватывает значение переменной при создании, поэтому скидка осталась 10%.

$rate = 90;
$toRubles = fn($price) => $price * $rate * $discount;
echo $toRubles(10) . ' руб.' . PHP_EOL;
