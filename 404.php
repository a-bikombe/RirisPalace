<?php

$pageTitle = 'Are you lost?';

$iconPath = 'images/icons/403.png';

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

<body class="dark-theme" id="error">
    <main class="error-main flex-center text-center dir-col vh-100">
        <img src="/images/gifs/corg-sad.gif" alt="Corg Sad" class="gif">
        <section class="text" aria-label="404 Error Text">
            <h1>Uh Oh!</h1>
            <p>I don't know how to help you. Maybe you typed in the wrong address? Was given the wrong link? You can figure it out; I believe in you.</p>
            <p>Click <a href="/">here</a> to return to the homepage.</p>
        </section>
    </main>
</body>

</html>