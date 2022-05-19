<?php
require_once 'config/session.php';

// front-end of stranger-things-characters.php
require_once 'config/stranger-things-characters.php';
$pageTitle = 'Stranger Things';

$iconPath = 'https://vignette1.wikia.nocookie.net/animal-jam-clans-1/images/f/f3/Stranger-Things-Logo-Netflix-Television-Show-Winona-Ryder-Duffer-Brothers-1234kyle5678-1.png/revision/latest?cb=20160913015917';

$styles = [
	'stranger-things'
];

$mobileStyles = [
	'main' => '575'
];

$scripts = [
	'main',
	'stranger-things'
];
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body class="dark-theme" id="stranger-things">
	<?php require_once 'include/loading-page.php'; ?>
	<?php require_once 'include/header.php'; ?>
	<main>
		<section id="intro">
			<h1><?= strtoupper($pageTitle) ?></h1>
			<section id="watch-links">
				<a href="https://www.netflix.com/title/80057281" class="no-link-color no-decor text-center" target="_blank">
					<h3> Watch Season 1, 2, and 3 </h3>
				</a>
			</section>
			<section id="s4-countdown" class="countdown">
				<h3 id="s4-vol1-countdown">
					<a href="https://www.youtube.com/watch?v=yQEondeGvKo" target="_blank" class="no-link-color no-decor">Season 4 Vol. 1</a> is in <output id="days-until-s4-vol1"></output> days.
				</h3>
				<h3 id="s4-vol2-countdown" class="countdown">
					<a href="https://www.youtube.com/watch?v=yQEondeGvKo" target="_blank" class="no-link-color no-decor">Season 4 Vol. 2</a> is in <output id="days-until-s4-vol2"></output> days.
				</h3>
			</section>
			<section id="plot">
				<h2> Plot </h2>
				<p> <?= $plot ?> </p>
			</section>
		</section>
		<section id="characters">
			<?php foreach ($seasons as $season => $seasonInfo) : ?>
				<section class="season border-10px" id="<?= $season ?>">
					<h2> <?= $seasonInfo['seasonName'] ?> Characters </h2>
					<!-- character template -->
					<?php foreach ($seasonInfo['characters'] as $character => $characterInfo) : ?>
						<section class="character flex w-100 dir-change" id="<?= $character ?>">
							<section class="character-image-name text-center">
								<section class="character-image-carousel">
									<div id="<?= $character ?>-carousel" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
											<?php foreach ($characterInfo['images'] as $imageSeason => $imagePath) : ?>
												<?php $firstSeason = array_key_first($characterInfo['images']);
												$lastSeason = array_key_last($characterInfo['images']); ?> <div class="carousel-item
												<?php if ($imageSeason === $firstSeason) { ?> active
												<?php } ?>
												" data-bs-interval="
                                                    <?php if ($imageSeason === $firstSeason) {
														switch ($firstSeason) {
															case 'Season 1':
																echo 5000;
																break;
															case 'Season 2':
																echo 10000;
																break;
															case 'Season 3':
																echo 15000;
																break;
															case 'Season 4':
																echo 20000;
																break;
															case 'Season 5':
																echo 25000;
																break;
															default:
																die();
																break;
														}
													} else if ($imageSeason === $lastSeason) {
														switch ($lastSeason) {
															case 'Season 3':
																echo 15000;
																break;
															case 'Season 4':
																echo 10000;
																break;
															case 'Season 5':
																echo 5000;
																break;
															default:
																die();
																break;
														}
													} ?>
													">
													<img data-src="<?= $imagePath ?>" class="d-block w-100 character-image" alt="<?= $character ?> <?= $imageSeason ?>">
													<div class="carousel-caption d-none d-md-block p-0">
														<h5><?= $imageSeason ?></h5>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#<?= $character ?>-carousel" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#<?= $character ?>-carousel" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
								</section>
								<a href="<?= $characterInfo['characterLink'] ?>" class="no-link-color no-decor" target="_blank">
									<h3> <?= $characterInfo['characterName'] ?> </h3>
								</a>
							</section>
							<section class="character-description">
								<ul class="character-description-list">
									<?php foreach ($characterInfo['content'] as $bulletPoint) : ?>
										<li class="character-description-item"><?= $bulletPoint ?></li>
									<?php endforeach; ?>
								</ul>
							</section>
						</section>
					<?php endforeach; ?>
				</section>
			<?php endforeach; ?>
		</section>
	</main>
	<?php require_once 'include/footer.php'; ?>
</body>

</html>