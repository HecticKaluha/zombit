
<div id='div3'>De kluis heeft een cijferslot.</div>
<div id='div4'>
<form method="post" action="index.php?id=hotel2311">
<input type="text" name="code" />
<input type="submit" name="verzend" value="Open" />
</form>
<?php
if(isset($_POST["verzend"]))
{
$code = $_POST["code"];
if($code == '41557')
{
echo"Je hebt de kluis geopend! <br /><a href='index.php?id=hotel23111'>Kijk wat er inzit</a>";
}
else
{
echo"De code is onjuist, probeer is nog een keer <a href='index.php?id=hotel'>of ga terug naar de lobby</a>.";
}
}
?>
</div>