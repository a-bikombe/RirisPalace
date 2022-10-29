<?php
require_once 'config/session.php';
require_once 'config/marvel-posts.php';
$pageTitle = 'Marvel';
$headerTitle = 'Your Friendly Neighborhood Pitstop for Superheroes!';

$iconPath = 'images/icons/spiderman.jpeg';

$styles = [
    'marvel'
];

$mobileStyles = [
    'main' => '730'
];

$scripts = [
    'main'
];
?>

<!DOCTYPE html>
<html>

<?php require_once 'include/head-tag.php'; ?>

<body id="marvel">
    <?php require_once 'include/loading-page.php'; ?>
    <?php require_once 'include/header.php'; ?>
    <main>
        <h1><?= $headerTitle ?></h1>

        <!-- Hero Scrollbar -->
        <section class="heroes" aria-label="Heroes">
            <?php foreach ($heroes as $heroId => $hero) : ?>
                <div id="<?= $heroId ?>">
                    <a href="<?= $hero['url'] ?>">
                        <img src="<?= $hero['image'] ?>" alt="<?= $hero['alt'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </section>

        <!-- Static Posts -->
        <section class="posts flex dir-col" id="spotlights" aria-label="Spotlights">
            <?php foreach ($spotlights as $postId => $post) : ?>
                <section class="post flex dir-change" aria-labelledby="<?= $postId ?>">
                    <div class="post-image">
                        <img class="post-image-src" src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
                    </div>
                    <div class="post-text">
                        <h2 id="<?= $postId ?>"><?= $post['title'] ?></h2>
                        <p><?= $post['text'] ?></p>
                    </div>
                </section>
            <?php endforeach; ?>
        </section>

        <!-- Dynamic Posts -->
        <section class="posts flex dir-col"  id="posts" aria-label="Posts">
            <?php foreach ($posts as $postId => $post) : ?>
                <section class="post flex dir-change" aria-labelledby="<?= $postId ?>">
                    <div class="post-image">
                        <img class="post-image-src" src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
                    </div>
                    <div class="post-text">
                        <h2 id="<?= $postId ?>"><?= $post['title'] ?></h2>
                        <p><?= $post['text'] ?></p>
                    </div>
                </section>
            <?php endforeach; ?>
        </section>

    </main>
    <?php require_once 'include/footer.php'; ?>
</body>

</html>