<?php

ini_set('display_errors', 1);
require_once 'config/session.php';
// front-end of kpop-groups.php
require_once 'config/kpop-groups.php';
$pageTitle = 'KPop';

$iconPath = 'images/icons/kpop.png';

$styles = [
	'kpop'
];

$mobileStyles = [
	'main' => '780',
	'kpop' => '780'
];

$scripts = [
	'main',
	'kpop'
];

$ultBias = 'HueningKai';

// populates ult bias
foreach ($groups as $categoryID => $category) {
	foreach ($category['groups'] as $groupID => $group) {
		if (count($group) > 1) {
			foreach ($group['members'] as $member => $memberInfo) {
				if ($member === $ultBias) {
					$ultBiasGroup = $group['name'];
					$ultBiasImage = $group['members'][$member]['image'];
				}
			}
		}
	}
}

$underConstruction = '<img class="construction-gif" src="images/gifs/pikachu-construction.gif" alt="Under Construction">';

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php' ?>

<body id="kpop" class="grid h-100 w-100">
	<?php require_once 'include/loading-page.php'; ?>
	<?php require_once 'include/header.php'; ?>
	<!-- sidebar nav -->
	<aside id="group-sidebar">
		<section class="text-center fixed" id="group-nav">
			<h5 class="border-5px p-1vw" id="group-nav-header">Groups</h5>
			<ul class="nav flex-column">
				<?php foreach ($groups as $categoryID => $category) : ?>
					<li class="nav-item border-5px">
						<a class="nav-link" href="#<?= $categoryID ?>"><strong><?= $category['name'] ?></strong></a>
					</li>
					<?php foreach ($category['groups'] as $groupID => $group) : ?>
						<li class="nav-item border-5px">
							<a class="nav-link" href="#<?= $groupID ?>"><?= $group['name'] ?></a>
						</li>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</ul>
		</section>
	</aside>
	<!-- main content -->
	<main>
		<h1><?= $pageTitle ?></h1>
		<!--
			<div class="search">
                    <input type="text" class="search-input" id="search-bar" placeholder="Search for a Group..." pattern="[^<>]+">
                    <button type="button">Search</button>
                    <output class="search-input" id="search-output"></output>
            </div>
		-->
		<section class="kpop-section text-center flex flex-align-center" id="ults">
			<h2 class="hidden">Ults</h2>
			<section class="ult border-10px text-center" id="ult-bias">
				<h2>Ult Bias</h2>
				<section class="ult-info flex flex-align-center">
					<h4><?= $ultBias ?> (<?= $ultBiasGroup ?>)</h4>
					<button data-bs-toggle="modal" data-bs-target="#ult-bias-modal" id="ult-bias-btn" class="ult-btn p-0 border-5px">
						<img src="<?= $ultBiasImage ?>" class="ult-btn-img p-0 border-5px" alt="Ult Bias Thumbnail">
					</button>
					<div class="modal fade" id="ult-bias-modal" tabindex="-1" aria-labelledby="ult-bias-modal-label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="ult-bias-modal-label"><?= $ultBias ?>
										(<?= $ultBiasGroup ?>)</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body flex-center">
									<img data-src="<?= $ultBiasImage ?>" class="modal-img m-1vw" alt="Ult Bias">
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
			<section class="ult border-10px text-center" id="ult-group">
				<h2>Ult Group</h2>
				<section class="ult-info flex flex-align-center">
					<!-- array_keys($group['members'])[1] -->
					<h4><?= $groups['active']['groups'][array_key_first($groups['active']['groups'])]['name'] ?></h4>
					<button data-bs-toggle="modal" data-bs-target="#ult-group-modal" id="ult-group-btn" class="ult-btn p-0 border-5px">
						<img src="<?= $groups['active']['groups'][array_key_first($groups['active']['groups'])]['groupImage'] ?>" class="ult-btn-img p-0 border-5px" alt="Ult Group Thumbnail">
					</button>
					<div class="modal fade" id="ult-group-modal" tabindex="-1" aria-labelledby="ult-group-modal-label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="ult-group-modal-label">
										<?= $groups['active']['groups'][array_key_first($groups['active']['groups'])]['name'] ?>
									</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body flex-center">
									<img data-src="<?= $groups['active']['groups'][array_key_first($groups['active']['groups'])]['groupImage'] ?>" class="modal-img m-1vw" alt="Ult Group">
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
		<!-- group content -->
		<section class="kpop-section border-10px" id="groups">
			<h2>Groups</h2>
			<?php foreach ($groups as $categoryID => $category) : ?>
				<section class="group-category border-10px" id="<?= $categoryID ?>">
					<h3 data-bs-toggle="modal" data-bs-target="#<?= $categoryID ?>-ranking-modal" class="group-category-button"><?= $category['name'] ?></h3>
					<div class="modal fade" id="<?= $categoryID ?>-ranking-modal" tabindex="-1" aria-labelledby="<?= $categoryID ?>-ranking-modal-label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="<?= $categoryID ?>-ranking-modal-label">
										<?= $category['name'] ?> Ranking
									</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body flex-center">
									<ol>
										<?php foreach ($category['groups'] as $groupID => $group) : ?>
											<li class="group-name-rank" id="<?= $groupID ?>-rank">
												<a href="#<?= $groupID ?>" class="no-decor"><?= $group['name'] ?></a>
											</li>
										<?php endforeach; ?>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<?php foreach ($category['groups'] as $groupID => $group) : ?>
						<?php if (count($group) > 1) : ?>
							<section class="group border-10px" id="<?= $groupID ?>">
								<header class="group-name text-center flex-center">
									<h3>
										<?= $group['name'] ?>
										<button type="button" class="btn btn-outline-secondary image-btn p-0" title="<?= $group['name'] ?> Image" data-bs-toggle="modal" data-bs-target="#<?= $groupID ?>-image-modal">
											<i class="fa-solid fa-image fa-lg"></i>
										</button>
										<div class="modal fade" id="<?= $groupID ?>-image-modal" tabindex="-1" aria-labelledby="<?= $groupID ?>-image-modal-label" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="<?= $groupID ?>-image-modal-label">
															<?= $group['name'] ?>
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body flex-center">
														<?php if (!empty($group['groupImage'])) { ?>
															<img data-src="<?= $group['groupImage'] ?>" class="modal-img m-1vw" alt="<?= $group['name'] ?>">
														<?php } else { ?> <?= $underConstruction ?> <?php } ?>
													</div>
												</div>
											</div>
										</div>
									</h3>
								</header>
								<section class="group-stats flex flex-align-center">
									<h6 title="Debut Year"><?= $group['debut'] ?></h6>
									<h6 title="<?= count($group['members']) ?> Members">OT<?= count($group['members']) ?></h6>
									<?php foreach ($group['members'] as $member => $memberInfo) : ?>
										<?php
										$memberBirthYear = intval(substr($memberInfo['birthday'], -4));
										if (!isset($oldestYear) || !isset($youngestYear)) {
											$oldestYear = $memberBirthYear;
											$youngestYear = $memberBirthYear;
										}
										if ($memberBirthYear > $youngestYear) {
											$youngestYear = $memberBirthYear;
										} else if ($memberBirthYear < $oldestYear) {
											$oldestYear = $memberBirthYear;
										}
										?>
									<?php endforeach; ?>
									<h6 title="Age Ranges">
										'<?= substr($oldestYear, -2) ?>
										-
										'<?= substr($youngestYear, -2) ?>
									</h6>
								</section>
								<section class="group-info flex flex-align-center">
									<button class="group-property text-center bias" data-bs-toggle="modal" data-bs-target="#<?= $groupID ?>-bias-modal">Bias</button>
									<div class="modal fade" id="<?= $groupID ?>-bias-modal" tabindex="-1" aria-labelledby="<?= $groupID ?>-bias-modal-label" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="<?= $groupID ?>-bias-modal-label">
														<?= array_key_first($group['members']) ?>
													</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body flex-center">
													<?php if (!empty($group['members'][array_key_first($group['members'])]['image'])) { ?>
														<img data-src="<?= $group['members'][array_key_first($group['members'])]['image'] ?>" class="modal-img m-1vw" alt="<?= array_key_first($group['members']) ?>">
													<?php } else {
														echo $underConstruction;
													} ?>
												</div>
											</div>
										</div>
									</div>
									<button class="group-property text-center wrecker" data-bs-toggle="modal" data-bs-target="#<?= $groupID ?>-wrecker-modal">Wrecker</button>
									<div class="modal fade" id="<?= $groupID ?>-wrecker-modal" tabindex="-1" aria-labelledby="<?= $groupID ?>-wrecker-modal-label" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="<?= $groupID ?>-wrecker-modal-label">
														<?= array_keys($group['members'])[1] ?>
													</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body flex-center">
													<?php if (!empty($group['members'][array_keys($group['members'])[1]]['image'])) { ?>
														<img data-src="<?= $group['members'][array_keys($group['members'])[1]]['image'] ?>" class="modal-img m-1vw" alt="<?= array_keys($group['members'])[1] ?>">
													<?php } else {
														echo $underConstruction;
													} ?>
												</div>
											</div>
										</div>
									</div>
									<button class="group-property text-center ranking" data-bs-toggle="modal" data-bs-target="#<?= $groupID ?>-ranking-modal">Ranking</button>
									<div class="modal fade" id="<?= $groupID ?>-ranking-modal" tabindex="-1" aria-labelledby="<?= $groupID ?>-ranking-modal-label" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="<?= $groupID ?>-ranking-modal-label">
														<?= $group['name'] ?> Ranking
													</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body flex-center">
													<ol>
														<?php foreach ($group['members'] as $member => $memberInfo) : ?>
															<li class="member-name"><strong><?= $member ?></strong> (<?= $memberInfo['birthday'] ?>)
																<ul class="member-notes">
																	<?php foreach ($memberInfo['notes'] as $note) : ?>
																		<?php if (!empty($note)) : ?>
																			<li class="member-note"><?= $note ?></li>
																		<?php endif; ?>
																	<?php endforeach; ?>
																</ul>
															</li>
														<?php endforeach; ?>
													</ol>
												</div>
											</div>
										</div>
									</div>
									<button class="group-property text-center playlist" data-bs-toggle="modal" data-bs-target="#<?= $groupID ?>-playlist-modal"> Playlist </button>
									<div class="modal fade" id="<?= $groupID ?>-playlist-modal" tabindex="-1" aria-labelledby="<?= $groupID ?>-playlist-modal-label" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="<?= $groupID ?>-playlist-modal-label">My <?= $group['name'] ?> Playlist</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body flex-center">
													<?php if (!empty($group['playlist'])) { ?>
														<?= $underConstruction; ?>
														<!-- <iframe class="border-10px w-100" src="https://open.spotify.com/embed/playlist/<?= $group['playlist'] ?>?utm_source=generator" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe> -->
													<?php } else {
														echo $underConstruction;
													}
													unset($oldestYear, $youngestYear);
													?>
												</div>
											</div>
										</div>
									</div>
								</section>
							</section>
						<?php endif; ?>
					<?php endforeach; ?>
				</section>
			<?php endforeach; ?>
		</section>
		<!-- group content table -->
		<section class="kpop-section border-10px" id="content-dashboard">
			<h2>KPop Content Dashboard</h2>
			<section class="content-table text-center">
				<h3 class="hidden">Content Table</h3>
				<table>
					<thead class="uppercase bold">
						<tr>
							<th>Group</th>
							<th>Running Series</th>
							<th>Short Fun Content</th>
							<th>Longer Promo Content</th>
							<th>Vlogs</th>
							<th>Notes</th>
						</tr>
					</thead> <?php foreach ($groups as $categoryID => $category) : ?>
						<tbody>
							<?php foreach ($category['groups'] as $group) : ?> <?php if (count($group) > 1) : ?>
									<tr>
										<td class="group-name-table italic"><?= $group['name'] ?></td> <?php foreach ($group['content'] as $category => $content) : ?>
											<?php if (empty($content)) { ?>
												<td class="not-applicable">N/A</td>
											<?php } else { ?>
												<td class="content"><?= $content ?>
												</td>
											<?php } ?>
										<?php endforeach; ?>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						</tbody>
					<?php endforeach; ?>
				</table>
			</section>
		</section>
	</main>
	<?php require_once 'include/footer.php'; ?>
</body>

</html>