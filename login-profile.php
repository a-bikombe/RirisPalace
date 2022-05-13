<?php
require_once 'config/session.php';
require_once 'config/mysql-connect.php';

$pageTitle = $_SESSION['first_name'] . '\'s Profile';

$iconPath = 'images/icons/luca.png';

$styles = [];

$mobileStyles = [
	'main' => '575'
];

$scripts = [
	'main',
	'profile'
];

$mysqli = mysqli_connect($mysqliHostname, $mysqliUsername, $mysqliPassword, $mysqliDatabase);
mysqli_set_charset($mysqli, 'utf8mb4');
$stmt = mysqli_prepare($mysqli, "SELECT * FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, "s", $_SESSION['id']);
mysqli_stmt_execute($stmt);
/* Read each row of the results as an associative array */
$result = mysqli_stmt_get_result($stmt);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$userData[] = $row;
}
?>

<!doctype html>
<html lang="en">

<?php require_once 'include/head-tag.php' ?>

<body id="profile">

	<?php require_once 'include/header.php'; ?>

	<main class="text-center m-auto">

		<h1 class="profile-header"><?= $pageTitle ?></h1>

		<form action="validation/profile.php" method="post" id="profile-form" class="text-center">
			<table>
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($userData as $user) : ?>
						<td>
							<input type="text" name="first_name" value="<?= htmlentities($user['first_name']) ?>">
						</td>
						<td>
							<input type="text" name="last_name" value="<?= htmlentities($user['last_name']) ?>">
						</td>
						<td>
							<input type="email" name="email" value="<?= htmlentities($user['email']) ?>">
						</td>
						<td>
							<input type="password" name="password" value="<?= htmlentities($user['password']) ?>">
						</td>
						<td>
							<?php if ($user['status'] === 'deleted') {
							?>
								Deleted
							<?php
							} else {
							?>
								<select name="status">
									<?php
									switch ($user['status']) {
										case 'active':
									?>
											<option value="active">Active</option>
											<option value="inactive">Inactive</option>
											<option value="locked">Locked</option>
										<?php
											break;
										case 'inactive':
										?>
											<option value="inactive">Inactive</option>
											<option value="locked">Locked</option>
											<option value="active">Active</option>
										<?php
											break;
										default:
										?>
											<option value="locked">Locked</option>
											<option value="active">Active</option>
											<option value="inactive">Inactive</option>
									<?php
											break;
									}

									?>

								</select>
							<?php } ?>

						</td>
					<?php endforeach; ?>
				</tbody>
			</table>
			<div class="buttons pt-1vw border-5px">
				<button class="border-5px"  type="submit">Submit</button>
				<button class="border-5px"  type="reset">Reset</button>
				<?php if (isset($_SESSION['updateSuccess']) && $_SESSION['updateSuccess'] === true) { ?>
					<p>Changes Saved!</p>
				<?php
					$_SESSION['updateSuccess'] = false;
				} ?>
			</div>
		</form>

		<div class="buttons pt-1vw border-5px">
			<button type="button" id="delete-account">Delete Account</button>
			<form action="validation/profile-delete.php" method="post" id="delete-form" class="hidden">
				<label for="confirmDelete">Are you sure you want to delete your account? In order to reactivate it you will need to contact admin.</label>
				<input type="checkbox" id="confirm-delete" name="status" value="deleted">
				<button type="submit">Delete Account</button>
			</form>
		</div>

	</main>
</body>

</html>

<?php

mysqli_stmt_close($stmt);
mysqli_close($mysqli);

?>