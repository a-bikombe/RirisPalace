<?php
require_once 'config/session.php';
require_once 'config/previews.php';

$pageTitle = 'Home';
$constructionNotice = 'Under Construction!';

$iconPath = 'images/icons/luca.png';

$styles = [];

$mobileStyles = [
	'main' => '575'
];

$scripts = [
	'main'
];
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body class="dark-bg" id="index">
	<?php require_once 'include/loading-page.php'; ?>
	<!-- bootstrap navbar -->
	<?php require_once 'include/header.php' ?>
	<main>
		<header class="homepage-header p-1vw text-center border-10px">
			<h1>AriBikombe</h1>
			<p class="subtitle m-0 p-0 text-center bold"><?= $constructionNotice ?></p>
		</header>
		<?php foreach ($previews as $previewId => $preview) : ?>
			<section aria-label="<?= $previewId ?>" class="preview flex flex-align-center" id="<?= $previewId ?>">
				<h2><?= $preview['header'] ?></h2>
				<?php if (!empty($preview['image'])) : ?>
					<figure>
						<img src="<?= $preview['image'] ?>" class="preview-image border-5px" id="<?= $previewId ?>-img">
						<?php if ($previewId === 'boy-of-the-week') : ?>
							<figcaption class="text-center bold pt-1vw"><?= $boy ?></figcaption>
						<?php endif; ?>
					</figure>
				<?php endif; ?>
				<div>
					<p><?= $preview['text'] ?></p>
					<?php if (!empty($preview['link'])) : ?>
						<a href="<?= $preview['link'] ?>" class="more uppercase bold no-link-color">More</a>
					<?php endif; ?>
				</div>
			</section>
		<?php endforeach; ?>
	</main> <?php require_once 'include/footer.php'; ?>
</body>

</html>