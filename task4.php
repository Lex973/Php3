<?php

$students = [
    ['name' => 'Анна', 'grade' => 4.5],
    ['name' => 'Борис', 'grade' => 3.2],
    ['name' => 'Вера', 'grade' => 4.8],
    ['name' => 'Глеб', 'grade' => 2.9],
];

usort($students, fn($a, $b) => $b['grade'] <=> $a['grade']);
echo 'Рейтинг:' . PHP_EOL;
echo implode(PHP_EOL, array_map(fn($s) => $s['name'] . ' — ' . $s['grade'], $students)) . PHP_EOL;

$alphabetical = $students;
usort($alphabetical, fn($a, $b) => strcmp($a['name'], $b['name']));
echo 'По алфавиту:' . PHP_EOL;
echo implode(PHP_EOL, array_map(fn($s) => $s['name'] . ' — ' . $s['grade'], $alphabetical)) . PHP_EOL;

$greaterThan = fn($limit) => fn($student) => $student['grade'] > $limit;
$excellent = array_filter($students, $greaterThan(4.0));
echo 'Оценка выше 4.0: ' . implode(', ', array_map(fn($s) => $s['name'], $excellent)) . PHP_EOL;
echo 'Количество: ' . count($excellent) . PHP_EOL;
