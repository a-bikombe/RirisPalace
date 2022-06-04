<?php
require_once 'config/session.php';
require_once 'config/arianna.php';
$pageTitle = 'About Me';

$iconPath = 'images/icons/luca.png';

$styles = [
    'about'
];

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

<body id="about">

    <!-- bootstrap navbar -->
    <?php require_once 'include/loading-page.php'; ?>
    <?php require_once 'include/header.php'; ?>

    <main class="text-center">
        <h1><?= $pageTitle ?></h1>
        <div class="about-sections flex-center dir-col">
            <div class="about-sections-row flex dir-change">
                <section id="bio" class="about-section flex-center" aria-labelledby="bio-title">
                    <h2 id="bio-title">Bio</h2>
                    <?= $bio ?>
                </section>
                <section id="personality" class="about-section flex-center" aria-labelledby="personality-title">
                    <h2 id="personality-title">Personality</h2>
                    <?php foreach ($personality as $categoryId => $category) : ?>
                        <ul class="<?= $categoryId ?> flex-align dir-change">
                            <?php foreach ($category as $type) : ?>
                                <li><?= $type ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                </section>
                <section id="pets" class="about-section flex-center" aria-labelledby="pets-title">
                    <h2 id="pets-title">Pets</h2>
                    <?php foreach ($pets as $name => $image) : ?>
                        <img src="<?= $image ?>" alt="<?= $name ?>">
                        <p class="subtitle"><?= $name ?></p>
                    <?php endforeach; ?>
                </section>
            </div>
            <div class="about-sections-row flex dir-change">
                <section id="hobbies" class="about-section flex-center" aria-labelledby="hobbies-title">
                    <h2 id="hobbies-title">Hobbies</h2>
                    <div id="hobbies-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($hobbies as $hobby => $image) : ?>
                                <?php $firstHobby = array_key_first($hobbies); ?> <div class="carousel-item
												<?php if ($hobby === $firstHobby) { ?> active
												<?php } ?>
												" data-bs-interval="5000">
                                    <img src="<?= $image ?>" class="d-block w-100 character-image" alt="<?= $hobby ?>">
                                    <div class="carousel-caption d-none d-md-block p-0">
                                        <h5><?= $hobby ?></h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#hobbies-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#hobbies-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
                <section id="celebrities" class="about-section flex-center" aria-labelledby="celebrities-title">
                    <h2 id="celebrities-title">Celebrity Crushes</h2>
                    <div class="celebrity-container flex-center dir-row">
                        <?php foreach ($celebrities as $celebrity => $image) : ?>
                            <img src="<?= $image ?>" alt="<?= $celebrity ?>" title="<?= $celebrity ?>">
                        <?php endforeach; ?>
                    </div>
                </section>
                <section id="kinlist" class="about-section flex-center" aria-labelledby="kinlist-title">
                    <h2 id="kinlist-title">Kinlist</h2>
                    <p class="hidden"><?= $kinDefinition ?></p>







































                    <?php foreach ($kinlist as $character => $image) : ?>
                        <img src="<?= $image ?>" alt="<?= $character ?>">
                        <p class="subtitle"><?= $character ?></p>
                    <?php endforeach; ?>
                </section>
            </div>
        </div>

    </main>

    <?php require_once 'include/footer.php'; ?>

</body>

</html>