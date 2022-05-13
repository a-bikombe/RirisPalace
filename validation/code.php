<?php

// logs user in if they input the correct code

require_once '../config/session.php';

$filters = [
	'code' => [
		'filter' => FILTER_VALIDATE_REGEXP,
		'options' => [
			'regexp' => '/^\d{6}$/',
		]
	]
];

if (!empty($_POST)) {
	$filtered = filter_input_array(INPUT_POST, $filters);

	if ($filtered['code'] === false) {
		echo 'Invalid Code' . PHP_EOL;
	} else {
		if ($filtered['code'] === $_SESSION['code']) {
			$_SESSION['badAccount'] = false;
			$_SESSION['loginSuccess'] = true;
			header('Location: ../index.php');
		} else {
			die('Bad code');
		}
	}
}
