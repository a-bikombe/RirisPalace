<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
} else if (!isset($_SESSION['badTries'])) {
	$_SESSION['badTries'] = 0;
} else if (!isset($_SESSION['loginSuccess'])) {
	$_SESSION['loginSuccess'] = false;
}

?>