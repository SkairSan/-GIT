<?php

$matrix = [
    [rand(0,9), rand(0,9), rand(0,9)],
    [rand(0,9), rand(0,9), rand(0,9)],
    [rand(0,9), rand(0,9), rand(0,9)]
];

$sum = 0;
$size = count($matrix); // Определяем размер матрицы

for ($i = 0; $i < $size; $i++) {
    // Главная диагональ — это элементы [0][0], [1][1], [2][2]...
    $sum += $matrix[$i][$i];
}

echo "Матрица:\n";
foreach ($matrix as $row) {
    echo implode("\t", $row) . "\n";
}

echo "\nСумма элементов главной диагонали: " . $sum;
?>
