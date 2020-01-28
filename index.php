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
    <script>
        <!--
        function fullwin() {
            window.open("http://zombit.nl/index.php?id=inloggen", "bfs", "fullscreen,scrollbars")
        }

        //-->
    </script>

</head>
<body>
    Zombit Alpha 1.2.0
    <?php
    if(isset($_SESSION["ingelogd"])) {
        if ($_SESSION["ingelogd"] != 1) {
            printf(' <p style="text-align: right;">U bent nog niet ingelogd. <a href="accountopslaan.php">Inloggen</a>. </p>');
        } else {
            $username = $_SESSION["username"];
            printf('<p style="text-align:right;">Welkom $username. <a href="index.php?id=logout">Uitloggen</a><button class="button save" name="save" type="submit">Save</button> </p>');
        }
    }
    else{
        header("Location: /index.php?id=inloggen");
//        $_SESSION['id'] = 'inloggen';
    }
    ?>
    <div id="container">

        <div id="leftside"></div>

        <div id="inhoud">

            <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
            }
            else{

            }
//            $id = $_SESSION['id'];
            if (empty($id)) {
                $bestand = "home.php";
            }
            if ($id == "home") {
                $bestand = "home.php";
            }
            if ($id == "inloggen") {
                $bestand = "inloggen.php";
            }
            if ($id == "fouteinlog") {
                $bestand = "fouteinlog.php";
            }
            if ($id == "accountmaken") {
                $bestand = "accountmaken.php";
            }
            if ($id == "logout") {
                $bestand = "logout.php";
            }
            if ($id == "begin") {
                $bestand = "begin.php";
            }
            if ($id == "wachtwoordvergeten") {
                $bestand = "wachtwoordvergeten.php";
            }
            if (empty($bestand)) {
                $kans = rand(1, 100);
                if ($kans <= 95) {
                    if ($id == "1") {
                        $bestand = "1.php";
                    } elseif ($id == "2") {
                        $bestand = "2.php";
                    } elseif ($id == "11") {
                        $bestand = "11.php";
                    } elseif ($id == "12") {
                        $bestand = "12.php";
                    } elseif ($id == "21") {
                        $bestand = "21.php";
                    } elseif ($id == "22") {
                        $bestand = "22.php";
                    } elseif ($id == "111") {
                        $bestand = "111.php";
                    } elseif ($id == "112") {
                        $bestand = "112.php";
                    } elseif ($id == "121") {
                        $bestand = "121.php";
                    } elseif ($id == "122") {
                        $bestand = "122.php";
                    } elseif ($id == "121212") {
                        $bestand = "121212.php";
                    } elseif ($id == "1212121") {
                        $bestand = "1212121.php";
                    } elseif ($id == "121211") {
                        $bestand = "121211.php";
                    } elseif ($id == "1222") {
                        $bestand = "1222.php";
                    } elseif ($id == "12222") {
                        $bestand = "12222.php";
                    } elseif ($id == "122221") {
                        $bestand = "122221.php";
                    } elseif ($id == "1222211") {
                        $bestand = "1222211.php";
                    } elseif ($id == "12222111") {
                        $bestand = "12222111.php";
                    } elseif ($id == "12222112") {
                        $bestand = "12222112.php";
                    } elseif ($id == "122221121") {
                        $bestand = "122221121.php";
                    } elseif ($id == "1222211211") {
                        $bestand = "1222211211.php";
                    } elseif ($id == "1222212") {
                        $bestand = "1222212.php";
                    } elseif ($id == "12222121") {
                        $bestand = "12222121.php";
                    } elseif ($id == "122221211") {
                        $bestand = "122221211.php";
                    } elseif ($id == "122222") {
                        $bestand = "122222.php";
                    } elseif ($id == "1222221") {
                        $bestand = "1222221.php";
                    } elseif ($id == "12221") {
                        $bestand = "12221.php";
                    } elseif ($id == "122212") {
                        $bestand = "122212.php";
                    } elseif ($id == "1222121") {
                        $bestand = "1222121.php";
                    } elseif ($id == "12221211") {
                        $bestand = "12221211.php";
                    } elseif ($id == "122211") {
                        $bestand = "122211.php";
                    } elseif ($id == "1222111") {
                        $bestand = "1222111.php";
                    } elseif ($id == "1221") {
                        $bestand = "1221.php";
                    } elseif ($id == "12211") {
                        $bestand = "12211.php";
                    } elseif ($id == "122111") {
                        $bestand = "122111.php";
                    } elseif ($id == "1221111") {
                        $bestand = "1221111.php";
                    } elseif ($id == "12211111") {
                        $bestand = "12211111.php";
                    } elseif ($id == "1221112") {
                        $bestand = "1221112.php";
                    } elseif ($id == "12211121") {
                        $bestand = "12211121.php";
                    } elseif ($id == "122112") {
                        $bestand = "122112.php";
                    } elseif ($id == "1221121") {
                        $bestand = "1221121.php";
                    } elseif ($id == "12212") {
                        $bestand = "12212.php";
                    } elseif ($id == "122121") {
                        $bestand = "122121.php";
                    } elseif ($id == "1121") {
                        $bestand = "1121.php";
                    } elseif ($id == "1122") {
                        $bestand = "1122.php";
                    } elseif ($id == "1111") {
                        $bestand = "1111.php";
                    } elseif ($id == "1112") {
                        $bestand = "1112.php";
                    } elseif ($id == "1211") {
                        $bestand = "1211.php";
                    } elseif ($id == "121111") {
                        $bestand = "121111.php";
                    } elseif ($id == "1211111") {
                        $bestand = "1211111.php";
                    } elseif ($id == "1212") {
                        $bestand = "1212.php";
                    } elseif ($id == "11221") {
                        $bestand = "11221.php";
                    } elseif ($id == "11121") {
                        $bestand = "11121.php";
                    } elseif ($id == "11211") {
                        $bestand = "11211.php";
                    } elseif ($id == "11212") {
                        $bestand = "11212.php";
                    } elseif ($id == "112121") {
                        $bestand = "112121.php";
                    } elseif ($id == "112111") {
                        $bestand = "112111.php";
                    } elseif ($id == "1121211") {
                        $bestand = "1121211.php";
                    } elseif ($id == "11221211") {
                        $bestand = "11221211.php";
                    } elseif ($id == "112212111") {
                        $bestand = "112212111.php";
                    } elseif ($id == "12111") {
                        $bestand = "12111.php";
                    } elseif ($id == "12112") {
                        $bestand = "12112.php";
                    } elseif ($id == "11111") {
                        $bestand = "11111.php";
                    } elseif ($id == "111111") {
                        $bestand = "111111.php";
                    } elseif ($id == "1111111") {
                        $bestand = "1111111.php";
                    } elseif ($id == "12121") {
                        $bestand = "12121.php";
                    } elseif ($id == "12122") {
                        $bestand = "12122.php";
                    } elseif ($id == "121121") {
                        $bestand = "121121.php";
                    } elseif ($id == "112212") {
                        $bestand = "112212.php";
                    } elseif ($id == "1122121") {
                        $bestand = "1122121.php";
                    } elseif ($id == "121221") {
                        $bestand = "121221.htm";
                    } elseif ($id == "1212211") {
                        $bestand = "1212211.php";
                    } elseif ($id == "12122111") {
                        $bestand = "12122111.php";
                    } elseif ($id == "121221111") {
                        $bestand = "121221111.php";
                    } elseif ($id == "211") {
                        $bestand = "211.php";
                    } elseif ($id == "2111") {
                        $bestand = "2111.php";
                    } elseif ($id == "21111") {
                        $bestand = "21111.php";
                    } elseif ($id == "21112") {
                        $bestand = "21112.php";
                    } elseif ($id == "2112") {
                        $bestand = "2112.php";
                    } elseif ($id == "212") {
                        $bestand = "212.php";
                    } elseif ($id == "221") {
                        $bestand = "221.php";
                    } elseif ($id == "2211") {
                        $bestand = "2211.php";
                    } elseif ($id == "2212") {
                        $bestand = "2212.php";
                    } elseif ($id == "22121") {
                        $bestand = "22121.php";
                    } elseif ($id == "222") {
                        $bestand = "222.php";
                    } elseif ($id == "2221") {
                        $bestand = "2221.php";
                    } elseif ($id == "22211") {
                        $bestand = "22211.php";
                    } elseif ($id == "222111") {
                        $bestand = "222111.php";
                    } elseif ($id == "222112") {
                        $bestand = "222112.php";
                    } elseif ($id == "2221121") {
                        $bestand = "2221121.php";
                    } elseif ($id == "22212") {
                        $bestand = "22212.php";
                    } elseif ($id == "222121") {
                        $bestand = "222121.php";
                    } elseif ($id == "2221211") {
                        $bestand = "2221211.php";
                    } elseif ($id == "2222") {
                        $bestand = "2222.php";
                    } elseif ($id == "112211") {
                        $bestand = "112211.php";
                    } elseif ($id == "11221211") {
                        $bestand = "11221211.php";
                    } elseif ($id == "11222") {
                        $bestand = "11222.php";
                    } elseif ($id == "12122112") {
                        $bestand = "12122112.php";
                    } elseif ($id == "hotel") {
                        $bestand = "hotel.php";
                    } elseif ($id == "hotel1") {
                        $bestand = "hotel1.php";
                    } elseif ($id == "hotel11") {
                        $bestand = "hotel11.php";
                    } elseif ($id == "hotel111") {
                        $bestand = "hotel111.php";
                    } elseif ($id == "hotel2") {
                        $bestand = "hotel2.php";
                    } elseif ($id == "hotel21") {
                        $bestand = "hotel21.php";
                    } elseif ($id == "hotel22") {
                        $bestand = "hotel22.php";
                    } elseif ($id == "hotel23") {
                        $bestand = "hotel23.php";
                    } elseif ($id == "hotel211") {
                        $bestand = "hotel211.php";
                    } elseif ($id == "hotel212") {
                        $bestand = "hotel212.php";
                    } elseif ($id == "hotel221") {
                        $bestand = "hotel221.php";
                    } elseif ($id == "hotel231") {
                        $bestand = "hotel231.php";
                    } elseif ($id == "hotel232") {
                        $bestand = "hotel232.php";
                    } elseif ($id == "hotel2311") {
                        $bestand = "hotel2311.php";
                    } elseif ($id == "hotel2321") {
                        $bestand = "hotel2321.php";
                    } elseif ($id == "hotel23111") {
                        $bestand = "hotel23111.php";
                    } elseif ($id == "hotel3") {
                        $bestand = "hotel3.php";
                    } elseif ($id == "hotel31") {
                        $bestand = "hotel31.php";
                    } elseif ($id == "hotel4") {
                        $bestand = "hotel4.php";
                    } elseif ($id == "hotel5") {
                        $bestand = "hotel5.php";
                    } elseif ($id == "hotel51") {
                        $bestand = "hotel51.php";
                    } elseif ($id == "hotel52") {
                        $bestand = "hotel52.php";
                    } elseif ($id == "hotel511") {
                        $bestand = "hotel511.php";
                    } elseif ($id == "hotel512") {
                        $bestand = "hotel512.php";
                    } elseif ($id == "hotel5111") {
                        $bestand = "hotel5111.php";
                    } elseif ($id == "hotel5112") {
                        $bestand = "hotel5112.php";
                    } elseif ($id == "s") {
                        $bestand = "stad.php";
                    } elseif ($id == "casino") {
                        $bestand = "casino.php";
                    } elseif ($id == "gameover") {
                        $bestand = "gameover.php";
                    } elseif ($id == "winkel") {
                        $bestand = "winkel.php";
                    } elseif ($id == "winkel1") {
                        $bestand = "winkel1.php";
                    } elseif ($id == "winkel2") {
                        $bestand = "winkel2.php";
                    } elseif ($id == "winkel11") {
                        $bestand = "winkel11.php";
                    } elseif ($id == "winkel12") {
                        $bestand = "winkel12.php";
                    } elseif ($id == "winkel111") {
                        $bestand = "winkel111.php";
                    } elseif ($id == "winkel112") {
                        $bestand = "winkel112.php";
                    } elseif ($id == "winkel121") {
                        $bestand = "winkel121.php";
                    } elseif ($id == "winkel1111") {
                        $bestand = "winkel1111.php";
                    } elseif ($id == "winkel1121") {
                        $bestand = "winkel1121.php";
                    } elseif ($id == "winkel1211") {
                        $bestand = "winkel1211.php";
                    }

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