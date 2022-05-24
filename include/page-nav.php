<?php 
/* 
NAVIGATION POPULATION ARRAY TEMPLATE
$pageNav = [
	'id' => [
		'heading' => 'heading',
		'array' => $array
	]
];
*/
?>

<aside class="side-nav flex dir-col">
		<nav class="page-sections text-center border-5px">
			<ul class="page-sections-nav">
				<?php foreach ($pageNav as $navId => $pageSection) : ?>
					<li class="page-sections-nav-item heading"><a href="#<?= $navId ?>"><strong><?= $pageSection['heading'] ?></strong></a></li>
					<?php if (array_key_exists('array', $pageSection)) : ?>
						<?php foreach ($pageSection['array'] as $key => $value) : ?>
							<?php switch ($pageSection['array']) {
								case $seasons: ?>
									<li class="page-sections-nav-item"><a href="#<?= $key ?>-<?= $navId ?>"><?= $value['seasonName'] ?></a></li>
									<?php break; ?>
								<?php
								default: ?>
									<li class="page-sections-nav-item"><a href="#<?= $key ?>-<?= $navId ?>"><?= $pageSection['textContent'] ?></a></li>
									<?php break; ?>
							<?php } ?>
						<?php endforeach; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</nav>
		<button type="button" class="collapsible-nav-btn border-5px">
			<i class="collapse-icon fa-solid fa-chevron-right hidden"></i>
			<i class="uncollapse-icon fa-solid fa-chevron-left"></i>
		</button>
	</aside>