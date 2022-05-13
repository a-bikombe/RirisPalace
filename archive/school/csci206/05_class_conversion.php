#!/usr/local/bin/php
<?php

/* expects two numeric arguments and computes floating point sum */

// check to make sure there are two arguments and make sure both are numeric
if ($argc < 3 || !is_numeric($argv[1]) || !is_numeric($argv[2])) {
	die('Two numbers please'.PHP_EOL);
}

// convert to floating point
$a = floatval($argv[1]);
$b = floatval($argv[2]);

// add
$f = $a + $b;

// print
echo $f.PHP_EOL;