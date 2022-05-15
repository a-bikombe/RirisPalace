<?php

ini_set('display_errors', 1);

require_once '../config/session.php';
require_once '../config/mysql-connect.php';

if (empty($_POST)) {
	die;
}

$args = [
	'first_name' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{2,64}$/']],
	'last_name' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{2,64}$/']],
	'email' => FILTER_VALIDATE_EMAIL,
	'password' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{2,64}$/']],
];

if (!empty($_POST)) {
	$insert_data = filter_input_array(INPUT_POST, $args);
}

$mysqli = mysqli_connect($mysqliHostname, $mysqliUsername, $mysqliPassword, $mysqliDatabase);
if (mysqli_connect_errno()) {
	die('Connection error');
}

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');

$stmtSelect = mysqli_prepare($mysqli, "SELECT * FROM users");
mysqli_stmt_execute($stmtSelect);
/* Read each row of the results as an associative array */
$result = mysqli_stmt_get_result($stmtSelect);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$userData[] = $row;
}

foreach ($userData as $user) {
	if ($user['email'] === $insert_data['email']) {
		$_SESSION['badEmail'] = true;
		header('Location: ../login-signup.php');
	} else {
		$_SESSION['badEmail'] = false;

		/* Create a prepared statement */
		$stmtInsert = mysqli_prepare($mysqli, "INSERT INTO users(first_name,last_name,email,password,status) VALUES (?,?,?,?,'active')");

		/* bind parameters for markers */
		mysqli_stmt_bind_param($stmtInsert, "ssss", $insert_data['first_name'], $insert_data['last_name'], $insert_data['email'], $insert_data['password']);

		/* execute query */
		if (!mysqli_stmt_execute($stmtInsert)) {
			die('insert failed');
		}

		$_SESSION['loginSuccess'] = true;
		$_SESSION['id'] = $user['id'];
		$_SESSION['first_name'] = $user['first_name'];
		$_SESSION['last_name'] = $user['last_name'];

		/* Free all the resources */
		mysqli_stmt_close($stmtInsert);
		mysqli_stmt_close($stmtSelect);
		header('Location: ../index.php');
	}
}

mysqli_close($mysqli);
