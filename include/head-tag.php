<?php

$meta = [
	'charset' => 'charset="utf-8"',
	'viewport' => 'name="viewport" content="width=device-width, initial-scale=1.0"'
];

$cdnStyles = [
	/* bootstrap css */
	'bootstrapCSS' => 'href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"'
];

$cdnScripts = [
	/* bootstrap js */
	'bootstrapJS' => 'src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer',
	/* font awesome */
	'fontAwesome' => 'src="https://kit.fontawesome.com/f6cc5a7fc1.js" crossorigin="anonymous"'
];

$version = '1.1.5';

?>

<head>

	<?php foreach ($meta as $tag) : ?>
		<meta <?= $tag ?>>
	<?php endforeach; ?>

	<title> <?= strtolower($pageTitle) ?> </title>

	<link rel="icon" type="image/png" href="<?= $iconPath ?>">

	<?php foreach ($cdnStyles as $style) : ?>
		<link <?= $style ?>>
	<?php endforeach; ?>

	<link href="css/main.css?v=<?= $version ?>" rel="stylesheet">

	<?php foreach ($styles as $style) : ?>
		<link href="css/<?= $style ?>.css?v=<?= $version ?>" rel="stylesheet">
	<?php endforeach; ?>

	<?php foreach ($mobileStyles as $style => $width) : ?>
		<link href="css/<?= $style ?>-mobile.css?v=<?= $version ?>" rel="stylesheet" media="screen and (max-width:<?= $width ?>px)">
	<?php endforeach; ?>

	<?php foreach ($cdnScripts as $script) : ?>
		<script <?= $script ?>></script>
	<?php endforeach; ?>

	<?php foreach ($scripts as $script) : ?>
		<script src="js/<?= $script ?>.js?v=<?= $version ?>" defer></script>
	<?php endforeach; ?>

</head>