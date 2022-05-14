<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("127.0.0.1", "root", "", "csci206", 3306);

$query = "SELECT * FROM one";
$result = $mysqli->query($query);
while ($row = $result->fetch_row()) {
    var_dump($row);
}