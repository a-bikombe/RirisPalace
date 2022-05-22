<?php
require_once 'config/session.php';
$pageTitle = 'About Me';

$iconPath = 'images/icons/luca.png';

$styles = [];

$mobileStyles = [
    'main' => '600'
];

$scripts = [
    'main'
];
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head-tag.php'; ?>

<body>

    <!-- bootstrap navbar -->
    <?php require_once 'include/loading-page.php'; ?>
    <?php require_once 'include/under-construction.php'; ?>
    <?php require_once 'include/header.php'; ?>

    <main>
        <h1><?= $pageTitle ?></h1>
    </main>

    <?php require_once 'include/footer.php'; ?>

</body>

</html>