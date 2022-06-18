<?php
require_once 'config/session.php';

require_once 'config/stranger-things-config.php';    // config

$pageTitle = 'Stranger Things';

$iconPath = 'https://vignette1.wikia.nocookie.net/animal-jam-clans-1/images/f/f3/Stranger-Things-Logo-Netflix-Television-Show-Winona-Ryder-Duffer-Brothers-1234kyle5678-1.png/revision/latest?cb=20160913015917';

$styles = [
	'stranger-things'
];

$mobileStyles = [
	'main' => '700'
];

$scripts = [
	'main',
	'stranger-things'
];

$pageNav = [
	'intro' => [
		'heading' => 'Intro'
	],
	'character-rank' => [
		'heading' => 'Character Rank'
	],
	'characters' => [
		'heading' => 'Characters',
		'array' => $seasons
	],
	'episodes' => [
		'heading' => 'Episodes',
		'array' => $seasons
	]
];

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body class="dark-theme" id="stranger-things">
	<?php require_once 'include/loading-page.php'; ?>
	<?php require_once 'include/header.php'; ?>
	<main>
		<h1><?= strtoupper($pageTitle) ?></h1>
		<div id="intro-rank" class="intro-rank flex dir-change">
			<section id="intro" class="intro" aria-label="Introduction">
				<section id="watch-links" aria-label="Watch Links">
					<a href="https://www.netflix.com/title/80057281" class="no-link-color no-decor text-center" target="_blank">
						<h3> Watch Seasons 1-4 </h3>
					</a>
				</section>
				<section id="s4-countdown" class="intro-section countdown" aria-label="Season 4 Volume 1 Countdown">
					<h3 id="s4-vol1-countdown" class="countdown hidden">
						<a href="https://www.youtube.com/watch?v=yQEondeGvKo" target="_blank" class="no-link-color no-decor">Season 4 Vol. 1</a> is in <output for="s4-vol1-countdown" id="days-until-s4-vol1"></output> days.
					</h3>
					<h3 id="s4-vol2-countdown" class="countdown hidden" aria-label="Season 4 Volume 2 Countdown">
						<a href="https://www.youtube.com/watch?v=yQEondeGvKo" target="_blank" class="no-link-color no-decor">Season 4 Vol. 2</a> is in <output for="s4-vol2-countdown" id="days-until-s4-vol2"></output>
					</h3>
				</section>
				<section id="plot" class="intro-section plot" aria-labelledby="plot-title">
					<h2 id="plot-title">Plot</h2>
					<p> <?= $plot ?> </p>
				</section>
			</section>
			<section id="character-rank" class="flex-justify dir-col" aria-labelledby="character-rank-title">
				<h2 id="character-rank-title">Character Rank</h2>
				<ol>
					<?php foreach ($characterRank as $character) : ?>
						<li><?= ucfirst($character) ?></li>
					<?php endforeach; ?>
				</ol>
			</section>
		</div>
		<section id="characters" class="characters" aria-label="Characters">
			<?php foreach ($seasons as $season => $seasonInfo) : ?>
				<section class="season border-10px" id="<?= $season ?>-characters" aria-label="<?= $seasonInfo['seasonName'] ?>">
					<h2> <?= $seasonInfo['seasonName'] ?> Characters </h2>
					<!-- character template -->
					<?php foreach ($seasonInfo['characters'] as $character => $characterInfo) : ?>
						<section class="character flex w-100 dir-change" id="<?= $character ?>" aria-label="<?= ucfirst($character) ?>">
							<div class="character-image-name text-center">
								<div class="character-image-carousel">
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
													<img data-src="<?= $imagePath ?>" class="d-block w-100 character-image" alt="<?= ucfirst($character) ?> <?= $imageSeason ?>">
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
								</div>
								<a href="<?= $characterInfo['characterLink'] ?>" class="no-link-color no-decor" target="_blank">
									<h3> <?= $characterInfo['characterName'] ?> </h3>
								</a>
							</div>
							<div class="character-description">
								<ul class="character-description-list">
									<?php foreach ($characterInfo['content'] as $bulletPoint) : ?>
										<li class="character-description-item"><?= $bulletPoint ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</section>
					<?php endforeach; ?>
				</section>
			<?php endforeach; ?>
		</section>
		<section id="episodes" class="episodes border-10px" aria-labelledby="episodes-title">
			<h2 id="episodes-title">Episodes</h2>
			<?php foreach ($seasons as $seasonId => $season) : ?>
				<section class="season border-10px" id="<?= $seasonId ?>-episodes" aria-label="<?= $season['seasonName'] ?>">
					<h3 class="season-title"><?= $season['seasonName'] ?></h3>
					<div class="dates flex-align dir-change">
						<p class="subtitle date-release">Release: <strong><?= $season['dateRelease'] ?></strong></p>
						<p class="subtitle date-setting">Setting: <strong><?= $season['dateSetting'] ?></strong></p>
					</div>
					<?php if (isset($season['episodes'])) : ?>
						<?php foreach ($season['episodes'] as $episodeId => $episode) : ?>
							<section class="episode border-10px flex dir-col" id="<?= $seasonId . '-' . $episodeId ?>" aria-labelledby="<?= $seasonId ?>-chapter-<?= $episodeId ?>">
								<div class="episode-header dir-change">
									<h4 class="episode-title" id="<?= $seasonId ?>-chapter-<?= $episodeId ?>">Chapter <?= ucfirst($episodeId) ?>: <strong><?= $episode['title'] ?></strong></h4>
									<?php if ($episode['rating'] !== '') : ?>
										<span class="rating">
											<?php if (isset($episode['rating'])) :
												for ($i = 0; $i < intval($episode['rating']); $i++) { ?>
													<i class="fa-solid fa-star"></i>
											<?php }
											endif; ?>
										</span>
									<?php endif; ?>
								</div>
								<div class="episode-main flex dir-change">
									<div class="episode-main-section thoughts">
										<h5 class="thoughts-title text-center">Thoughts</h5>
										<p><?= $episode['thoughts'] ?></p>
									</div>
									<div class="episode-main-section quotes">
										<h5 class="quote-title text-center">Quotes</h5>
										<ul>
											<?php foreach ($episode['quotes'] as $quote) : ?>
												<?php if ($quote !== '') : ?>
													<?php if (substr($quote, 0, 1) === '*') { ?>
														<li><?= $quote ?></li>
													<?php } else { ?>
														<li>"<?= $quote ?>"</li>
													<?php } ?>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</section>
						<?php endforeach; ?>
					<?php endif; ?>
				</section>
			<?php endforeach; ?>
		</section>
	</main>

	<?php require_once 'include/page-nav.php'; ?>
	<?php require_once 'include/footer.php'; ?>
</body>

</html>