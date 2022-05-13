<?php

ini_set('display_errors', 1);

require_once '../config/session.php';
require_once '../config/mysql-connect.php';

if (empty($_POST)) {
	header('Location: ../login-profile.php');
}

$args = [
	'first_name' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{2,64}$/']],
	'last_name' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{2,64}$/']],
	'email' => FILTER_VALIDATE_EMAIL,
	'password' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{2,64}$/']],
	'status' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^(active|inactive|locked)$/']]
];

if (!empty($_POST)) {
	$update_data = filter_input_array(INPUT_POST, $args);
}

$mysqli = mysqli_connect($mysqliHostname, $mysqliUsername, $mysqliPassword, $mysqliDatabase);
if (mysqli_connect_errno()) {
	die('Connection error');
}

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');

/* Create a prepared statement */

$stmt = mysqli_prepare($mysqli, "UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ?, status = ? WHERE id = ?");

/* bind parameters for markers */
mysqli_stmt_bind_param($stmt, "sssssi", $update_data['first_name'], $update_data['last_name'], $update_data['email'], $update_data['password'], $update_data['status'], $_SESSION['id']);

/* execute query */
if (!mysqli_stmt_execute($stmt)) {
	echo mysqli_error($mysqli) . PHP_EOL;
	die('update failed');
}

$_SESSION['first_name'] = $update_data['first_name'];
$_SESSION['last_name'] = $update_data['last_name'];

$_SESSION['updateSuccess'] = true;

/* Free all the resources */
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
header('Location: ../login-profile.php');