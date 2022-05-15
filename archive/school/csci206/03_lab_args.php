#!/usr/local/bin/php
<?php
echo "argc value: ";
var_dump($argc);

echo "argv value: ";
var_dump($argv);

echo __LINE__.PHP_EOL;
echo __FILE__.PHP_EOL;
echo __DIR__.PHP_EOL;

echo gettype($argc).PHP_EOL;

echo isset($argv[0]).PHP_EOL;

echo var_export(isset($argv[10])).PHP_EOL.PHP_EOL;


