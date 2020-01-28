<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="vr, 09 nov 2012 10:22:03 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Zombit</title>
	<link rel="stylesheet" type="text/css" href="opmaak.css" />	
  </head>
  <body>
Zombit Alpha 1.1.0
<div id="container">
<div id="leftside"></div>
<div id="inhoud">
<?php
if(isset($_POST[aanval]))
{
$zombie = $_SESSION["zombie"];
$leven = $_SESSION["leven"];	
$aanval = $_POST["aanval"];
$wapen = $_SESSION["wapen"];
$kogels = $_SESSION["kogels"];

//'jouw' aanval
if ($zombie > 0 && $leven > 0)
{
 if($wig == 0)
 {
		if($aanval == "slaan")
		{
				   $critical = rand(0,7);
				   if ($critical == 1){$damage = -10;}				   				   
				   else			 	  {$damage = -2;}
		}
		
		if($aanval == "schoppen")
		{
				   $critical = rand(0,9);
				   if ($critical == 1){$damage = -9;}				   
				   else			      {$damage = -3;}
		}
				
		if($aanval == "knietje")
		{
				   $critical = rand(0,10);
				   if ($critical == 1){$damage = -8;}				   
				   else			 	  {$damage = -4;}
		}

		if($aanval == "kopstoot")
		{
				   $critical = rand(0,11);
				   if ($critical == 1){$damage = -7;}		
				   else			 	  {$damage = -5;}
		}
 }
		
 if($wig == 1)
 {
		if($aanval == "snij")
		{
				   $critical = rand(0,6);
				   if ($critical == 1){$damage = -11;}				   				   
				   else			 	  {$damage = -4;}
		}
		
		if($aanval == "steek")
		{
				   $critical = rand(0,8);
				   if ($critical == 1){$damage = -10;}				   
				   else			      {$damage = -5;}
		}
				
		if($aanval == "hak")
		{
				   $critical = rand(0,9);
				   if ($critical == 1){$damage = -9;}				   
				   else			 	  {$damage = -6;}
		}

		if($aanval == "haksteek")
		{
				   $critical = rand(0,10);
				   if ($critical == 1){$damage = -8;}		
				   else			 	  {$damage = -7;}
		}
 }
 
 if($wig == 2)
 {
 		if($aanval == "steekmetjegeweer")
		{
				   $critical = rand(0,5);
				   if ($critical == 1){$damage = -12;}				   				   
				   else			 	  {$damage = -5;}
		}
		
		if($aanval == "slametjegeweer")
		{
				   $critical = rand(0,7);
				   if ($critical == 1){$damage = -11;}				   
				   else			      {$damage = -6;}
		}
				
		if($aanval == "schieten" && $kogels > 0)
		{
		           $kogels = $_SESSION['kogels'];
                   $gebruiktekogels = 1;
                   $kogels = $kogels - $gebruiktekogels;
                   if($kogels < 0){$kogels = 0;}
                   $_SESSION['kogels'] = $kogels;
                   $_SESSION['gebruiktekogels'] = $gebruiktekogels;  
				   $critical = rand(0,8);
				   if ($critical == 1){$damage = -10;}				   
				   else			 	  {$damage = -7;}
		}

		if($aanval == "gerichtschieten" && $kogels > 0)
		{
		           $kogels = $_SESSION['kogels'];
                   $gebruiktekogels = 1;
                   $kogels = $kogels - $gebruiktekogels;
                   if($kogels < 0){$kogels = 0;}
                   $_SESSION['kogels'] = $kogels;
                   $_SESSION['gebruiktekogels'] = $gebruiktekogels;
				   $critical = rand(0,9);
				   if ($critical == 1){$damage = -9;}		
				   else			 	  {$damage = -8;}
		           
		}
 }

//aanval zombie
$getal = rand(0,3);
    if ($getal == 0 ){$damagezomb = -2;}
    if ($getal == 1 ){$damagezomb = -3;}
    if ($getal == 2 ){$damagezomb = -4;}
	if ($getal == 3 ){$damagezomb = -5;}
	
$zombie = $zombie + $damage;
$_SESSION["damage"] = $damage;
$_SESSION["zombie"] = $zombie;
$leven = $leven + $damagezomb;
$_SESSION["damagezomb"] = $damagezomb;
$_SESSION["leven"] = $leven;
}
}
?>
<div id="div1">
<center>
<img src="img/jij.png">
<?php
$leven = $_SESSION["leven"];
$damagezomb = $_SESSION["damagezomb"];
if($leven > 0)
{
echo"$leven";
}
else
{
echo"0";
}
if(isset($damagezomb))
{
echo" ($damagezomb)";
}
?>

