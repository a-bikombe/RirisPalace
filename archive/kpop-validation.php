<?php

ini_set('display_errors', 1);

require_once 'session.php';
require_once 'kpop-groups.php';

if (empty($_POST)) {
	header('Location: ../login-profile.php');
}

/* 

group-member => person

group => [
	member => person
]

*/

foreach ($_POST as $k => $v) {
	// split the id and name
	$row_data = explode('-', $k);
	// use the id and the name of the data to identify the value
	$data[$row_data[0]][$row_data[1]] = $v;
}

$args = [
	'member' => ['filter' => FILTER_VALIDATE_REGEXP, 'options' => ['regexp' => '/^[\w, .\'-]{,64}$/']]
];

$filtered = filter_var_array($data['member'], $args);

$_SESSION['member'];