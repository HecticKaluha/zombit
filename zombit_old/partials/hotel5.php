<?php
if($_SESSION["hotel5"] == 0)
{
echo"<div id='div3'>Je komt de wasserette binnen. Er staan een paar machines aan en er is een hoop lawaai. 
Er is een wasmachine die draait, maar hij is helemaal rood.
Zodra je dichterbij komt zie je dat het bloed is en dat er een kind inzit. 
</div>
<div id='div4'>
<a href='index.php?id=hotel51'>Zet het apparaat uit en kijk naar binnen</a>
<br />
<a href='index.php?id=hotel52'>Doe niks met het apparaat en doorzoek de kamer</a>
</div> ";
$hotel5 = $_SESSION["hotel5"]; $hotel5 = $hotel5 + 1;  $_SESSION["hotel5"] = $hotel5;
}
<div id='div3'>
else
{
echo"Je hebt hier al gezocht";
}
echo"
<a href='index.php?id=hotel'>Terug naar de lobby</a><br />"
</div>
?>
 
