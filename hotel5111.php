<?php
if($_SESSION["hotel5111"] == 0)
{
$hotel5111 = $_SESSION["hotel5111"]; $hotel5111 = $hotel5111 + 1;  $_SESSION["hotel5111"] = $hotel5111;
$kettinkje = $_SESSION["kettinkje"]; $kettinkje = $kettinkje + 1; $_SESSION["kettinkje"] = $kettinkje;
echo"<div id='div3'>Je hebt nu het kettinkje.
</div>
<br> <div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby</a></div>";
}
else
{
echo"<div id='div3'>Je hebt hier al gezocht.</div>
<div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby</a><br>";
}

?>
