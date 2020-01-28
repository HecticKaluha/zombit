<?php
if($_SESSION["hotel211"] == 0)
{
echo"<div id='div3'>Je vind een geweer met 30 kogels.</div>";
$hotel211 = $_SESSION["hotel211"]; $hotel211 = $hotel211 + 1;  $_SESSION["hotel211"] = $hotel211;
$geweer = $_SESSION["geweer"]; $geweer = $geweer + 1; $_SESSION["geweer"] = $geweer;
$kogels = $_SESSION["kogels"]; $kogels = $kogels + 30; $_SESSION["kogels"] = $kogels;
$planken = $_SESSION["planken"]; $planken = $planken + 13; $_SESSION["planken"] = $planken;
}
else
{
echo"<div id='div3'>Je hebt hier al gezocht.</div>";
}
echo"<div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby</a></div><br />"
?>
 
