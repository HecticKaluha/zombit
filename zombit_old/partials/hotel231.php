
<?php
if($_SESSION["hotel231"] == 0)
{
echo"<div id='div3'>Kamer 666... De deur staat open en nagels zijn in de deur gekrast.. 
Je loopt naar binnen en op het bed staat 'Mark' gekerft... Je vriend was hier! <br /> 
Er staat een kluis onder het bed.</div>
<div id='div4'>
<a href='index.php?id=hotel2311'>Probeer de kluis open te maken.</a><br />
</div>";
$hotel231 = $_SESSION["hotel231"]; $hotel231 = $hotel231 + 1;  $_SESSION["hotel231"] = $hotel231;
}
else
{
echo"<div id='div3'>Je hebt hier al gezocht.</div>";
}
echo"<div id='div4'>
<a href='index.php?id=hotel'>Terug naar de lobby.</a></div><br />";
?>
 