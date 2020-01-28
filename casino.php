<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Sat, 19 Jan 2013 10:31:31 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Casino Zombino</title>
   </head>
  <body>
<?php
$klaver = $_SESSION["klaver"];
$pixels = $_SESSION["pixels"];
$inzet = $_POST["inzet"];
if($klaver != 1)
{
$kans = 8;
}
else
{
$kans = 10;
}
//1 = bar
//2 = bel
//3 = citroen
//4 = druif
//5 = kers
//6 = sinas
//7 = zeven
//8 = verstopt
$bar = "bar.jpg";
$bel = "bel.jpg";
$citroen = "citroen.jpg";
$druif = "druif.jpg";
$kers = "kers.jpg";
$sinas = "sinas.jpg";
$zeven = "zeven.jpg";
$verstopt = "verstopt.jpg";
if(isset($_POST["hendel"]))
		 {
 		 $rij1 = rand(1,$kans);
		 $rij2 = rand(1,$kans);
		 $rij3 = rand(1,$kans);
		 $winst = 0;
		 if($rij1 == 1 && $rij2 == 1 && $rij3 == 1)
		 		  {
		 		  $winst = $inzet * 20;
		 		  }
		 if($rij1 == 2 && $rij2 == 2 && $rij3 == 2)
		 		  {
		 		  $winst = $inzet * 10;
		 		  }
		 if($rij1 == 3 && $rij2 == 3 && $rij3 == 3)
		 		  {
		 		  $winst = $inzet * 40;
		 		  }
		 if($rij1 == 4 && $rij2 == 4 && $rij3 == 4)
		 		  {
		 		  $winst = $inzet * 60;
		 		  }
		 if($rij1 == 5 && $rij2 == 5 && $rij3 == 5)
		 		  {
		 		  $winst = $inzet * 10;
		 		  }
		 elseif($rij1 == 5 && $rij2 == 5 && $rij3 != 5)
		 		  {
		 		  $winst = $inzet * 5;
		 		  }
		 elseif($rij1 == 5 && $rij2 != 5 && $rij3 == 5)
		 		  {
		 		  $winst = $inzet * 5;
		 		  }
		 elseif($rij1 != 5 && $rij2 == 5 && $rij3 == 5)
		 		  {
		 		  $winst = $inzet * 5;
				  }
		 elseif($rij1 == 5 or $rij2 == 5 or $rij3 == 5)
		 		  {
		 		  $winst = $inzet * 2;
		 		  }
		 if($rij1 == 6 && $rij2 == 6 && $rij3 == 6)
		 		  {
		 		  $winst = $inzet * 100;
		 		  }
		 if($rij1 == 7 && $rij2 == 7 && $rij3 == 7)
		 		  {
		 		  $winst = $inzet * 30;
		 		  }
	     if($rij1 == 1)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/bar.jpg>";
				  }
		 if($rij1 == 2)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/bel.jpg>";
				  }
		 if($rij1 == 3)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/citroen.jpg>"; 
				  }
		 if($rij1 == 4)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/druif.jpg>"; 
				  }
		 if($rij1 == 5)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/kers.jpg>"; 
				  }
		 if($rij1 == 6)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/sinas.jpg>"; 
				  }
		 if($rij1 == 7)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/zeven.jpg>"; 
				  }
		 if($rij1 >= 8)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/verstopt.jpg>"; 
				  }
	     if($rij2 == 1)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/bar.jpg>"; 
				  }
		 if($rij2 == 2)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/bel.jpg>"; 
				  }
		 if($rij2 == 3)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/citroen.jpg>"; 
				  }
		 if($rij2 == 4)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/druif.jpg>"; 
				  }
		 if($rij2 == 5)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/kers.jpg>"; 
				  }
		 if($rij2 == 6)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/sinas.jpg>"; 
				  }
		 if($rij2 == 7)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/zeven.jpg>"; 
				  }
		 if($rij2 >= 8)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/verstopt.jpg>"; 
				  }
	     if($rij3 == 1)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/bar.jpg>"; 
				  }
		 if($rij3 == 2)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/bel.jpg>"; 
				  }
		 if($rij3 == 3)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/citroen.jpg>"; 
				  }
		 if($rij3 == 4)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/druif.jpg>"; 
				  }
		 if($rij3 == 5)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/kers.jpg>"; 
				  }
		 if($rij3 == 6)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/sinas.jpg>"; 
				  }
		 if($rij3 == 7)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/zeven.jpg>"; 
				  }
		 if($rij3 >= 8)
		 		  {
				  echo "<img src=http://bjornromijn.infdlw.nl/verstopt.jpg>"; 
				  }
		 if($winst >= 1)
		 		   {echo"<br />U heeft $winst pixels gewonnen bij een inzet van $inzet pixels<br />";}
		 else
		 	 	   {echo"<br />U heeft helaas niets gewonnen!<br />";}
		 $pixels = $_SESSION["pixels"];
		 $pixels = $pixels + $winst - $inzet;
		 $_SESSION["pixels"] = $pixels;
		 }
if($pixels > 0)
{
?>
<form action="index.php?id=casino" method="post">
<select name="inzet">
<?php
if($pixels >= 1)
{
?><option selected value='1'>1</option><?php
}
if($pixels >= 2)
{
?><option value='2'>2</option><?php
}
if($pixels >= 5)
{
?><option value='5'>5</option><?php
}
if($pixels >= 10)
{
?><option value='10'>10</option><?php
}
if($pixels >= 20)
{
?><option value='20'>20</option><?php
}
if($pixels >= 50)
{
?><option value='50'>50</option><?php
}
if($pixels >= 100)
{
?><option value='100'>100</option><?php
}
if($pixels >= 200)
{
?><option value='200'>200</option><?php
}
if($pixels >= 500)
{
?><option value='500'>500</option><?php
}
if($pixels >= 1000)
{
?><option value='1000'>1000</option><?php
}
?>
</select>
<input type="submit" name="hendel" value="Trek aan de hendel">
</form>
<?php
}
else
{
echo"U heeft niet genoeg pixels om in het casino te spelen.";
}
?>
<br /><br />
<a href="index.php?id=s">Ga terug naar het stadscentrum</a>
  </body>
</html>