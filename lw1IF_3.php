<?php

$income = rand(1,100000);
echo "income: ".$income."\n";

$nalog;
if ($income <= 20000 && $income > 0) $nalog = $income * 10/100;
elseif ($income > 20000 && $income <= 50000) $nalog = 2000 + ($income - 20000) * 15/100;
elseif ($income > 50000) $nalog = 6500 + ($income - 50000) * 20/100;

echo "Nalog: ".$nalog;
?>
