
<?php
if($_SESSION["hotel23111"] == 0)
{
$hotel23111 = $_SESSION["hotel23111"]; $hotel23111 = $hotel23111 + 1;  $_SESSION["hotel23111"] = $hotel23111;
$kogels = $_SESSION["kogels"]; $kogels = $kogels + 50; $_SESSION["kogels"] = $kogels;
$pixels = $_SESSION["pixels"]; $pixels = $pixels + 200; $_SESSION["pixels"] = $pixels;
$kaartje = $_SESSION["kaartje"]; $kaartje = $kaartje + 1; $_SESSION["kaartje"] = $kaartje;
echo"<div id='div3'>In de kluis vind je 50 kogels, 200 pixels, en een kaartje met de tekst 'E.N. De boulevard nr.16'.
Mark was onderweg naar E.N.De boulevard. Misschein is het iets belangrijks.</div>";
}
else
{
echo"<div id='div3'> Je hebt hier al gezocht </div>";
}
?>
<div id='div4'>
<a href='index.php?id=hotel'>Ga terug naar de lobby</a><br>

</div>