</center>
</div>
<div id="div2">
<center>
<img src="img/henk.png">

<?php
$zombie = $_SESSION["zombie"];
$damage = $_SESSION["damage"];
if($zombie < 0)
{
$zombie = 0;
echo"$zombie";
}
else
{
echo"$zombie";
}
if(isset($damage))
{
echo" ($damage)";
}
?>
</center>
</div>
<div id="div3">
<?php

$kogels = $_SESSION["kogels"];
if($kogels == 0 && ($aanval == 'schieten' || $aanval == 'gerichtschieten')){echo"<p>Je hebt geen kogels meer!</p>";}
else{echo"<p style='color:#FFF;'>.</p>";}

$zombie = $_SESSION["zombie"];
$leven = $_SESSION["leven"];
$wig = $_SESSION["wig"];
if($zombie > 0 && $leven > 0)
{
  if($wig == 0)
  {
  echo"<form method='post' action='battleengine.php'>
  <input type='radio' name='aanval' value='slaan'> Slaan<br />
  <input type='radio' name='aanval' value='schoppen'> Schoppen<br />
  <input type='radio' name='aanval' value='knietje'> Knietje<br />
  <input type='radio' name='aanval' value='kopstoot'> Kopstoot<br /><br>
  <input type='submit' name='valaan' value='Val aan!'>
  </form>";
  }
  if($wig == 1)
  {
  echo"<form method='post' action='battleengine.php'>
  <input type='radio' name='aanval' value='snij'> Snij<br />
  <input type='radio' name='aanval' value='steek'> Steek<br />
  <input type='radio' name='aanval' value='hak'> Hak<br />
  <input type='radio' name='aanval' value='haksteek'> Haksteek<br /><br>
  <input type='submit' name='valaan' value='Val aan!'>
  </form>";
  }
  if($wig == 2)
  {
  echo"<form method='post' action='battleengine.php'>
  <input type='radio' name='aanval' value='steekmetjegeweer'> Steek met je geweer<br />
  <input type='radio' name='aanval' value='slametjegeweer'> Sla met je geweer<br />
  <input type='radio' name='aanval' value='schieten'> Schieten<br />
  <input type='radio' name='aanval' value='gerichtschieten'> Gericht schieten<br /><br>
  <input type='submit' name='valaan' value='Val aan!'>
  </form>";
  }
 }
 
$leven = $_SESSION["leven"];
if($leven < 1)
  {
  echo"<a href='index.php?id=gameover'>GAME OVER</a>";
  unset($_SESSION["leven"]);
  unset($_SESSION["damage"]);
  unset($_SESSION["damagezomb"]);
  }
$zombie = $_SESSION["zombie"];

