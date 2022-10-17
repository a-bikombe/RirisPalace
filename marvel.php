<?php
require_once 'config/session.php';
$pageTitle = 'Marvel';

$iconPath = 'images/icons/spiderman.jpeg';

$styles = [];

$mobileStyles = [
    'main' => '600'
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
    <?php require_once 'include/header.php'; ?>
    <main>
        <h1><?= $pageTitle ?></h1>
    </main>
    <?php require_once 'include/footer.php'; ?>
</body>

</html>