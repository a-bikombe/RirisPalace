<?php
// comes from login-forgot.php
// redirects to login-code.php

require_once '../config/session.php';
require_once '../config/mysql-connect.php';

$filters = [
	'email' => FILTER_VALIDATE_EMAIL,
];

if (!empty($_POST)) {

	$filtered = filter_input_array(INPUT_POST, $filters);

	if ($filtered['email'] === false) {
		echo 'Invalid Email' . PHP_EOL;
	} else {
		$mysqli = mysqli_connect($mysqliHostname, $mysqliUsername, $mysqliPassword, $mysqliDatabase);
		if (mysqli_connect_errno()) {
			die('Connection error');
		}
		mysqli_set_charset($mysqli, 'utf8mb4');
		$stmt = mysqli_prepare($mysqli, "SELECT * FROM users");
		mysqli_stmt_execute($stmt);
		/* Read each row of the results as an associative array */
		$result = mysqli_stmt_get_result($stmt);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$userData[] = $row;
		}

		foreach ($userData as $user) {
			if ($filtered['email'] === $user['email']) {
				if ($user['status'] === 'deleted') {
					$_SESSION['badAccount'] = true;
					die('Deleted account');
					// header('Location: ../login.php');
				} else {
					$_SESSION['id'] = $user['id'];
					$_SESSION['first_name'] = $user['first_name'];
					$_SESSION['last_name'] = $user['last_name'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['password'] = $user['password'];
					if (!isset($_SESSION['code'])) {
						$code;
						for ($i = 1; $i <= 6; $i++) {
							$code = $code . strval(rand(0, 9));
						}
						$_SESSION['code'] = $code;
					}
					if (isset($_SESSION['code'])) {
						$email = $_SESSION['email'];
						$message = 'Your Password Code is ' . $_SESSION['code'];
						$wrappedMessage = wordwrap($message, 70);
						$headers = [
							'From' => 'noreply@aribikombe.com'
						];
						if (mail($email, "AriBikombe - Password Code", $wrappedMessage, $headers) !== true) {
							header('Location: ../login-forgot.php');
						} else {
							header('Location: ../login-code.php');
						}
					}
				}
			}
		}

		if (!isset($user['email'])) {
			echo 'You do not have an account with us!' . PHP_EOL;
		}

		mysqli_stmt_close($stmt);
		mysqli_close($mysqli);
	}
}
