<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="created" content="vr, 09 nov 2012 10:22:03 GMT">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A text based postapocalyptic survival game in php">
    <meta name="keywords" content="zombie">
    <title>Zombit</title>
    <link rel="stylesheet" type="text/css" href="<?= SOURCES ?>/style/style.css"/>
</head>
<body>
<p id="version">&copy;Zombit 2.0 Revamp</p>

<div id="container" class="flex flex-column">
    <img id="logo" src="<?= SOURCES ?>/img/logo.png">
    <div id="content" class="flex flex-row">

        <div id="left"></div>

        <div id="story" class="flex flex-column">
            <!--content goes here-->

            <?php
            if (!isset($error)) {
                include(ROOT . 'app/mvc/view/partials/level_template.php');
            } else {
                printf($message);
            }
            ?>

            <!--content ends here-->
        </div>

        <div id="right"></div>
    </div>
    <div id="hp">
        <?php
        if (isset($_SESSION["lives"])) {
            $lives = $_SESSION["lives"];
            if (isset($lives)) {
                printf('<img src="%s/img/%s.png"/>', SOURCES, $lives);
            }
        }
        ?>
    </div>
</div>


</body>
</html>
