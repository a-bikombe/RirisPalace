<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("127.0.0.1", "root", "", "new_test", 3306);

echo $mysqli->connect_error;

/* Prepared statement, stage 1: prepare */
$stmt = $mysqli->prepare("select * from one;");

/* Prepared statement, stage 2: bind and execute */
$id = 1;
$name = 'PHP';
$stmt->bind_param("s", $name); // "is" means that $id is bound as an integer and $label as a string

$stmt->execute();