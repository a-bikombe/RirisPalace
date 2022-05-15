<?php
ini_set('display_errors', 1);
require_once 'config/session.php';
require_once 'config/nav-links.php';
?>

<header class="header transparent-bg" id="header-banner">
	<nav class="navbar navbar-expand-lg" id="top">
		<div class="container-fluid">
			<a href="/">
				<img src="images/icons/luca.png" class="logo float-left" id="luca-logo" alt="luca mlem">
			</a>
			<a class="navbar-brand" href="/" id="heading">a r i b i k o m b e</a>
			<button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbar-supported-content" aria-label="Toggle navigation" aria-expanded="false">
				<i class="navbar-toggler-icon fa-solid fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbar-supported-content">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<?php foreach ($navLinks as $title => $link) : ?>
						<li class="nav-item">
							<a class="nav-link text-center" href="<?= $link ?>"><?= $title ?></a>
						</li>
					<?php endforeach; ?>
					<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-center" href="#" id="navbar-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> My Interests </a>
							<ul class="dropdown-menu p-0" aria-labelledby="navbar-dropdown">
								<?php foreach ($interests as $title => $link) : ?>
									<li class="dropdown-list-item">
										<a class="dropdown-item text-center" href="<?= $link ?>"><?= $title ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
					-->
				</ul>
				<div class="account">
					<?php if (isset($_SESSION['loginSuccess']) && $_SESSION['loginSuccess'] === true) { ?>
						<!-- profile link -->
						<a class="nav-link text-center" href="login-profile.php"><?= $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] ?></a>
						<!-- log out button -->
						<a href="config/logout.php" class="logout-btn btn btn-outline-danger" title="Log Out" id="logout-btn">
							<i class="fa-solid fa-arrow-right-from-bracket"></i>
						</a>
					<?php } else { ?>
						<!-- log in button -->
						<a href="login.php" class="login-btn btn btn-outline-success" title="Log In" id="login-btn">
							<i class="fa-solid fa-arrow-right-to-bracket"></i>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</nav>
</header>