<?php
// comes from validation/forgot.php
// submits to validation/code.php
require_once 'config/session.php';

$pageTitle = 'Forgot Password - Code';

$iconPath = 'images/icons/luca.png';

$styles = [
	'login'
];

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

<body>
<?php require_once 'include/loading-page.php'; ?>
	<?php require_once 'include/header.php'; ?>
	<main>
		<h1><?= $pageTitle ?></h1>

		<form action="validation/code.php" method="post" class="text-center">
			<div class="input-block">
				<label for="code">Enter Your Code:</label>
				<input type="text" name="code" id="code" placeholder="Six-Digit Code" required>
			</div>
			<div>
				<button type="submit">Submit</button>
			</div>
		</form>
	</main>
</body>

</html>