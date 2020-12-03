<!DOCTYPE html>
<html>
    <head>
        <title><?= empty($title) ? WEBSITE_DEFAULT_NAME : $title . " - " . WEBSITE_DEFAULT_NAME?> </title>
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body class="backGroung contour-center container">
        <header class="row">
            <img src="img/header/logo.jpg" class="col w1">
            <a href="<?= $this->router->getIndexURL()?>"> <h1 class="col center-text titreSite w10"><?=WEBSITE_DEFAULT_NAME?></h1> <a>
            <div class="col center-text boutonHeader w1"> <?=$this->router->getMenu()?> </div>

        </header>
        <main>
            <?= $this->generateFeedbackDiv() ?>
