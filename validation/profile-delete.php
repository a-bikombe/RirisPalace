<?php

require_once '../config/session.php';

$args = [
	'status' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^(deleted)$/']]
];

if (!empty($_POST)) {
	$delete_data = filter_input_array(INPUT_POST, $args);
}

$mysqli = mysqli_connect("127.0.0.1", "root", "", "login", 3306);
mysqli_set_charset($mysqli, 'utf8mb4');
$stmt = mysqli_prepare($mysqli, "UPDATE users SET status = ? WHERE id = ?");
mysqli_stmt_bind_param($stmt, "si", $delete_data['status'], $_SESSION['id']);
if (!mysqli_stmt_execute($stmt)) {
	die('delete failed');
}

mysqli_stmt_close($stmt);
mysqli_close($mysqli);
session_destroy();

header('Location: ../index.php');