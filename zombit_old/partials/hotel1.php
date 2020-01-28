<?php
if($_SESSION["hotel1"] == 0)
{
Echo "<div id='div3'>het is donker in het toilet, het licht werkt niet meer...</div>
<div id='div4'>
<a href='../index.php?id=hotel11'>Controleer de hokjes voor mensen die je kunnen helpen</a>
<br />";
$hotel1 = $_SESSION["hotel1"]; $hotel1 = $hotel1 + 1;  $_SESSION["hotel1"] = $hotel1;
}
else
{
echo"<div id='div3'>Je hebt hier al gezocht.</div>";
}
echo"<div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby.</a></div><br />";
?>