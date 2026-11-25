<?php

$products = [
    ['title' => 'Книга', 'price' => 500],
    ['title' => 'Рюкзак', 'price' => 2500],
    ['title' => 'Кружка', 'price' => 350],
    ['title' => 'Наушники', 'price' => 4200],
    ['title' => 'Блокнот', 'price' => 150],
];

$lines = array_map(fn($p) => $p['title'] . ' — ' . $p['price'] . ' руб.', $products);
echo implode(PHP_EOL, $lines) . PHP_EOL;

$expensive = array_filter($products, fn($p) => $p['price'] > 1000);
echo 'Дороже 1000 руб.: ' . implode(', ', array_map(fn($p) => $p['title'], $expensive)) . PHP_EOL;

$total = array_reduce($products, fn($sum, $p) => $sum + $p['price'], 0);
echo 'Общая стоимость: ' . $total . ' руб.' . PHP_EOL;

$discounted = array_map(fn($p) => ['title' => $p['title'], 'price' => round($p['price'] * 0.85, 2)], $products);
print_r($discounted);
