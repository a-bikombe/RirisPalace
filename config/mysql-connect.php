<?php

/* secure.php declares password variable with secure password */
require_once 'secure.php';

$mysqliHostname = "ririspalace.com";
$mysqliUsername = "aribikom";
$mysqliPassword = $mysqliPasswordSecure;
$mysqliDatabase = "aribikom_login";