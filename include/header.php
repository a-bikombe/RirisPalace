<?php
ini_set('display_errors', 1);
require_once 'config/session.php';
require_once 'config/nav-links.php';
?>

<header class="header" id="header-banner">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="top">
		<div class="container-fluid">
			<a href="/">
				<img src="images/icons/luca.png" class="float-left" id="luca-logo" alt="luca mlem">
			</a>
			<a class="navbar-brand" href="/" id="heading"> arianna </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbar-supported-content" aria-controls="navbar-supported-content"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-supported-content">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-center" href="about.php"> About Me </a>
					</li> 
					<?php if (isset($_SESSION['loginSuccess'], $_SESSION['admin']) && $_SESSION['loginSuccess'] === true && $_SESSION['admin'] = true) { ?>
						<li class="nav-item">
						<a class="nav-link text-center"
							href="https://www.notion.so/ariannabikombe/TODO-md-9c80e4221c8c428287dfb5a13acc2ed9"
							target="_blank"> TODO.md </a>
					</li>
					<?php } ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-center" href="#" id="navbar-dropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false"> My Interests </a>
						<ul class="dropdown-menu p-0" aria-labelledby="navbar-dropdown">
							<?php foreach ($interests as $title => $link) : ?>
							<li class="dropdown-list-item">
								<a class="dropdown-item text-center" href="<?= $link ?>"> <?= $title ?> </a>
							</li> <?php endforeach; ?> </ul>
					</li>
				</ul> 
				<?php if (isset($_SESSION['loginSuccess']) && $_SESSION['loginSuccess'] === true) { ?> 
					<a
					class="nav-link text-center"
					href="login-profile.php"><?= $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] ?></a>
				<a href="config/logout.php" class="btn btn-outline-danger" title="Log Out" id="logout-btn">
					<i class="fa-solid fa-arrow-right-from-bracket"></i>
				</a> 
				<?php
				} else { ?> 
				<a href="login.php" class="btn btn-outline-success" title="Log In" id="login-btn">
					<i class="fa-solid fa-arrow-right-to-bracket"></i>
				</a>
				<?php } ?>
				<!-- log out button -->
			</div>
		</div>
	</nav>
</header>