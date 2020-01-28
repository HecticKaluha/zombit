<?php
if($_SESSION["hotel5112"] == 0)
{
$hotel5112 = $_SESSION["hotel5112"]; $hotel5112 = $hotel5112 + 1;  $_SESSION["hotel5112"] = $hotel5112;
$levenspotion = $_SESSION["levenspotion"]; $levenspotion = $levenspotion + 3; $_SESSION["levenspotion"] = $levenspotion;
$energyrepen = $_SESSION["energyrepen"]; $energyrepen = $energyrepen + 1; $_SESSION["energyrepen"] = $energyrepen;
$schoenen = $_SESSION["schoenen"]; $schoenen = $schoenen + 1; $_SESSION["schoenen"] = $schoenen;
echo"<div id='div3'>Je heb 3 levenspotions, 1 energyreep en 1 paar schoenen.
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
