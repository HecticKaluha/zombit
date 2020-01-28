<?php
if($_SESSION["hotel211"] == 0)
{
$hotel232 = $_SESSION["hotel232"]; $hotel232 = $hotel232 + 1;  $_SESSION["hotel232"] = $hotel232;
$planken = $_SESSION["planken"]; $planken = $planken + 7; $_SESSION["planken"] = $planken;
}
?>
<div id='div3'> 
De muren zijn besmeurd met bloed, en er is een bloedspoor naar de badkamer. Je vind hier 7 planken.</div>
<div id='div4'>
<?php
$_SESSION["id"] = hotel2321;
?>


<a href='battleengine.php'>Ga de badkamer binnen</a><br><br>
<a href='index.php?id=hotel'>Terug naar de lobby</a>
</div> 
