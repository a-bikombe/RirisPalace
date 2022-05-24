<?php 

$pageTitle = 'Are you lost?';

$iconPath = '/images/icons/403.png';

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

<!-- 
<head><meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="/images/icons/403.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/main-mobile.css" rel="stylesheet" media="screen and (max-width:600px)">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/34e100283f.js" crossorigin="anonymous" defer></script>
</head>
 -->
<body class="dark-theme" id="error">
    <main class="error-main flex-center text-center dir-col vh-100">
        <img src="/images/gifs/corg-sad.gif" alt="Corg Sad" class="gif">
        <section class="text" aria-label="404 Error Text">
            <h1>Uh Oh!</h1>
            <p>404.</p>
        </section>
    </main>
</body>

</html>