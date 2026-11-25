<?php

$orders = [
    ['id' => 1, 'customer' => 'Иван', 'total' => 1200, 'status' => 'done'],
    ['id' => 2, 'customer' => 'Мария', 'total' => 800, 'status' => 'new'],
    ['id' => 3, 'customer' => 'Пётр', 'total' => 3500, 'status' => 'done'],
    ['id' => 4, 'customer' => 'Анна', 'total' => 600, 'status' => 'cancelled'],
    ['id' => 5, 'customer' => 'Олег', 'total' => 2100, 'status' => 'done'],
];

$done = array_filter($orders, fn($o) => $o['status'] === 'done');
$revenue = array_reduce($done, fn($sum, $o) => $sum + $o['total'], 0);
echo 'Выручка: ' . $revenue . ' руб.' . PHP_EOL;

$format = fn($o) => 'Заказ №' . $o['id'] . ' — ' . $o['total'] . ' руб. (' . $o['customer'] . ')';
$expensive = array_filter($orders, fn($o) => $o['total'] > 1000);
echo 'Заказы свыше 1000 руб.:' . PHP_EOL;
echo implode(PHP_EOL, array_map($format, $expensive)) . PHP_EOL;

$sorted = $done;
usort($sorted, fn($a, $b) => $b['total'] <=> $a['total']);
echo 'Самый дорогой выполненный заказ: ' . $format($sorted[0]) . PHP_EOL;

$customers = array_values(array_unique(array_map(fn($o) => $o['customer'], $orders)));
echo 'Клиенты:' . PHP_EOL;
print_r($customers);

$cancelled = array_filter($orders, fn($o) => $o['status'] === 'cancelled');
echo 'Всего заказов: ' . count($orders) . PHP_EOL;
echo 'Выполнено: ' . count($done) . PHP_EOL;
echo 'Отменено: ' . count($cancelled) . PHP_EOL;
echo 'Сумма выручки: ' . $revenue . ' руб.' . PHP_EOL;
