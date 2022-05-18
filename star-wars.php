<?php
require_once 'config/session.php';
$pageTitle = 'Star Wars';

$iconPath = 'images/icons/vader.png';

$styles = [];

$mobileStyles = [
    'main' => '575'
];

$scripts = [
    'main'
];
?>

<!DOCTYPE html>
<html>

<?php require_once 'include/head-tag.php'; ?>

<body>
    <?php require_once 'include/loading-page.php'; ?>
    <?php require_once 'include/under-construction.php'; ?>
    <?php require_once 'include/header.php'; ?>
    <main>
        <h1><?= $pageTitle ?></h1>
    </main>
    <?php require_once 'include/footer.php'; ?>
</body>

</html>