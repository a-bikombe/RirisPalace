<?php
// back-end of login.php, submits to validation/forgot.php
require_once 'config/session.php';

$pageTitle = 'Forgot Password';

$iconPath = 'images/icons/luca.png';

$styles = [
	'login'
];

$mobileStyles = [
	'main' => '600'
];

$scripts = [
	'main'
];

/* 

login.php "forgot password" link takes you to login-forgot.php
forgotPassword is another form - allows user to put in their email securely, and mails $message to what email they put
	once they click "send email" they're redirected to the page where they input the correct code (if it validates)
	$message = "Your Password Change Code is " . $changeCode;
	""
*/

?>

<!doctype html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body>
	<?php require_once 'include/loading-page.php'; ?>
	<?php require_once 'include/header.php'; ?>
	<main>
		<h1><?= $pageTitle ?></h1>

		<form action="validation/forgot.php" method="post" class="text-center">
			<div class="input-block">
				<label for="email">Email Address</label>
				<input type="email" name="email" id="email" placeholder="Email Address" required>
			</div>
			<div class="buttons pt-1vw border-5px">
				<button type="submit">Submit</button>
			</div>
		</form>
	</main>
</body>

</html>