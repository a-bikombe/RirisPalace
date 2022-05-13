<?php

/* $sum = 9 * 7 / 3 + 3;
echo $sum.PHP_EOL;

$sum = (9 * 7) / (3 + 3);
echo $sum.PHP_EOL;

$sum = 9 * (7 / 3 + 3);
echo $sum.PHP_EOL; */

/* How would you code an expression to evaluate whether $counter is greater than 7 and $name is 'Wanda'? */

$counter = 8;
$name = 'Wanda';

if ($counter <= 7 || $name != 'Wanda') {
	die('Try again'.PHP_EOL);
} else {
	echo 'Congratulations!'.PHP_EOL;
}