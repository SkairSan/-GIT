<?php

$a = 10;
$b = 0;
$c = -10;

if ($a > $b && $a > $c) echo "Наибольшее число: a = ".$a;
else if ($b > $a && $b > $c) echo "Наибольшее число: b = ".$b;
else if ($c > $b && $c > $a) echo "Наибольшее число: c = ".$c;
?>
