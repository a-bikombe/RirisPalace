<?php
require_once 'config/session.php';

$pageTitle = 'Sign Up';

$iconPath = 'images/icons/luca.png';

$styles = [
	'login'
];

$mobileStyles = [
	'main' => '575'
];

$scripts = [
	'main',
	'login-signup'
];
?>

<!doctype html>
<html lang="en">

<?php require_once 'include/head-tag.php' ?>

<body>
	<?php require_once 'include/header.php'; ?>
	<main>
		<h1><?= $pageTitle ?></h1>

		<form action="validation/login-signup.php" method="post" class="text-center">
			<div class="input-block">
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first-name" placeholder="First Name" required>
			</div>
			<div class="input-block">
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last-name" placeholder="Last Name" required>
			</div>
			<div class="input-block">
				<label for="email">Email Address</label>
				<input type="email" name="email" id="email" placeholder="Email Address" required>
			</div>
			<div class="input-block">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Password" required>
			</div>
			<div class="input-block">
				<label for="password">Re-Enter Password</label>
				<input type="password" id="password-reenter" placeholder="Password" required>
				<p id="help"></p>
			</div>
			<div>
				<button type="submit" id="login-signup-submit">Submit</button>
				<?php if (isset($_SESSION['badEmail']) && $_SESSION['badEmail'] === true) :
				?>
					<p>No duplicate email addresses!</p>
				<?php endif; ?>
			</div>
		</form>
	</main>
</body>

</html>