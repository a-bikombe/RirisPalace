<?php

$a = 4;
$b = 3;

$c = $a > $b ? 12 : 100;

echo $c.PHP_EOL;

$var = 8;

// How can you test if a variable has been set and has a value other than null?
if (isset($var)) {
	if (!is_null($var)) {
		echo "Is set, not null".PHP_EOL;
	}
} else {
	echo "Is not set".PHP_EOL;
}