<?php

/* The objective of this lab is to practice with strings and arrays on a web page. For this lab, you will code a web page that allows the user to check user credentials with the file from the previous lab. */

// header('Content-type: text/plain');

// define constants
define('USERNAMES_FILENAME', 'config/usernames.csv');
define('PASSWORDS_FILENAME', 'config/passwords.csv');

if (is_file(USERNAMES_FILENAME) && is_file(PASSWORDS_FILENAME)) {
	$usernames = trim(file_get_contents(USERNAMES_FILENAME));
	$usernames = explode(',', $usernames);
	$passwords = trim(file_get_contents(PASSWORDS_FILENAME));
	$passwords = explode(',', $passwords);
}

/* var_dumps

echo 'Post Array'.PHP_EOL;
var_dump($_POST);
echo 'Usernames'.PHP_EOL;
var_dump($usernames);
echo 'Passwords'.PHP_EOL;
var_dump($passwords);
*/


// read username and password filenames as constants
$listedUsernames = file(USERNAMES_FILENAME, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
$listedPasswords = file(PASSWORDS_FILENAME, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

// readlines
$submittedUsername = $_POST["username"];	// ask for username input;

// look for index in username array attached, assign that index to a variable
$userIndex = array_search($submittedUsername, $usernames);

if (!isset($submittedUsername)) {
	header("Location: login.php");
}

// check against the credentials files
if (!in_array($submittedUsername, $usernames)) {	// search username array for submitted username
	die('Access Denied: No Listed Username'.PHP_EOL);
}

$submittedPassword = $_POST["password"];
$passIndex = array_search($submittedPassword, $passwords); 	// assign password index to variable
if ($passIndex == false || $passIndex != $userIndex) {	// use that variable to match up to password
	die('Access Denied: Invalid Password'.PHP_EOL);
} else {
	echo 'Access Granted'.PHP_EOL;	// access granted if username/password submitted match pair of values in file
	header("Location: index.php");
}