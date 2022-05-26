<?php

header('Content-Type: text/plain');
require_once 'config/session.php';
require_once 'config/previews.php';

$pageTitle = 'Home';
$constructionNotice = 'Under Construction!';

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

$previewKeys = array_keys($previews);  // returns keys of $previews and puts them into $previewKeys
$headingArray = ['heading'];
$pageNav = array_fill_keys($previewKeys, $headingArray);  // fills pageNav keys with the array with the value 'heading'

$previewValues = [];
foreach ($previews as $previewInfo) {
	array_push($previewValues, $previewInfo['header']);
}

$index = 0;
foreach ($pageNav as $headingArray) {
	$pageNav[key($pageNav)] = array_fill_keys($headingArray, array_values($previewValues)[$index]);
	$index++;
}

var_dump($pageNav);
// var_dump($previewValues);

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
			<p class="subtitle bold"><?= $constructionNotice ?></p>
		</header>
		<?php foreach ($previews as $previewId => $preview) : ?>
			<section class="preview flex-align dir-change" id="<?= $previewId ?>" aria-label="<?= $preview['header'] ?>">
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
					<p class="preview-text"><?= $preview['text'] ?></p>
					<?php if (!empty($preview['link'])) : ?>
						<a href="<?= $preview['link'] ?>" class="more uppercase bold no-link-color">More</a>
					<?php endif; ?>
				</div>
			</section>
		<?php endforeach; ?>
	</main>
	<?php /* require_once 'include/page-nav.php'; */ ?>
	<?php require_once 'include/footer.php'; ?>
</body>

</html>