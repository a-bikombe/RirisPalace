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
        <section class="posts" aria-label="Static Posts">
            <!-- Monthly Hero Spotlight -->
            <?php foreach ($staticPosts as $postId => $post) : ?>
                <section class="post dir-col" aria-labelledby="<?= $postId ?>">
                    <div class="post-image">
                        <img src="<?= $post['image'] ?>" alt="<?= $popoststContent['title'] ?>">
                    </div>
                    <div class="post-text">
                        <h2 id="<?= $postId ?>"><?= $post['title'] ?></h2>
                        <p><?= $post['text'] ?></p>
                    </div>
                </section>
            <?php endforeach; ?>
        </section>

        <section class="posts" aria-label="Dynamic Posts">
            <!-- Monthly Hero Spotlight -->
            <?php foreach ($dynamicPosts as $postId => $postContent) : ?>
                <section class="post dir-col" aria-labelledby="<?= $postId ?>">
                    <div class="post-image">
                        <img src="<?= $postContent['image'] ?>" alt="<?= $postContent['title'] ?>">
                    </div>
                    <div class="post-text">
                        <h2 id="<?= $postId ?>"><?= $postContent['title'] ?></h2>
                        <p><?= $postContent['text'] ?></p>
                    </div>
                </section>
            <?php endforeach; ?>
        </section>

    </main>
    <?php require_once 'include/footer.php'; ?>
</body>

</html>