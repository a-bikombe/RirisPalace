<?php
// "forgot password" submits to validation/forgot.php
require_once 'config/session.php';

$pageTitle = 'Login';
$_SESSION['count']++;

$iconPath = 'images/icons/luca.png';

$styles = [];

$mobileStyles = [
	'main' => '575'
];

$scripts = [
	'main'
];
?>

<!doctype html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body id="login">
	<?php require_once 'include/header.php'; ?>
	<main>
		<h1><?= $pageTitle ?></h1>

		<form action="validation/login.php" method="post" class="text-center">
			<div class="input-block">
				<label for="email">Email Address</label>
				<input type="email" name="email" id="email" placeholder="Email Address" required>
			</div>
			<div class="input-block">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Password" required>
			</div>
			<div class="buttons pt-1vw border-5px">
				<button type="submit">Submit</button>
			</div>
			<div class="links pt-1vw">
				<div>
					<a href="login-forgot.php">Forgot Your Password?</a>
				</div>
				<div>
					<a href="login-signup.php">Don't Have An Account? Sign Up</a>
				</div>
			</div>
			<?php if (isset($_SESSION['badAccount']) && $_SESSION['badAccount'] === true) { ?>
				<p>Account deleted: contact admin to reactivate.</p>
			<?php
			}
			unset($_SESSION['badAccount']);
			?>
		</form>
	</main>
</body>

</html>