if($zombie < 1)
  {
  $klaver = $_SESSION["klaver"];
  if($klaver == 0)
  {
   		   $loot = rand(0,300);
		    if($loot == 0){$loot1 = "500 pixels"; $pixels = $_SESSION["pixels"];$pixels = $pixels + 500; $_SESSION["pixels"] = $pixels;}
			if($loot >= 28 && $loot <= 30){$loot1 = "50 pixels"; $pixels = $_SESSION["pixels"];$pixels = $pixels + 50; $_SESSION["pixels"] = $pixels;}
			
			if($loot == 1){$loot1 = "100 kogels"; $kogels = $_SESSION["kogels"];$kogels = $kogels + 100; $_SESSION["kogels"] = $kogels;}
		    if($loot >= 31 && $loot <= 36){$loot1 = "25 kogels"; $kogels = $_SESSION["kogels"];$kogels = $kogels + 25; $_SESSION["kogels"] = $kogels;}
			
			if($loot == 2){$loot1 = "een helm"; $helm = $_SESSION["helm"];$helm = $helm + 1; $_SESSION["helm"] = $helm;}
			if($loot == 3){$loot1 = "schouderbeschermers";$schouderbeschermers = $_SESSION["schouderbeschermers"];$schouderbeschermers = $schouderbeschermers + 1; $_SESSION["schouderbeschermers"] = $schouderbeschermers;}
			if($loot == 4){$loot1 = "beenbeschermers";$beenbeschermers = $_SESSION["beenbeschermers"];$beenbeschermers = $beenbeschermers + 1; $_SESSION["beenbeschermers"] = $beenbeschermers;}
			
			if($loot == 5){$loot1 = "een machine geweer";$machinegeweer = $_SESSION["machinegeweer"];$machinegeweer = $machinegeweer + 1; $_SESSION["machinegeweer"] = $machinegeweer;} 
			if($loot >= 61 && $loot <= 62){$loot1 = "een luchtbuks";$luchtbuks = $_SESSION["luchtbuks"];$luchtbuks = $luchtbuks + 1; $_SESSION["luchtbuks"] = $luchtbuks;}
			if($loot >= 55 && $loot <= 56){$loot1 = "een BBgun";$bbgun = $_SESSION["bbgun"];$bbgun = $bbgun + 1; $_SESSION["bbgun"] = $bbgun;}
			
			if($loot >= 57 && $loot <= 60){$loot1 = "niks";}
			if($loot >= 63 && $loot <= 66) {$loot1 = "niks";}
			if($loot >= 294 && $loot <= 300) {$loot1 = "niks";}
			
			if($loot == 7){$loot1 = "10 antidotes";$antidotes = $_SESSION["antidotes"];$antidotes = $antidotes + 10; $_SESSION["antidotes"] = $antidotes;}
			if($loot >= 16 && $loot <= 18){$loot1 = "5 antidotes";$antidotes = $_SESSION["antidotes"];$antidotes = $antidotes + 5; $_SESSION["antidotes"] = $antidotes;}
			
			if($loot == 8){$loot1 = "10 levenpotions";$levenspotions = $_SESSION["levenspotions"];$levenspotions = $levenspotions + 10; $_SESSION["levenspotions"] = $levenspotions;}
			if($loot >= 19 && $loot <= 21){$loot1 = "5 levenspotions";$levenspotions = $_SESSION["levenspotions"];$levenspotions = $levenspotions + 5; $_SESSION["levenspotions"] = $levenspotions;}
			
			if($loot >= 167 && $loot <= 177){$loot1 = "een flesje";$flesje = $_SESSION["flesje"];$flesje = $flesje + 1; $_SESSION["flesje"] = $flesje;}
			
			if($loot == 9){$loot1 = "10 energyrepen";$energyrepen = $_SESSION["energyrepen"];$energyrepen = $energyrepen + 10; $_SESSION["energyrepen"] = $energyrepen;}
			if($loot >= 22 && $loot <= 24){$loot1 = "5 energyrepen";$energyrepen = $_SESSION["energyrepen"];$energyrepen = $energyrepen + 5; $_SESSION["energyrepen"] = $energyrepen;}
			
			if($loot == 10){$loot1 = "een klavertje 4";$klaver = $_SESSION["klaver"];$klaver = $klaver + 1; $_SESSION["klaver"] = $klaver;}
			
			if($loot >= 11 && $loot <= 13){$loot1 = "een schedel";$schedel = $_SESSION["schedel"];$schedel = $schedel + 1; $_SESSION["schedel"] = $schedel;}
			if($loot >= 14 && $loot <= 15){$loot1 = "een vingerkootje";$vingerkootje = $_SESSION["vingerkootje"];$vingerkootje = $vingerkootje + 1; $_SESSION["vingerkootje"] = $vingerkootje;}
			if($loot >= 178 && $loot <= 188){$loot1 = "7 tanden";$tanden = $_SESSION["tanden"];$tanden = $tanden + 7; $_SESSION["tanden"] = $tanden;}
						
			if($loot >= 37 && $loot <= 42){$loot1 = "10 stenen";$stenen = $_SESSION["stenen"];$stenen = $stenen + 10; $_SESSION["stenen"] = $stenen;}
			if($loot >= 134 && $loot  <= 144){$loot1 = "2 stenen";$stenen = $_SESSION["stenen"];$stenen = $stenen + 2; $_SESSION["stenen"] = $stenen;}
						
			if($loot >= 49 && $loot <= 54){$loot1 = "een gouden ketting";$goudenketting = $_SESSION["goudenketting"];$goudenketting = $sgoudenketting + 1; $_SESSION["goudenketting"] = $goudenketting;}
			if($loot >= 73 && $loot <= 78){$loot1 = "oorbellen";$oorbellen = $_SESSION["oorbellen"];$oorbellen = $oorbellen + 1; $_SESSION["oorbellen"] = $oorbellen;}
			if($loot >= 79 && $loot <= 89){$loot1 = "een zilveren ketting";$zilverenketting = $_SESSION["zilverenketting"];$zilverenketting = $zilverenketting + 1; $_SESSION["zilverenketting"] = $zilverenketting;}
			if($loot >= 90 && $loot <= 100){$loot1 = "een ring";$ring = $_SESSION["ring"];$ring = $ring + 1; $_SESSION["ring"] = $ring;}
			if($loot >= 145 && $loot <= 155){$loot1 = "een armband";$armband = $_SESSION["armband"];$armband = $armband + 1; $_SESSION["armband"] = $armband;}
			if($loot >= 252 && $loot <= 272){$loot1 = "een azteekse munt";$munt = $_SESSION["munt"];$munt = $munt + 1; $_SESSION["munt"] = $munt;}
			
			if($loot >= 43 && $loot <= 48){$loot1 = "10 planken";$planken = $_SESSION["planken"];$planken = $planken + 10; $_SESSION["planken"] = $planken;}
			if($loot >= 156 && $loot <= 166){$loot1 = "een tak";$tak = $_SESSION["tak"];$tak = $tak + 1; $_SESSION["tak"] = $tak;}
			if($loot >= 67 && $loot <= 72){$loot1 = "een brok ijzer";$ijzer = $_SESSION["ijzer"];$ijzer = $ijzer + 1; $_SESSION["ijzer"] = $ijzer;}
			
			if($loot == 6){$loot1 = "een donker kristal";$donkerkristal = $_SESSION["donkerkristal"];$donkerkristal = $donkerkristal + 1; $_SESSION["donkerkristal"] = $donkerkristal;}
			if($loot >= 25 && $loot <= 27){$loot1 = "een rood kristal";$roodkristal = $_SESSION["roodkristal"];$roodkristal = $roodkristal + 1; $_SESSION["roodkristal"] = $roodkristal;}
			
			if($loot >= 112 && $loot <= 122){$loot1 = "een hamer";$hamer = $_SESSION["hamer"];$hamer = $hamer + 1; $_SESSION["hamer"] = $hamer;}
			if($loot >= 123 && $loot <= 133){$loot1 = "een schroevendraaier";$schroevendraaier = $_SESSION["schroevendraaier"];$schroevendraaier = $schroevendraaier + 1; $_SESSION["schroevendraaier"] = $schroevendraaier;}
			if($loot >= 273 && $loot <= 293){$loot1 = "een beitel";$beitel = $_SESSION["beitel"];$beitel = $beitel + 1; $_SESSION["beitel"] = $beitel;}
			
			if($loot >= 101 && $loot <= 111){$loot1 = "leren schoenen";$schoenen = $_SESSION["schoenen"];$schoenen = $schoenen + 1; $_SESSION["schoenen"] = $schoenen;}
			if($loot >= 189 && $loot <= 209){$loot1 = "een lap stof";$stof = $_SESSION["stof"];$stof = $stof + 1; $_SESSION["stof"] = $stof;}
			
			if($loot >= 210 && $loot <= 230){$loot1 = "een pakje sigaretten";$sigaretten = $_SESSION["sigaretten"];$sigaretten = $sigaretten + 1; $_SESSION["sigaretten"] = $sigaretten;}
			if($loot >= 231 && $loot <= 251){$loot1 = "doosje lucifers";$doosjelucifers = $_SESSION["doosjelucifers"];$doosjelucifers = $doosjelucifers + 1; $_SESSION["doosjelucifers"] = $doosjelucifers;}
			}
if($klaver == 1)
{
$loot = rand(0,245);
		    if($loot >= 0 && $loot <= 5){$loot1 = "500 pixels"; $pixels = $_SESSION["pixels"];$pixels = $pixels + 500; $_SESSION["pixels"] = $pixels;}
			if($loot >= 5 && $loot <= 12){$loot1 = "50 pixels"; $pixels = $_SESSION["pixels"];$pixels = $pixels + 50; $_SESSION["pixels"] = $pixels;}
			
			if($loot >= 12 && $loot <= 17){$loot1 = "100 kogels"; $kogels = $_SESSION["kogels"];$kogels = $kogels + 100; $_SESSION["kogels"] = $kogels;}
		    if($loot >= 17 && $loot <= 25){$loot1 = "25 kogels"; $kogels = $_SESSION["kogels"];$kogels = $kogels + 25; $_SESSION["kogels"] = $kogels;}
			
			if($loot >= 25 && $loot <= 30){$loot1 = "een helm"; $helm = $_SESSION["helm"];$helm = $helm + 1; $_SESSION["helm"] = $helm;}
			if($loot >= 30 && $loot <= 35){$loot1 = "schouderbeschermers";$schouderbeschermers = $_SESSION["schouderbeschermers"];$schouderbeschermers = $schouderbeschermers + 1; $_SESSION["schouderbeschermers"] = $schouderbeschermers;}
			if($loot >= 35 && $loot <= 40){$loot1 = "beenbeschermers";$beenbeschermers = $_SESSION["beenbeschermers"];$beenbeschermers = $beenbeschermers + 1; $_SESSION["beenbeschermers"] = $beenbeschermers;}
			
			if($loot >= 40 && $loot <= 43){$loot1 = "een machine geweer";$machinegeweer = $_SESSION["machinegeweer"];$machinegeweer = $machinegeweer + 1; $_SESSION["machinegeweer"] = $machinegeweer;} 
			if($loot >= 43 && $loot <= 47){$loot1 = "een luchtbuks";$luchtbuks = $_SESSION["luchtbuks"];$luchtbuks = $luchtbuks + 1; $_SESSION["luchtbuks"] = $luchtbuks;}
			if($loot >= 47 && $loot <= 52){$loot1 = "een BBgun";$bbgun = $_SESSION["bbgun"];$bbgun = $bbgun + 1; $_SESSION["bbgun"] = $bbgun;}
			
			
			if($loot >= 55 && $loot <= 60){$loot1 = "10 antidotes";$antidotes = $_SESSION["antidotes"];$antidotes = $antidotes + 10; $_SESSION["antidotes"] = $antidotes;}
			if($loot >= 60 && $loot <= 63){$loot1 = "5 antidotes";$antidotes = $_SESSION["antidotes"];$antidotes = $antidotes + 5; $_SESSION["antidotes"] = $antidotes;}
			
			if($loot >= 63 && $loot <= 67){$loot1 = "10 levenpotions";$levenspotions = $_SESSION["levenspotions"];$levenspotions = $levenspotions + 10; $_SESSION["levenspotions"] = $levenspotions;}
			if($loot >= 67 && $loot <= 70){$loot1 = "5 levenspotions";$levenspotions = $_SESSION["levenspotions"];$levenspotions = $levenspotions + 5; $_SESSION["levenspotions"] = $levenspotions;}
			
			if($loot >= 240 && $loot <= 245){$loot1 = "een flesje";$flesje = $_SESSION["flesje"];$flesje = $flesje + 1; $_SESSION["flesje"] = $flesje;}
			
			if($loot >= 70 && $loot <= 75){$loot1 = "10 energyrepen";$energyrepen = $_SESSION["energyrepen"];$energyrepen = $energyrepen + 10; $_SESSION["energyrepen"] = $energyrepen;}
			if($loot >= 75 && $loot <= 78){$loot1 = "5 energyrepen";$energyrepen = $_SESSION["energyrepen"];$energyrepen = $energyrepen + 5; $_SESSION["energyrepen"] = $energyrepen;}			
			
			if($loot >= 227 && $loot <= 230){$loot1 = "een schedel";$schedel = $_SESSION["schedel"];$schedel = $schedel + 1; $_SESSION["schedel"] = $schedel;}
			if($loot >= 230 && $loot <= 235){$loot1 = "een vingerkootje";$vingerkootje = $_SESSION["vingerkootje"];$vingerkootje = $vingerkootje + 1; $_SESSION["vingerkootje"] = $vingerkootje;}
			if($loot >= 235 && $loot <= 240){$loot1 = "7 tanden";$tanden = $_SESSION["tanden"];$tanden = $tanden + 7; $_SESSION["tanden"] = $tanden;}		
			
			if($loot >= 78 && $loot <= 80){$loot1 = "10 stenen";$stenen = $_SESSION["stenen"];$stenen = $stenen + 10; $_SESSION["stenen"] = $stenen;}
			if($loot >= 80 && $loot  <= 81){$loot1 = "2 stenen";$stenen = $_SESSION["stenen"];$stenen = $stenen + 2; $_SESSION["stenen"] = $stenen;}			
			
			if($loot >= 81 && $loot <= 91){$loot1 = "een gouden ketting";$goudenketting = $_SESSION["goudenketting"];$goudenketting = $sgoudenketting + 1; $_SESSION["goudenketting"] = $goudenketting;}
			if($loot >= 91 && $loot <= 101){$loot1 = "oorbellen";$oorbellen = $_SESSION["oorbellen"];$oorbellen = $oorbellen + 1; $_SESSION["oorbellen"] = $oorbellen;}
			if($loot >= 101 && $loot <= 111){$loot1 = "een zilveren ketting";$zilverenketting = $_SESSION["zilverenketting"];$zilverenketting = $zilverenketting + 1; $_SESSION["zilverenketting"] = $zilverenketting;}
			if($loot >= 111 && $loot <= 121){$loot1 = "een ring";$ring = $_SESSION["ring"];$ring = $ring + 1; $_SESSION["ring"] = $ring;}
			if($loot >= 121 && $loot <= 131){$loot1 = "een armband";$armband = $_SESSION["armband"];$armband = $armband + 1; $_SESSION["armband"] = $armband;}
			if($loot >= 131 && $loot <= 141){$loot1 = "een azteekse munt";$munt = $_SESSION["munt"];$munt = $munt + 1; $_SESSION["munt"] = $munt;}
			
			if($loot >= 141 && $loot <= 151){$loot1 = "10 planken";$planken = $_SESSION["planken"];$planken = $planken + 10; $_SESSION["planken"] = $planken;}
			if($loot >= 151 && $loot <= 161){$loot1 = "een tak";$tak = $_SESSION["tak"];$tak = $tak + 1; $_SESSION["tak"] = $tak;}
			if($loot >= 161 && $loot <= 171){$loot1 = "een brok ijzer";$ijzer = $_SESSION["ijzer"];$ijzer = $ijzer + 1; $_SESSION["ijzer"] = $ijzer;}
			
			if($loot >= 171 && $loot <= 173){$loot1 = "een donker kristal";$donkerkristal = $_SESSION["donkerkristal"];$donkerkristal = $donkerkristal + 1; $_SESSION["donkerkristal"] = $donkerkristal;}
			if($loot >= 173 && $loot <= 175){$loot1 = "een rood kristal";$roodkristal = $_SESSION["roodkristal"];$roodkristal = $roodkristal + 1; $_SESSION["roodkristal"] = $roodkristal;}
			
			if($loot >= 175 && $loot <= 187){$loot1 = "een hamer";$hamer = $_SESSION["hamer"];$hamer = $hamer + 1; $_SESSION["hamer"] = $hamer;}
			if($loot >= 187 && $loot <= 199){$loot1 = "een schroevendraaier";$schroevendraaier = $_SESSION["schroevendraaier"];$schroevendraaier = $schroevendraaier + 1; $_SESSION["schroevendraaier"] = $schroevendraaier;}
			if($loot >= 199 && $loot <= 211){$loot1 = "een beitel";$beitel = $_SESSION["beitel"];$beitel = $beitel + 1; $_SESSION["beitel"] = $beitel;}
			
			if($loot >= 211 && $loot <= 215){$loot1 = "leren schoenen";$schoenen = $_SESSION["schoenen"];$schoenen = $schoenen + 1; $_SESSION["schoenen"] = $schoenen;}
			if($loot >= 215 && $loot <= 219){$loot1 = "een lap stof";$stof = $_SESSION["stof"];$stof = $stof + 1; $_SESSION["stof"] = $stof;}
			
			if($loot >= 219 && $loot <= 223){$loot1 = "een pakje sigaretten";$sigaretten = $_SESSION["sigaretten"];$sigaretten = $sigaretten + 1; $_SESSION["sigaretten"] = $sigaretten;}
			if($loot >= 223 && $loot <= 227){$loot1 = "doosje lucifers";$doosjelucifers = $_SESSION["doosjelucifers"];$doosjelucifers = $doosjelucifers + 1; $_SESSION["doosjelucifers"] = $doosjelucifers;}
  }
    $id = $_SESSION["id"];
  echo"Je hebt de zombie verslagen. <a href='index.php?id=$id'>Ga verder</a>.";
  unset($_SESSION["aanval"]);
  unset($_SESSION["damagezomb"]);
  unset($_SESSION["damage"]);
  $_SESSION["zombie"] = 20;
 }
?>
</div>
</div>
<div id="rightside"></div>
<div id="hpbar">

<p style="text-align:center;">
<?php
$leven = $_SESSION["leven"];
if(isset($leven))
{
  echo"<img src='$leven.png'/>";
}  
  ?>
</p>

</div>
</div>
</body>
</html>