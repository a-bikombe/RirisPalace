<?php

require_once 'config/session.php';
require_once 'config/previews.php';

$pageTitle = 'Home';
$currentMonth = 'October 2022';

$iconPath = 'images/icons/luca.png';

$styles = [
	'index'
];

$mobileStyles = [
	'main' => '600'
];

$scripts = [
	'main'
];

$pageNav = [
	'about-me' => [
		'heading' => 'Welcome!'
	],
	'news' => [
		'heading' => 'News'
	]
];

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body class="dark-theme bg-image-dim" id="index">
	<?php require_once 'include/loading-page.php'; ?>
	<!-- bootstrap navbar -->
	<?php require_once 'include/header.php' ?>
	<main>
		<header class="homepage-header p-1vw text-center border-10px">
			<h1>AriBikombe</h1>
			<p class="subtitle bold"><?= $currentMonth ?></p>
		</header>
		<?php foreach ($previews as $previewId => $preview) : ?>
			<section class="preview flex-align dir-change" id="<?= $previewId ?>" aria-label="<?= $preview['header'] ?>">
				<h2><?= $preview['header'] ?></h2>
				<?php if (!empty($preview['image'])) : ?>
					<figure>
						<img src="<?= $preview['image'] ?>" class="preview-image border-5px" id="<?= $previewId ?>-img">
						<?php if ($previewId === 'celebrity-of-the-week') : ?>
							<figcaption class="text-center bold pt-1vw"><?= $celebrity ?></figcaption>
						<?php endif; ?>
					</figure>
				<?php endif; ?>
				<div>
					<p class="preview-text"><?= $preview['text'] ?></p>
					<?php if (!empty($preview['link'])) : ?>
						<a href="<?= $preview['link'] ?>" class="more uppercase bold no-link-color">More</a>
					<?php endif; ?>
				</div>
			</section>
		<?php endforeach; ?>
	</main>
	<?php require_once 'include/page-nav.php'; ?>
	<?php require_once 'include/footer.php'; ?>
</body>

</html>