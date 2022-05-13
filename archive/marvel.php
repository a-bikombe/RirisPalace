<?php
require_once 'config/session.php';
$pageTitle = 'Marvel';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= strtolower($pageTitle) ?>
    </title>
    <link rel="icon" href="images/icons/spiderman.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/marvel.css" rel="stylesheet">
    <link href="css/main-mobile.css" rel="stylesheet" media="screen and (max-width:575px)">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/34e100283f.js" crossorigin="anonymous" defer></script>
    <script src="js/main.js" defer></script>
</head>


<body>
    <?php require_once 'include/header.php'; ?>
    <main>
        <h1><?= $pageTitle ?></h1>
    </main>
    <?php require_once 'include/footer.php'; ?>
</body>

</html>