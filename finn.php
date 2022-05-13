<?php
require_once 'config/session.php';

$pageTitle = 'The LOML';
$iconPath = 'images/icons/calpurnia.png';

$styles = [];

$mobileStyles = [
    'main' => '575'
];

$scripts = [
    'main',
    'finn'
];
?>

<!-- navbar -->
<?php

if (isset($_SESSION['loginSuccess'], $_SESSION['admin']) && $_SESSION['loginSuccess'] === true && $_SESSION['admin'] = true) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <?php require_once 'include/head-tag.php' ?>

    <body id="finn">
        <?php require_once 'include/header.php'; ?>
        <main>
            <!-- intro section -->
            <section class="text-center" id="intro">
                <h1>
                    I love Finn Wolfhard.
                </h1>
                <p>
                    I don't think that's a surprise to anyone. What are you gonna do, he's a fairly attractive guy. (This is me being calm. I can get pretty wild about him.) It's the hair, and the freckles.
                </p>
                <button type="button" class="btn btn-light" id="show-captions">Show/Hide Captions</button>
            </section>
            <!-- tab section -->
            <section id="finn-photos">
                <h2 class="text-center">
                    Reasons I'm In Love With Him
                </h2>
            </section>

        </main>

        <?php require_once 'include/footer.php'; ?>
    </body>

    </html>

<?php
} else {
    require_once '403.shtml';
}
?>