<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="created" content="vr, 09 nov 2012 10:22:03 GMT">
    <meta name="description" content="A textb ased postapocalyptic survival game in php">
    <meta name="keywords" content="zombie">
    <title>Zombit</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    Zombit Alpha 1.2.0
    <?php
    if(isset($_SESSION["ingelogd"])) {
        if ($_SESSION["ingelogd"] != 1) {
            printf(' <p style="text-align: right;">U bent nog niet ingelogd. <a href="accountopslaan.php">Inloggen</a>. </p>');
        } else {
            $username = $_SESSION["username"];
            printf('<p style="text-align:right;">Welkom %s. <a href="index.php?id=logout">Uitloggen</a><button class="button save" name="save" type="submit">Save</button> </p>', $username);
            $_SESSION['id'] = 'begin';
        }
    }
    else{
//        $bestand = "inloggen.php";
        $_SESSION['id'] = 'inloggen';
    }
    ?>
    <div id="container">

        <div id="leftside"></div>

        <div id="inhoud">

            <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
            }
            else if(isset($_SESSION['id'])){
                $id = $_SESSION['id'];
            }
            else{
                $id = "";
            }
            if (empty($id) || $id == "home") {
                $bestand = "home.php";
            }
            if ($id == "begin") {
                $bestand = "begin.php";
            }
            if(in_array($id, ['inloggen', 'fouteinlog','accountmaken','logout','wachtwoordvergeten'])){
                $bestand = './auth/'.$id.'.php';
            }

            if (empty($bestand)) {
                $kans = rand(1, 100);
                if ($kans <= 95) {
                    $bestand = './partials/'.$id.".php";
                } else {
                    $_SESSION["id"] = $id;
                    header("Location: battleengine.php");
                }
            }

            include("$bestand");
            ?>
        </div>

        <div id="rightside"></div>
        <div id="hpbar">
            <p style="text-align:center;">
                <?php
                if(isset($_SESSION["leven"])){
                    $leven = $_SESSION["leven"];
                    if (isset($leven)) {
                        echo "<img src='$leven.png'/>";
                    }
                }
                ?>
            </p>
        </div>

    </div>

</body>
</html>