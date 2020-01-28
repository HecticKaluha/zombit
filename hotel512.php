<?php
if($_SESSION["hotel511"] == 0)
{
$hotel511 = $_SESSION["hotel511"]; $hotel511 = $hotel511 + 1;  $_SESSION["hotel511"] = $hotel511;
$vlees = $_SESSION["vlees"]; $vlees = $vlees + 1; $_SESSION["vlees"] = $vlees;
echo"<div id='div3'>Je hebt het vlees nu bij je. Misschien handig als lokmiddel voor zombies..
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

