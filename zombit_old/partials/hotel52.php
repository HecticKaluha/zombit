<?php
if($_SESSION["hotel52"] == 0)
{
$hotel52 = $_SESSION["hotel52"]; $hotel52 = $hotel52 + 1;  $_SESSION["hotel52"] = $hotel52;
$stof = $_SESSION["stof"]; $stof = $stof + 3; $_SESSION["stof"] = $stof;
echo"<div id='div3'>Je hebt 3 lappen stof gevonden
</div>
<br> <div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby</a></div>";
}
else
{
echo"<div id='div3'>Je hebt hier al gezocht</div>
<div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby</a><br>";
}

?>

