<?php
$winkelstoryline = $_SESSION["winkelstoryline"];
if ($winkelstoryline == 1)
{ 
header('Location: index.php?id=shop');

}
else
{
echo "
<div id='div3'>Je komt een vervallen kamertje binnen, en het is een enorme rotzooi.</div>
 <div id='div4'>
 <a href='../index.php?id=winkel1'>Kijk of je eigenaar kan vinden</a><br><br>
 <a href='../index.php?id=winkel2'>Kijk of je spullen kan vinden</a>
 </div> ";
}
?>