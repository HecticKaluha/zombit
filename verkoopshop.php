<div id="koopshoplinks">
  <a href="shop.php">terug naar de shop</a><br /><br />
  Voorwerpen die u kunt verkopen:<br />

  <?php
  $pixels = $_SESSION["pixels"];
  $kogels = $_SESSION["kogels"];
  $helm = $_SESSION["helm"];
  $schouderbeschermers = $_SESSION["schouderbeschermers"];
  $beenbeschermers = $_SESSION["beenbeschermers"];
  $machinegeweer = $_SESSION["machinegeweer"];
  $luchtbuks = $_SESSION["luchtbuks"];
  $bbgun = $_SESSION["bbgun"];
  $antidotes = $_SESSION["antidotes"];
  $levenspotions = $_SESSION["levenspotions"];
  $flesje = $_SESSION["flesje"];
  $energyrepen = $_SESSION["energyrepen"];
  $schedel = $_SESSION["schedel"];
  $vingerkootje = $_SESSION["vingerkootje"];
  $tanden = $_SESSION["tanden"];
  $stenen = $_SESSION["stenen"];
  $goudenketting = $_SESSION["goudenketting"];
  $oorbellen = $_SESSION["oorbellen"];
  $zilverenketting = $_SESSION["zilverenketting"];
  $ring = $_SESSION["ring"];
  $armband = $_SESSION["armband"];
  $munt = $_SESSION["munt"];
  $planken = $_SESSION["planken"];
  $tak = $_SESSION["tak"];
  $ijzer = $_SESSION["ijzer"];
  $donkerkristal = $_SESSION["donkerkristal"];
  $roodkristal = $_SESSION["roodkristal"];
  $hamer = $_SESSION["hamer"];
  $schroevendraaier = $_SESSION["schroevendraaier"];
  $beitel = $_SESSION["beitel"];
  $schoenen = $_SESSION["schoenen"];
  $stof = $_SESSION["stof"];
  $sigaretten = $_SESSION["sigaretten"];
  $lucifers = $_SESSION["lucifers"];
  if($kogels + $helm + $schouderbeschermers + $beenbeschermers + $machinegeweer + $luchtbuks + $bbgun + $antidotes + $levenspotions + $flesje + $energyrepen + $schedel + $vingerkootje + $tanden + $stenen + $goudenketting + $oorbellen + $zilverenketting + $ring + $armband + $munt + $planken + $tak + $ijzer + $donkerkristal + $roodkristal + $hamer + $schroevendraaier + $beitel + $schoenen + $stof + $sigaretten + $lucifers == 0)
   {
 echo"<br />U heeft niets om te verkopen!";
 }
  if($kogels >= 1)
   {
   ?>
   <a title='<?php if($kogels > 1){echo"U heeft $kogels kogels, ik geef je 1 pixel per stuk";} else {echo"U heeft 1 kogel, ik geef je 1 pixel per stuk";} ?>' href="verkoopshop.php?vkogelsv=1">kogels<br /></a>
   <?php
 }
  $_SESSION["vkogelsv"] = $_GET["vkogelsv"];
  $vkogelsv = $_SESSION["vkogelsv"];
  if($vkogelsv == 1)
     {
     if(isset($_POST["vkogels"]))
   {
 $kogelsverkocht = $_POST["kogelsverkocht"];
 $kogels = $kogels - $kogelsverkocht;
 $_SESSION["kogels"] = $kogels;
 $pixels = $pixels + $kogelsverkocht;
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vkogelsv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vkogelsv=1" method="post">
   <select name="kogelsverkocht">
     <option selected value="0">0</option>
 <?php
 if($kogels >= 1)
   {echo"<option value='1'>1</option>";}
 if($kogels >= 2)
   {echo"<option value='2'>2</option>";}
 if($kogels >= 5)
   {echo"<option value='5'>5</option>";}
     if($kogels >= 10)
   {echo"<option value='10'>10</option>";}
 if($kogels >= 20)
   {echo"<option value='20'>20</option>";}
 if($kogels >= 50)
   {echo"<option value='50'>50</option>";}
 if($kogels >= 100)
   {echo"<option value='100'>100</option>";}
 if($kogels >= 200)
   {echo"<option value='200'>200</option>";}
 if($kogels >= 500)
   {echo"<option value='500'>500</option>";}
 if($kogels >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vkogels" value="verkoop kogels">
 </form>
 <?php
    }
  if($helm >= 1)
  {
  ?>
  <a title='<?php if($helm > 1){echo"U heeft $helm helmen, ik geef je 60 pixels per stuk";} else {echo"U heeft 1 helm, ik geef je 60 pixels per stuk";} ?>' href="verkoopshop.php?vhelmv=1">helmen<br /></a>
  <?php
  }
  $_SESSION["vhelmv"] = $_GET["vhelmv"];
  $vhelmv = $_SESSION["vhelmv"];    
  if($vhelmv == 1)
     {
     if(isset($_POST["vhelm"]))
   {
 $helmverkocht = $_POST["helmverkocht"];
 $helm = $helm - $helmverkocht;
 $_SESSION["helm"] = $helm;
 $pixels = $pixels + ($helmverkocht * 60);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vhelmv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vhelmv=1" method="post">
   <select name="helmverkocht">
     <option selected value="0">0</option>
 <?php
 if($helm >= 1)
   {echo"<option value='1'>1</option>";}
 if($helm >= 2)
   {echo"<option value='2'>2</option>";}
 if($helm >= 5)
   {echo"<option value='5'>5</option>";}
     if($helm >= 10)
   {echo"<option value='10'>10</option>";}
 if($helm >= 20)
   {echo"<option value='20'>20</option>";}
 if($helm >= 50)
   {echo"<option value='50'>50</option>";}
 if($helm >= 100)
   {echo"<option value='100'>100</option>";}
 if($helm >= 200)
   {echo"<option value='200'>200</option>";}
 if($helm >= 500)
   {echo"<option value='500'>500</option>";}
 if($helm >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vhelm" value="verkoop helmen">
 </form>
 <?php
    }
  if($schouderbeschermers >= 1)
  {
  ?>
  <a title='<?php if($schouderbeschermers > 1){echo"U heeft $schouderbeschermers schouderbeschermers, ik geef je 70 pixels per stuk";} else {echo"U heeft 1 schouderbeschermer, ik geef je 70 pixels per stuk";} ?>' href="verkoopshop.php?vschouderbeschermersv=1">schouderbeschermers<br /></a>
  <?php
  }
  $_SESSION["vschouderbeschermersv"] = $_GET["vschouderbeschermersv"];
  $vschouderbeschermersv = $_SESSION["vschouderbeschermersv"];  
  if($vschouderbeschermersv == 1)
     {
     if(isset($_POST["vschouderbeschermers"]))
   {
 $schouderbeschermersverkocht = $_POST["schouderbeschermersverkocht"];
 $schouderbeschermers = $schouderbeschermers - $schouderbeschermersverkocht;
 $_SESSION["schouderbeschermers"] = $schouderbeschermers;
 $pixels = $pixels + ($schouderbeschermersverkocht * 70);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vschouderbeschermersv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vschouderbeschermersv=1" method="post">
   <select name="schouderbeschermersverkocht">
     <option selected value="0">0</option>
 <?php
 if($schouderbeschermers >= 1)
   {echo"<option value='1'>1</option>";}
 if($schouderbeschermers >= 2)
   {echo"<option value='2'>2</option>";}
 if($schouderbeschermers >= 5)
   {echo"<option value='5'>5</option>";}
     if($schouderbeschermers >= 10)
   {echo"<option value='10'>10</option>";}
 if($schouderbeschermers >= 20)
   {echo"<option value='20'>20</option>";}
 if($schouderbeschermers >= 50)
   {echo"<option value='50'>50</option>";}
 if($schouderbeschermers >= 100)
   {echo"<option value='100'>100</option>";}
 if($schouderbeschermers >= 200)
   {echo"<option value='200'>200</option>";}
 if($schouderbeschermers >= 500)
   {echo"<option value='500'>500</option>";}
 if($schouderbeschermers >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vschouderbeschermers" value="verkoop schouderbeschermers">
 </form>
 <?php
    }
  if($beenbeschermers >= 1)
  {
  ?>
  <a title='<?php if($beenbeschermers > 1){echo"U heeft $beenbeschermers beenbeschermers, ik geef je 80 pixels per stuk";} else {echo"U heeft 1 beenbeschermer, ik geef je 80 pixels per stuk";} ?>' href="verkoopshop.php?vbeenbeschermersv=1">beenbeschermers<br /></a>
  <?php
  }
  $_SESSION["vbeenbeschermersv"] = $_GET["vbeenbeschermersv"];
  $vbeenbeschermersv = $_SESSION["vbeenbeschermersv"];  
  if($vbeenbeschermersv == 1)
     {
     if(isset($_POST["vbeenbeschermers"]))
   {
 $beenbeschermersverkocht = $_POST["beenbeschermersverkocht"];
 $beenbeschermers = $beenbeschermers - $beenbeschermersverkocht;
 $_SESSION["beenbeschermers"] = $beenbeschermers;
 $pixels = $pixels + ($beenbeschermersverkocht * 80);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vbeenbeschermersv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vbeenbeschermersv=1" method="post">
   <select name="beenbeschermersverkocht">
     <option selected value="0">0</option>
 <?php
 if($beenbeschermers >= 1)
   {echo"<option value='1'>1</option>";}
 if($beenbeschermers >= 2)
   {echo"<option value='2'>2</option>";}
 if($beenbeschermers >= 5)
   {echo"<option value='5'>5</option>";}
     if($beenbeschermers >= 10)
   {echo"<option value='10'>10</option>";}
 if($beenbeschermers >= 20)
   {echo"<option value='20'>20</option>";}
 if($beenbeschermers >= 50)
   {echo"<option value='50'>50</option>";}
 if($beenbeschermers >= 100)
   {echo"<option value='100'>100</option>";}
 if($beenbeschermers >= 200)
   {echo"<option value='200'>200</option>";}
 if($beenbeschermers >= 500)
   {echo"<option value='500'>500</option>";}
 if($beenbeschermers >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vbeenbeschermers" value="verkoop beenbeschermers">
 </form>
 <?php
    }
  if($machinegeweer >= 1)
  {
  ?>
  <a title='<?php if($machinegeweer > 1){echo"U heeft $machinegeweer machinegeweren, ik geef je 510 pixels per stuk";} else {echo"U heeft 1 machinegeweer, ik geef je 510 pixels per stuk";} ?>' href="verkoopshop.php?vmachinegeweerv=1">machinegeweren<br /></a>
  <?php
  }
  $_SESSION["vmachinegeweerv"] = $_GET["vmachinegeweerv"];
  $vmachinegeweerv = $_SESSION["vmachinegeweerv"];  
  if($vmachinegeweerv == 1)
     {
     if(isset($_POST["vmachinegeweer"]))
   {
 $machinegeweerverkocht = $_POST["machinegeweerverkocht"];
 $machinegeweer = $machinegeweer - $machinegeweerverkocht;
 $_SESSION["machinegeweer"] = $machinegeweer;
 $pixels = $pixels + ($machinegeweerverkocht * 510);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vmachinegeweerv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vmachinegeweerv=1" method="post">
   <select name="machinegeweerverkocht">
     <option selected value="0">0</option>
 <?php
 if($machinegeweer >= 1)
   {echo"<option value='1'>1</option>";}
 if($machinegeweer >= 2)
   {echo"<option value='2'>2</option>";}
 if($machinegeweer >= 5)
   {echo"<option value='5'>5</option>";}
     if($machinegeweer >= 10)
   {echo"<option value='10'>10</option>";}
 if($machinegeweer >= 20)
   {echo"<option value='20'>20</option>";}
 if($machinegeweer >= 50)
   {echo"<option value='50'>50</option>";}
 if($machinegeweer >= 100)
   {echo"<option value='100'>100</option>";}
 if($machinegeweer >= 200)
   {echo"<option value='200'>200</option>";}
 if($machinegeweer >= 500)
   {echo"<option value='500'>500</option>";}
 if($machinegeweer >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vmachinegeweer" value="verkoop machinegeweren">
 </form>
 <?php
    }
  if($luchtbuks >= 1)
  {
  ?>
  <a title='<?php if($luchtbuks > 1){echo"U heeft $luchtbuks luchtbuksen, ik geef je 90 pixels per stuk";} else {echo"U heeft 1 luchtbuks, ik geef je 90 pixels per stuk";} ?>' href="verkoopshop.php?vluchtbuksv=1">luchtbuksen<br /></a>
  <?php
  }
  $_SESSION["vluchtbuksv"] = $_GET["vluchtbuksv"];
  $vluchtbuksv = $_SESSION["vluchtbuksv"];     
if($vluchtbuksv == 1)
     {
     if(isset($_POST["vluchtbuks"]))
   {
 $luchtbuksverkocht = $_POST["luchtbuksverkocht"];
 $luchtbuks = $luchtbuks - $luchtbuksverkocht;
 $_SESSION["luchtbuks"] = $luchtbuks;
 $pixels = $pixels + ($luchtbuksverkocht * 90);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vluchtbuksv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vluchtbuksv=1" method="post">
   <select name="luchtbuksverkocht">
     <option selected value="0">0</option>
 <?php
 if($luchtbuks >= 1)
   {echo"<option value='1'>1</option>";}
 if($luchtbuks >= 2)
   {echo"<option value='2'>2</option>";}
 if($luchtbuks >= 5)
   {echo"<option value='5'>5</option>";}
     if($luchtbuks >= 10)
   {echo"<option value='10'>10</option>";}
 if($luchtbuks >= 20)
   {echo"<option value='20'>20</option>";}
 if($luchtbuks >= 50)
   {echo"<option value='50'>50</option>";}
 if($luchtbuks >= 100)
   {echo"<option value='100'>100</option>";}
 if($luchtbuks >= 200)
   {echo"<option value='200'>200</option>";}
 if($luchtbuks >= 500)
   {echo"<option value='500'>500</option>";}
 if($luchtbuks >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vluchtbuks" value="verkoop luchtbuksen">
 </form>
 <?php
    }
  if($bbgun >= 1)
  {
  ?>
  <a title='<?php if($bbgun > 1){echo"U heeft $bbgun bbguns, ik geef je 50 pixels per stuk";} else {echo"U heeft 1 bbgun, ik geef je 50 pixels per stuk";} ?>' href="verkoopshop.php?vbbgunv=1">bbguns<br /></a>
  <?php
  }
  $_SESSION["vbbgunv"] = $_GET["vbbgunv"];
  $vbbgunv = $_SESSION["vbbgunv"];    
  if($vbbgunv == 1)
     {
     if(isset($_POST["vbbgun"]))
   {
 $bbgunverkocht = $_POST["bbgunverkocht"];
 $bbgun = $bbgun - $bbgunverkocht;
 $_SESSION["bbgun"] = $bbgun;
 $pixels = $pixels + ($bbgunverkocht * 50);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vbbgunv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vbbgunv=1" method="post">
   <select name="bbgunverkocht">
     <option selected value="0">0</option>
 <?php
 if($bbgun >= 1)
   {echo"<option value='1'>1</option>";}
 if($bbgun >= 2)
   {echo"<option value='2'>2</option>";}
 if($bbgun >= 5)
   {echo"<option value='5'>5</option>";}
     if($bbgun >= 10)
   {echo"<option value='10'>10</option>";}
 if($bbgun >= 20)
   {echo"<option value='20'>20</option>";}
 if($bbgun >= 50)
   {echo"<option value='50'>50</option>";}
 if($bbgun >= 100)
   {echo"<option value='100'>100</option>";}
 if($bbgun >= 200)
   {echo"<option value='200'>200</option>";}
 if($bbgun >= 500)
   {echo"<option value='500'>500</option>";}
 if($bbgun >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vbbgun" value="verkoop bbguns">
 </form>
 <?php
    }
  if($antidotes >= 1)
  {
  ?>
  <a title='<?php if($antidotes > 1){echo"U heeft $antidotes antidotes, ik geef je 15 pixels per stuk";} else {echo"U heeft 1 antidote, ik geef je 15 pixels per stuk";} ?>' href="verkoopshop.php?vantidotesv=1">antidotes<br /></a>
  <?php
  }
  $_SESSION["vantidotesv"] = $_GET["vantidotesv"];
  $vantidotesv = $_SESSION["vantidotesv"];   
if($vantidotesv == 1)
     {
     if(isset($_POST["vantidotes"]))
   {
 $antidotesverkocht = $_POST["antidotesverkocht"];
 $antidotes = $antidotes - $antidotesverkocht;
 $_SESSION["antidotes"] = $antidotes;
 $pixels = $pixels + ($antidotesverkocht * 15);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vantidotesv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vantidotesv=1" method="post">
   <select name="antidotesverkocht">
     <option selected value="0">0</option>
 <?php
 if($antidotes >= 1)
   {echo"<option value='1'>1</option>";}
 if($antidotes >= 2)
   {echo"<option value='2'>2</option>";}
 if($antidotes >= 5)
   {echo"<option value='5'>5</option>";}
     if($antidotes >= 10)
   {echo"<option value='10'>10</option>";}
 if($antidotes >= 20)
   {echo"<option value='20'>20</option>";}
 if($antidotes >= 50)
   {echo"<option value='50'>50</option>";}
 if($antidotes >= 100)
   {echo"<option value='100'>100</option>";}
 if($antidotes >= 200)
   {echo"<option value='200'>200</option>";}
 if($antidotes >= 500)
   {echo"<option value='500'>500</option>";}
 if($antidotes >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vantidotes" value="verkoop antidotes">
 </form>
 <?php
    }
  if($levenspotions >= 1)
  {
  ?>
  <a title='<?php if($levenspotions > 1){echo"U heeft $levenspotions levenspotions, ik geef je 15 pixels per stuk";} else {echo"U heeft 1 levenspotion, ik geef je 15 pixels per stuk";} ?>' href="verkoopshop.php?vlevenspotionsv=1">levenspotions<br /></a>
  <?php
  }
  $_SESSION["vlevenspotionsv"] = $_GET["vlevenspotionsv"];
  $vlevenspotionsv = $_SESSION["vlevenspotionsv"];       
if($vlevenspotionsv == 1)
     {
     if(isset($_POST["vlevenspotions"]))
   {
 $levenspotionsverkocht = $_POST["levenspotionsverkocht"];
 $levenspotions = $levenspotions - $levenspotionsverkocht;
 $_SESSION["levenspotions"] = $levenspotions;
 $pixels = $pixels + ($levenspotionsverkocht * 15);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vlevenspotionsv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vlevenspotionsv=1" method="post">
   <select name="levenspotionsverkocht">
     <option selected value="0">0</option>
 <?php
 if($levenspotions >= 1)
   {echo"<option value='1'>1</option>";}
 if($levenspotions >= 2)
   {echo"<option value='2'>2</option>";}
 if($levenspotions >= 5)
   {echo"<option value='5'>5</option>";}
     if($levenspotions >= 10)
   {echo"<option value='10'>10</option>";}
 if($levenspotions >= 20)
   {echo"<option value='20'>20</option>";}
 if($levenspotions >= 50)
   {echo"<option value='50'>50</option>";}
 if($levenspotions >= 100)
   {echo"<option value='100'>100</option>";}
 if($levenspotions >= 200)
   {echo"<option value='200'>200</option>";}
 if($levenspotions >= 500)
   {echo"<option value='500'>500</option>";}
 if($levenspotions >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vlevenspotions" value="verkoop levenspotions">
 </form>
 <?php
    }
  if($flesje >= 1)
  {
  ?>
  <a title='<?php if($flesje > 1){echo"U heeft $flesje flesjes, ik geef je 3 pixels per stuk";} else {echo"U heeft 1 flesje, ik geef je 3 pixels per stuk";} ?>' href="verkoopshop.php?vflesjev=1">flesjes<br /></a>
  <?php
  }
  $_SESSION["vflesjev"] = $_GET["vflesjev"];
  $vflesjev = $_SESSION["vflesjev"];   
if($vflesjev == 1)
     {
     if(isset($_POST["vflesje"]))
   {
 $flesjeverkocht = $_POST["flesjeverkocht"];
 $flesje = $flesje - $flesjeverkocht;
 $_SESSION["flesje"] = $flesje;
 $pixels = $pixels + ($flesjeverkocht * 3);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vflesjev"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vflesjev=1" method="post">
   <select name="flesjeverkocht">
     <option selected value="0">0</option>
 <?php
 if($flesje >= 1)
   {echo"<option value='1'>1</option>";}
 if($flesje >= 2)
   {echo"<option value='2'>2</option>";}
 if($flesje >= 5)
   {echo"<option value='5'>5</option>";}
     if($flesje >= 10)
   {echo"<option value='10'>10</option>";}
 if($flesje >= 20)
   {echo"<option value='20'>20</option>";}
 if($flesje >= 50)
   {echo"<option value='50'>50</option>";}
 if($flesje >= 100)
   {echo"<option value='100'>100</option>";}
 if($flesje >= 200)
   {echo"<option value='200'>200</option>";}
 if($flesje >= 500)
   {echo"<option value='500'>500</option>";}
 if($flesje >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vflesje" value="verkoop flesjes">
 </form>
 <?php
    }
  if($energyrepen >= 1)
  {
  ?>
  <a title='<?php if($energyrepen > 1){echo"U heeft $energyrepen energyrepen, ik geef je 15 pixels per stuk";} else {echo"U heeft 1 energyreep, ik geef je 15 pixels per stuk";} ?>' href="verkoopshop.php?venergyrepenv=1">energyrepen<br /></a>
  <?php
  }
  $_SESSION["venergyrepenv"] = $_GET["venergyrepenv"];
  $venergyrepenv = $_SESSION["venergyrepenv"];   
if($venergyrepenv == 1)
     {
     if(isset($_POST["venergyrepen"]))
   {
 $energyrepenverkocht = $_POST["energyrepenverkocht"];
 $energyrepen = $energyrepen - $energyrepenverkocht;
 $_SESSION["energyrepen"] = $energyrepen;
 $pixels = $pixels + ($energyrepenverkocht * 15);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["venergyrepenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?venergyrepenv=1" method="post">
   <select name="energyrepenverkocht">
     <option selected value="0">0</option>
 <?php
 if($energyrepen >= 1)
   {echo"<option value='1'>1</option>";}
 if($energyrepen >= 2)
   {echo"<option value='2'>2</option>";}
 if($energyrepen >= 5)
   {echo"<option value='5'>5</option>";}
     if($energyrepen >= 10)
   {echo"<option value='10'>10</option>";}
 if($energyrepen >= 20)
   {echo"<option value='20'>20</option>";}
 if($energyrepen >= 50)
   {echo"<option value='50'>50</option>";}
 if($energyrepen >= 100)
   {echo"<option value='100'>100</option>";}
 if($energyrepen >= 200)
   {echo"<option value='200'>200</option>";}
 if($energyrepen >= 500)
   {echo"<option value='500'>500</option>";}
 if($energyrepen >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="venergyrepen" value="verkoop energyrepen">
 </form>
 <?php
    }
  if($schedel >= 1)
  {
  ?>
  <a title='<?php if($schedel > 1){echo"U heeft $schedel schedels, ik geef je 14 pixels per stuk";} else {echo"U heeft 1 schedel, ik geef je 14 pixels per stuk";} ?>' href="verkoopshop.php?vschedelv=1">schedels<br /></a>
  <?php
  }
  $_SESSION["vschedelv"] = $_GET["vschedelv"];
  $vschedelv = $_SESSION["vschedelv"];   
if($vschedelv == 1)
     {
     if(isset($_POST["vschedel"]))
   {
 $schedelverkocht = $_POST["schedelverkocht"];
 $schedel = $schedel - $schedelverkocht;
 $_SESSION["schedel"] = $schedel;
 $pixels = $pixels + ($schedelverkocht * 14);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vschedelv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vschedelv=1" method="post">
   <select name="schedelverkocht">
     <option selected value="0">0</option>
 <?php
 if($schedel >= 1)
   {echo"<option value='1'>1</option>";}
 if($schedel >= 2)
   {echo"<option value='2'>2</option>";}
 if($schedel >= 5)
   {echo"<option value='5'>5</option>";}
     if($schedel >= 10)
   {echo"<option value='10'>10</option>";}
 if($schedel >= 20)
   {echo"<option value='20'>20</option>";}
 if($schedel >= 50)
   {echo"<option value='50'>50</option>";}
 if($schedel >= 100)
   {echo"<option value='100'>100</option>";}
 if($schedel >= 200)
   {echo"<option value='200'>200</option>";}
 if($schedel >= 500)
   {echo"<option value='500'>500</option>";}
 if($schedel >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vschedel" value="verkoop schedels">
 </form>
 <?php
    }
  if($vingerkootje >= 1)
  {
  ?>
  <a title='<?php if($vingerkootje > 1){echo"U heeft $vingerkootje vingerkootjes, ik geef je 7 pixels per stuk";} else {echo"U heeft 1 vingerkootje, ik geef je 7 pixels per stuk";} ?>' href="verkoopshop.php?vvingerkootjev=1">vingerkootjes<br /></a>
  <?php
  }
  $_SESSION["vvingerkootjev"] = $_GET["vvingerkootjev"];
  $vvingerkootjev = $_SESSION["vvingerkootjev"];    
  if($vvingerkootjev == 1)
     {
     if(isset($_POST["vvingerkootje"]))
   {
 $vingerkootjeverkocht = $_POST["vingerkootjeverkocht"];
 $vingerkootje = $vingerkootje - $vingerkootjeverkocht;
 $_SESSION["vingerkootje"] = $vingerkootje;
 $pixels = $pixels + ($vingerkootjeverkocht * 7);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vvingerkootjev"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vvingerkootjev=1" method="post">
   <select name="vingerkootjeverkocht">
     <option selected value="0">0</option>
 <?php
 if($vingerkootje >= 1)
   {echo"<option value='1'>1</option>";}
 if($vingerkootje >= 2)
   {echo"<option value='2'>2</option>";}
 if($vingerkootje >= 5)
   {echo"<option value='5'>5</option>";}
     if($vingerkootje >= 10)
   {echo"<option value='10'>10</option>";}
 if($vingerkootje >= 20)
   {echo"<option value='20'>20</option>";}
 if($vingerkootje >= 50)
   {echo"<option value='50'>50</option>";}
 if($vingerkootje >= 100)
   {echo"<option value='100'>100</option>";}
 if($vingerkootje >= 200)
   {echo"<option value='200'>200</option>";}
 if($vingerkootje >= 500)
   {echo"<option value='500'>500</option>";}
 if($vingerkootje >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vvingerkootje" value="verkoop vingerkootjes">
 </form>
 <?php
    }
  if($tanden >= 1)
  {
  ?>
  <a title='<?php if($tanden > 1){echo"U heeft $tanden tanden, ik geef je 14 pixels per stuk";} else {echo"U heeft 1 tand, ik geef je 14 pixels per stuk";} ?>' href="verkoopshop.php?vtandenv=1">tanden<br /></a>
  <?php
  }
  $_SESSION["vtandenv"] = $_GET["vtandenv"];
  $vtandenv = $_SESSION["vtandenv"];    
  if($vtandenv == 1)
     {
     if(isset($_POST["vtanden"]))
   {
 $tandenverkocht = $_POST["tandenverkocht"];
 $tanden = $tanden - $tandenverkocht;
 $_SESSION["tanden"] = $tanden;
 $pixels = $pixels + ($tandenverkocht * 14);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vtandenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vtandenv=1" method="post">
   <select name="tandenverkocht">
     <option selected value="0">0</option>
 <?php
 if($tanden >= 1)
   {echo"<option value='1'>1</option>";}
 if($tanden >= 2)
   {echo"<option value='2'>2</option>";}
 if($tanden >= 5)
   {echo"<option value='5'>5</option>";}
     if($tanden >= 10)
   {echo"<option value='10'>10</option>";}
 if($tanden >= 20)
   {echo"<option value='20'>20</option>";}
 if($tanden >= 50)
   {echo"<option value='50'>50</option>";}
 if($tanden >= 100)
   {echo"<option value='100'>100</option>";}
 if($tanden >= 200)
   {echo"<option value='200'>200</option>";}
 if($tanden >= 500)
   {echo"<option value='500'>500</option>";}
 if($tanden >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vtanden" value="verkoop tanden">
 </form>
 <?php
    }
  if($stenen >= 1)
  {
  ?>
  <a title='<?php if($stenen > 1){echo"U heeft $stenen stenen, ik geef je 5 pixels per steen";} else {echo"U heeft 1 steen, ik geef je 5 pixels per steen";} ?>' href="verkoopshop.php?vstenenv=1">stenen<br /></a>
  <?php
  }
  $_SESSION["vstenenv"] = $_GET["vstenenv"];
  $vstenenv = $_SESSION["vstenenv"];    
  if($vstenenv == 1)
     {
     if(isset($_POST["vstenen"]))
   {
 $stenenverkocht = $_POST["stenenverkocht"];
 $stenen = $stenen - $stenenverkocht;
 $_SESSION["stenen"] = $stenen;
 $pixels = $pixels + ($stenenverkocht * 5);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vstenenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vstenenv=1" method="post">
   <select name="stenenverkocht">
     <option selected value="0">0</option>
 <?php
 if($stenen >= 1)
   {echo"<option value='1'>1</option>";}
 if($stenen >= 2)
   {echo"<option value='2'>2</option>";}
 if($stenen >= 5)
   {echo"<option value='5'>5</option>";}
     if($stenen >= 10)
   {echo"<option value='10'>10</option>";}
 if($stenen >= 20)
   {echo"<option value='20'>20</option>";}
 if($stenen >= 50)
   {echo"<option value='50'>50</option>";}
 if($stenen >= 100)
   {echo"<option value='100'>100</option>";}
 if($stenen >= 200)
   {echo"<option value='200'>200</option>";}
 if($stenen >= 500)
   {echo"<option value='500'>500</option>";}
 if($stenen >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vstenen" value="verkoop stenen">
 </form>
 <?php
    }
  if($goudenketting >= 1)
  {
  ?>
  <a title='<?php if($goudenketting > 1){echo"U heeft $goudenketting gouden kettingen, ik geef je 210 pixels per stuk";} else {echo"U heeft 1 gouden ketting, ik geef je 210 pixels per stuk";} ?>' href="verkoopshop.php?vgoudenkettingv=1">gouden kettingen<br /></a>
  <?php
  }
  $_SESSION["vgoudenkettingv"] = $_GET["vgoudenkettingv"];
  $vgoudenkettingv = $_SESSION["vgoudenkettingv"];    
  if($vgoudenkettingv == 1)
     {
     if(isset($_POST["vgoudenketting"]))
   {
 $goudenkettingverkocht = $_POST["goudenkettingverkocht"];
 $goudenketting = $goudenketting - $goudenkettingverkocht;
 $_SESSION["goudenketting"] = $goudenketting;
 $pixels = $pixels + ($goudenkettingverkocht * 210);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vgoudenkettingv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vgoudenkettingv=1" method="post">
   <select name="goudenkettingverkocht">
     <option selected value="0">0</option>
 <?php
 if($goudenketting >= 1)
   {echo"<option value='1'>1</option>";}
 if($goudenketting >= 2)
   {echo"<option value='2'>2</option>";}
 if($goudenketting >= 5)
   {echo"<option value='5'>5</option>";}
     if($goudenketting >= 10)
   {echo"<option value='10'>10</option>";}
 if($goudenketting >= 20)
   {echo"<option value='20'>20</option>";}
 if($goudenketting >= 50)
   {echo"<option value='50'>50</option>";}
 if($goudenketting >= 100)
   {echo"<option value='100'>100</option>";}
 if($goudenketting >= 200)
   {echo"<option value='200'>200</option>";}
 if($goudenketting >= 500)
   {echo"<option value='500'>500</option>";}
 if($goudenketting >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vgoudenketting" value="verkoop gouden kettingen">
 </form>
 <?php
    }
  if($oorbellen >= 1)
  {
  ?>
  <a title='<?php if($oorbellen > 1){echo"U heeft $oorbellen set oorbellen, ik geef je 120 pixels per set";} else {echo"U heeft 1 set oorbellen, ik geef je 120 pixels per set";} ?>' href="verkoopshop.php?voorbellenv=1">oorbellen<br /></a>
  <?php
  }
  $_SESSION["voorbellenv"] = $_GET["voorbellenv"];
  $voorbellenv = $_SESSION["voorbellenv"];    
  if($voorbellenv == 1)
     {
     if(isset($_POST["voorbellen"]))
   {
 $oorbellenverkocht = $_POST["oorbellenverkocht"];
 $oorbellen = $oorbellen - $oorbellenverkocht;
 $_SESSION["oorbellen"] = $oorbellen;
 $pixels = $pixels + ($oorbellenverkocht * 120);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["voorbellenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?voorbellenv=1" method="post">
   <select name="oorbellenverkocht">
     <option selected value="0">0</option>
 <?php
 if($oorbellen >= 1)
   {echo"<option value='1'>1</option>";}
 if($oorbellen >= 2)
   {echo"<option value='2'>2</option>";}
 if($oorbellen >= 5)
   {echo"<option value='5'>5</option>";}
     if($oorbellen >= 10)
   {echo"<option value='10'>10</option>";}
 if($oorbellen >= 20)
   {echo"<option value='20'>20</option>";}
 if($oorbellen >= 50)
   {echo"<option value='50'>50</option>";}
 if($oorbellen >= 100)
   {echo"<option value='100'>100</option>";}
 if($oorbellen >= 200)
   {echo"<option value='200'>200</option>";}
 if($oorbellen >= 500)
   {echo"<option value='500'>500</option>";}
 if($oorbellen >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="voorbellen" value="verkoop oorbellen">
 </form>
 </div>
<div id="koopshoprechts">
 <?php
    }
  if($zilverenketting >= 1)
  {
  ?>
  <a title='<?php if($zilverenketting > 1){echo"U heeft $zilverenketting zilveren kettingen, ik geef je 120 pixels per stuk";} else {echo"U heeft 1 zilveren ketting, ik geef je 120 pixels per stuk";} ?>' href="verkoopshop.php?vzilverenkettingv=1">zilveren kettingen<br /></a>
  <?php
  }
  $_SESSION["vzilverenkettingv"] = $_GET["vzilverenkettingv"];
  $vzilverenkettingv = $_SESSION["vzilverenkettingv"];    
  if($vzilverenkettingv == 1)
     {
     if(isset($_POST["vzilverenketting"]))
   {
 $zilverenkettingverkocht = $_POST["zilverenkettingverkocht"];
 $zilverenketting = $zilverenketting - $zilverenkettingverkocht;
 $_SESSION["zilverenketting"] = $zilverenketting;
 $pixels = $pixels + ($zilverenkettingverkocht * 120);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vzilverenkettingv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vzilverenkettingv=1" method="post">
   <select name="zilverenkettingverkocht">
     <option selected value="0">0</option>
 <?php
 if($zilverenketting >= 1)
   {echo"<option value='1'>1</option>";}
 if($zilverenketting >= 2)
   {echo"<option value='2'>2</option>";}
 if($zilverenketting >= 5)
   {echo"<option value='5'>5</option>";}
     if($zilverenketting >= 10)
   {echo"<option value='10'>10</option>";}
 if($zilverenketting >= 20)
   {echo"<option value='20'>20</option>";}
 if($zilverenketting >= 50)
   {echo"<option value='50'>50</option>";}
 if($zilverenketting >= 100)
   {echo"<option value='100'>100</option>";}
 if($zilverenketting >= 200)
   {echo"<option value='200'>200</option>";}
 if($zilverenketting >= 500)
   {echo"<option value='500'>500</option>";}
 if($zilverenketting >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vzilverenketting" value="verkoop zilveren kettingen">
 </form>
 <?php
    }
  if($ring >= 1)
  {
  ?>
  <a title='<?php if($ring > 1){echo"U heeft $ring ringen, ik geef je 50 pixels per stuk";} else {echo"U heeft 1 ring, ik geef je 50 pixels per stuk";} ?>' href="verkoopshop.php?vringv=1">ringen<br /></a>
  <?php
  }
  $_SESSION["vringv"] = $_GET["vringv"];
  $vringv = $_SESSION["vringv"];    
  if($vringv == 1)
     {
     if(isset($_POST["vring"]))
   {
 $ringverkocht = $_POST["ringverkocht"];
 $ring = $ring - $ringverkocht;
 $_SESSION["ring"] = $ring;
 $pixels = $pixels + ($ringverkocht * 50);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vringv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vringv=1" method="post">
   <select name="ringverkocht">
     <option selected value="0">0</option>
 <?php
 if($ring >= 1)
   {echo"<option value='1'>1</option>";}
 if($ring >= 2)
   {echo"<option value='2'>2</option>";}
 if($ring >= 5)
   {echo"<option value='5'>5</option>";}
     if($ring >= 10)
   {echo"<option value='10'>10</option>";}
 if($ring >= 20)
   {echo"<option value='20'>20</option>";}
 if($ring >= 50)
   {echo"<option value='50'>50</option>";}
 if($ring >= 100)
   {echo"<option value='100'>100</option>";}
 if($ring >= 200)
   {echo"<option value='200'>200</option>";}
 if($ring >= 500)
   {echo"<option value='500'>500</option>";}
 if($ring >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vring" value="verkoop ringen">
 </form>
 <?php
    }
  if($armband >= 1)
  {
  ?>
  <a title='<?php if($armband > 1){echo"U heeft $armband armbanden, ik geef je 70 pixels per stuk";} else {echo"U heeft 1 armband, ik geef je 70 pixels per stuk";} ?>' href="verkoopshop.php?varmbandv=1">armbanden<br /></a>
  <?php
  }
  $_SESSION["varmbandv"] = $_GET["varmbandv"];
  $varmbandv = $_SESSION["varmbandv"];    
  if($varmbandv == 1)
     {
     if(isset($_POST["varmband"]))
   {
 $armbandverkocht = $_POST["armbandverkocht"];
 $armband = $armband - $armbandverkocht;
 $_SESSION["armband"] = $armband;
 $pixels = $pixels + ($armbandverkocht * 70);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["varmbandv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?varmbandv=1" method="post">
   <select name="armbandverkocht">
     <option selected value="0">0</option>
 <?php
 if($armband >= 1)
   {echo"<option value='1'>1</option>";}
 if($armband >= 2)
   {echo"<option value='2'>2</option>";}
 if($armband >= 5)
   {echo"<option value='5'>5</option>";}
     if($armband >= 10)
   {echo"<option value='10'>10</option>";}
 if($armband >= 20)
   {echo"<option value='20'>20</option>";}
 if($armband >= 50)
   {echo"<option value='50'>50</option>";}
 if($armband >= 100)
   {echo"<option value='100'>100</option>";}
 if($armband >= 200)
   {echo"<option value='200'>200</option>";}
 if($armband >= 500)
   {echo"<option value='500'>500</option>";}
 if($armband >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="varmband" value="verkoop armbanden">
 </form>
 <?php
    }
  if($munt >= 1)
  {
  ?>
  <a title='<?php if($munt > 1){echo"U heeft $munt azteekse munten, ik geef je 90 pixels per stuk";} else {echo"U heeft 1 azteekse munt, ik geef je 90 pixels per stuk";} ?>' href="verkoopshop.php?vmuntv=1">azteekse munten<br /></a>
  <?php
  }
  $_SESSION["vmuntv"] = $_GET["vmuntv"];
  $vmuntv = $_SESSION["vmuntv"];    
  if($vmuntv == 1)
     {
     if(isset($_POST["vmunt"]))
   {
 $muntverkocht = $_POST["muntverkocht"];
 $munt = $munt - $muntverkocht;
 $_SESSION["munt"] = $munt;
 $pixels = $pixels + ($muntverkocht * 90);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vmuntv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vmuntv=1" method="post">
   <select name="muntverkocht">
     <option selected value="0">0</option>
 <?php
 if($munt >= 1)
   {echo"<option value='1'>1</option>";}
 if($munt >= 2)
   {echo"<option value='2'>2</option>";}
 if($munt >= 5)
   {echo"<option value='5'>5</option>";}
     if($munt >= 10)
   {echo"<option value='10'>10</option>";}
 if($munt >= 20)
   {echo"<option value='20'>20</option>";}
 if($munt >= 50)
   {echo"<option value='50'>50</option>";}
 if($munt >= 100)
   {echo"<option value='100'>100</option>";}
 if($munt >= 200)
   {echo"<option value='200'>200</option>";}
 if($munt >= 500)
   {echo"<option value='500'>500</option>";}
 if($munt >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vmunt" value="verkoop azteekse munten">
 </form>
 <?php
    }
  if($planken >= 1)
  {
  ?>
  <a title='<?php if($plank > 1){echo"U heeft $plank planken, ik geef je 12 pixels per stuk";} else {echo"U heeft 1 plank, ik geef je 12 pixels per stuk";} ?>' href="verkoopshop.php?vplankenv=1">planken<br /></a>
  <?php
  }
  $_SESSION["vplankenv"] = $_GET["vplankenv"];
  $vplankenv = $_SESSION["vplankenv"];     
if($vplankenv == 1)
     {
     if(isset($_POST["vplanken"]))
   {
 $plankenverkocht = $_POST["plankenverkocht"];
 $planken = $planken - $plankenverkocht;
 $_SESSION["planken"] = $planken;
 $pixels = $pixels + ($plankenverkocht * 12);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vplankenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vplankenv=1" method="post">
   <select name="plankenverkocht">
     <option selected value="0">0</option>
 <?php
 if($planken >= 1)
   {echo"<option value='1'>1</option>";}
 if($planken >= 2)
   {echo"<option value='2'>2</option>";}
 if($planken >= 5)
   {echo"<option value='5'>5</option>";}
     if($planken >= 10)
   {echo"<option value='10'>10</option>";}
 if($planken >= 20)
   {echo"<option value='20'>20</option>";}
 if($planken >= 50)
   {echo"<option value='50'>50</option>";}
 if($planken >= 100)
   {echo"<option value='100'>100</option>";}
 if($planken >= 200)
   {echo"<option value='200'>200</option>";}
 if($planken >= 500)
   {echo"<option value='500'>500</option>";}
 if($planken >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vplanken" value="verkoop planken">
 </form>
 <?php
    }
  if($tak >= 1)
  {
  ?>
  <a title='<?php if($tak > 1){echo"U heeft $tak takken, ik geef je 4 pixels per stuk";} else {echo"U heeft 1 tak, ik geef je 4 pixels per stuk";} ?>' href="verkoopshop.php?vtakv=1">takken<br /></a>
  <?php
  }
  $_SESSION["vtakv"] = $_GET["vtakv"];
  $vtakv = $_SESSION["vtakv"];   
if($vtakv == 1)
     {
     if(isset($_POST["vtak"]))
   {
 $takverkocht = $_POST["takverkocht"];
 $tak = $tak - $takverkocht;
 $_SESSION["tak"] = $tak;
 $pixels = $pixels + ($takverkocht * 4);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vtakv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vtakv=1" method="post">
   <select name="takverkocht">
     <option selected value="0">0</option>
 <?php
 if($tak >= 1)
   {echo"<option value='1'>1</option>";}
 if($tak >= 2)
   {echo"<option value='2'>2</option>";}
 if($tak >= 5)
   {echo"<option value='5'>5</option>";}
     if($tak >= 10)
   {echo"<option value='10'>10</option>";}
 if($tak >= 20)
   {echo"<option value='20'>20</option>";}
 if($tak >= 50)
   {echo"<option value='50'>50</option>";}
 if($tak >= 100)
   {echo"<option value='100'>100</option>";}
 if($tak >= 200)
   {echo"<option value='200'>200</option>";}
 if($tak >= 500)
   {echo"<option value='500'>500</option>";}
 if($tak >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vtak" value="verkoop takken">
 </form>
 <?php
    }
  if($ijzer >= 1)
  {
  ?>
  <a title='<?php if($ijzer > 1){echo"U heeft $ijzer brokken ijzer, ik geef je 25 pixels per brok";} else {echo"U heeft 1 brok ijzer, ik geef je 25 pixels per brock";} ?>' href="verkoopshop.php?vijzerv=1">brokken ijzer<br /></a>
  <?php
  }
  $_SESSION["vijzerv"] = $_GET["vijzerv"];
  $vijzerv = $_SESSION["vijzerv"];    
  if($vijzerv == 1)
     {
     if(isset($_POST["vijzer"]))
   {
 $ijzerverkocht = $_POST["ijzerverkocht"];
 $ijzer = $ijzer - $ijzerverkocht;
 $_SESSION["ijzer"] = $ijzer;
 $pixels = $pixels + ($ijzerverkocht * 25);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vijzerv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vijzerv=1" method="post">
   <select name="ijzerverkocht">
     <option selected value="0">0</option>
 <?php
 if($ijzer >= 1)
   {echo"<option value='1'>1</option>";}
 if($ijzer >= 2)
   {echo"<option value='2'>2</option>";}
 if($ijzer >= 5)
   {echo"<option value='5'>5</option>";}
     if($ijzer >= 10)
   {echo"<option value='10'>10</option>";}
 if($ijzer >= 20)
   {echo"<option value='20'>20</option>";}
 if($ijzer >= 50)
   {echo"<option value='50'>50</option>";}
 if($ijzer >= 100)
   {echo"<option value='100'>100</option>";}
 if($ijzer >= 200)
   {echo"<option value='200'>200</option>";}
 if($ijzer >= 500)
   {echo"<option value='500'>500</option>";}
 if($ijzer >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vijzer" value="verkoop brokken ijzer">
 </form>
 <?php
    }
  if($donkerkristal >= 1)
  {
  ?>
  <a title='<?php if($donkerkristal > 1){echo"U heeft $donkerkristal donkere kristallen, ik geef je 800 pixels per stuk";} else {echo"U heeft 1 donker kristal, ik geef je 800 pixels per stuk";} ?>' href="verkoopshop.php?vdonkerkristalv=1">donkere kristallen<br /></a>
  <?php
  }
  $_SESSION["vdonkerkristalv"] = $_GET["vdonkerkristalv"];
  $vdonkerkristalv = $_SESSION["vdonkerkristalv"];    
  if($vdonkerkristalv == 1)
     {
     if(isset($_POST["vdonkerkristal"]))
   {
 $donkerkristalverkocht = $_POST["donkerkristalverkocht"];
 $donkerkristal = $donkerkristal - $donkerkristalverkocht;
 $_SESSION["donkerkristal"] = $donkerkristal;
 $pixels = $pixels + ($donkerkristalverkocht * 800);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vdonkerkristalv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vdonkerkristalv=1" method="post">
   <select name="donkerkristalverkocht">
     <option selected value="0">0</option>
 <?php
 if($donkerkristal >= 1)
   {echo"<option value='1'>1</option>";}
 if($donkerkristal >= 2)
   {echo"<option value='2'>2</option>";}
 if($donkerkristal >= 5)
   {echo"<option value='5'>5</option>";}
     if($donkerkristal >= 10)
   {echo"<option value='10'>10</option>";}
 if($donkerkristal >= 20)
   {echo"<option value='20'>20</option>";}
 if($donkerkristal >= 50)
   {echo"<option value='50'>50</option>";}
 if($donkerkristal >= 100)
   {echo"<option value='100'>100</option>";}
 if($donkerkristal >= 200)
   {echo"<option value='200'>200</option>";}
 if($donkerkristal >= 500)
   {echo"<option value='500'>500</option>";}
 if($donkerkristal >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vdonkerkristal" value="verkoop donkere kristallen">
 </form>
 <?php
    }
  if($roodkristal >= 1)
  {
  ?>
  <a title='<?php if($roodkristal > 1){echo"U heeft $roodkristal rode kristallen, ik geef je 600 pixels per stuk";} else {echo"U heeft 1 rood kristal, ik geef je 600 pixels per stuk";} ?>' href="verkoopshop.php?vroodkristalv=1">rode kristallen<br /></a>
  <?php
  }
  $_SESSION["vroodkristalv"] = $_GET["vroodkristalv"];
  $vroodkristalv = $_SESSION["vroodkristalv"];    
  if($vroodkristalv == 1)
     {
     if(isset($_POST["vroodkristal"]))
   {
 $roodkristalverkocht = $_POST["roodkristalverkocht"];
 $roodkristal = $roodkristal - $roodkristalverkocht;
 $_SESSION["roodkristal"] = $roodkristal;
 $pixels = $pixels + ($roodkristalverkocht * 600);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vroodkristalv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vroodkristalv=1" method="post">
   <select name="roodkristalverkocht">
     <option selected value="0">0</option>
 <?php
 if($roodkristal >= 1)
   {echo"<option value='1'>1</option>";}
 if($roodkristal >= 2)
   {echo"<option value='2'>2</option>";}
 if($roodkristal >= 5)
   {echo"<option value='5'>5</option>";}
     if($roodkristal >= 10)
   {echo"<option value='10'>10</option>";}
 if($roodkristal >= 20)
   {echo"<option value='20'>20</option>";}
 if($roodkristal >= 50)
   {echo"<option value='50'>50</option>";}
 if($roodkristal >= 100)
   {echo"<option value='100'>100</option>";}
 if($roodkristal >= 200)
   {echo"<option value='200'>200</option>";}
 if($roodkristal >= 500)
   {echo"<option value='500'>500</option>";}
 if($roodkristal >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vroodkristal" value="verkoop rode kristallen">
 </form>
 <?php
    }
  if($hamer >= 1)
  {
  ?>
  <a title='<?php if($hamer > 1){echo"U heeft $hamer hamers, ik geef je 20 pixels per stuk";} else {echo"U heeft 1 hamer, ik geef je 20 pixels per stuk";} ?>' href="verkoopshop.php?vhamerv=1">hamers<br /></a>
  <?php
  }
  $_SESSION["vhamerv"] = $_GET["vhamerv"];
  $vhamerv = $_SESSION["vhamerv"];    
  if($vhamerv == 1)
     {
     if(isset($_POST["vhamer"]))
   {
 $hamerverkocht = $_POST["hamerverkocht"];
 $hamer = $hamer - $hamerverkocht;
 $_SESSION["hamer"] = $hamer;
 $pixels = $pixels + ($hamerverkocht * 20);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vhamerv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vhamerv=1" method="post">
   <select name="hamerverkocht">
     <option selected value="0">0</option>
 <?php
 if($hamer >= 1)
   {echo"<option value='1'>1</option>";}
 if($hamer >= 2)
   {echo"<option value='2'>2</option>";}
 if($hamer >= 5)
   {echo"<option value='5'>5</option>";}
     if($hamer >= 10)
   {echo"<option value='10'>10</option>";}
 if($hamer >= 20)
   {echo"<option value='20'>20</option>";}
 if($hamer >= 50)
   {echo"<option value='50'>50</option>";}
 if($hamer >= 100)
   {echo"<option value='100'>100</option>";}
 if($hamer >= 200)
   {echo"<option value='200'>200</option>";}
 if($hamer >= 500)
   {echo"<option value='500'>500</option>";}
 if($hamer >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vhamer" value="verkoop hamers">
 </form>
 <?php
    }
  if($schroevendraaier >= 1)
  {
  ?>
  <a title='<?php if($schroevendraaier > 1){echo"U heeft $schroevendraaier schroevendraaiers, ik geef je 20 pixels per stuk";} else {echo"U heeft 1 schroevendraaier, ik geef je 20 pixels per stuk";} ?>' href="verkoopshop.php?vschroevendraaierv=1">schroevendraaiers<br /></a>
  <?php
  }
  $_SESSION["vschroevendraaierv"] = $_GET["vschroevendraaierv"];
  $vschroevendraaierv = $_SESSION["vschroevendraaierv"];    
  if($vschroevendraaierv == 1)
     {
     if(isset($_POST["vschroevendraaier"]))
   {
 $schroevendraaierverkocht = $_POST["schroevendraaierverkocht"];
 $schroevendraaier = $schroevendraaier - $schroevendraaierverkocht;
 $_SESSION["schroevendraaier"] = $schroevendraaier;
 $pixels = $pixels + ($schroevendraaierverkocht * 20);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vschroevendraaierv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vschroevendraaierv=1" method="post">
   <select name="schroevendraaierverkocht">
     <option selected value="0">0</option>
 <?php
 if($schroevendraaier >= 1)
   {echo"<option value='1'>1</option>";}
 if($schroevendraaier >= 2)
   {echo"<option value='2'>2</option>";}
 if($schroevendraaier >= 5)
   {echo"<option value='5'>5</option>";}
     if($schroevendraaier >= 10)
   {echo"<option value='10'>10</option>";}
 if($schroevendraaier >= 20)
   {echo"<option value='20'>20</option>";}
 if($schroevendraaier >= 50)
   {echo"<option value='50'>50</option>";}
 if($schroevendraaier >= 100)
   {echo"<option value='100'>100</option>";}
 if($schroevendraaier >= 200)
   {echo"<option value='200'>200</option>";}
 if($schroevendraaier >= 500)
   {echo"<option value='500'>500</option>";}
 if($schroevendraaier >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vschroevendraaier" value="verkoop schroevendraaiers">
 </form>
 <?php
    }
  if($beitel >= 1)
  {
  ?>
  <a title='<?php if($beitel > 1){echo"U heeft $beitel beitels, ik geef je 20 pixels per stuk";} else {echo"U heeft 1 beitel, ik geef je 20 pixels per stuk";} ?>' href="verkoopshop.php?vbeitelv=1">beitels<br /></a>
  <?php
  }
  $_SESSION["vbeitelv"] = $_GET["vbeitelv"];
  $vbeitelv = $_SESSION["vbeitelv"];      
  if($vbeitelv == 1)
     {
     if(isset($_POST["vbeitel"]))
   {
 $beitelverkocht = $_POST["beitelverkocht"];
 $beitel = $beitel - $beitelverkocht;
 $_SESSION["beitel"] = $beitel;
 $pixels = $pixels + ($beitelverkocht * 20);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vbeitelv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vbeitelv=1" method="post">
   <select name="beitelverkocht">
     <option selected value="0">0</option>
 <?php
 if($beitel >= 1)
   {echo"<option value='1'>1</option>";}
 if($beitel >= 2)
   {echo"<option value='2'>2</option>";}
 if($beitel >= 5)
   {echo"<option value='5'>5</option>";}
     if($beitel >= 10)
   {echo"<option value='10'>10</option>";}
 if($beitel >= 20)
   {echo"<option value='20'>20</option>";}
 if($beitel >= 50)
   {echo"<option value='50'>50</option>";}
 if($beitel >= 100)
   {echo"<option value='100'>100</option>";}
 if($beitel >= 200)
   {echo"<option value='200'>200</option>";}
 if($beitel >= 500)
   {echo"<option value='500'>500</option>";}
 if($beitel >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vbeitel" value="verkoop beitels">
 </form>
 <?php
    }
  if($schoenen >= 1)
  {
  ?>
  <a title='<?php if($schoenen > 1){echo"U heeft $schoenen paar schoenen, ik geef je 35 pixels per paar";} else {echo"U heeft 1 paar schoenen, ik geef je 35 pixels per paar";} ?>' href="verkoopshop.php?vschoenenv=1">schoenen<br /></a>
  <?php
  }
  $_SESSION["vschoenenv"] = $_GET["vschoenenv"];
  $vschoenenv = $_SESSION["vschoenenv"];  
  if($vschoenenv == 1)
     {
     if(isset($_POST["vschoenen"]))
   {
 $schoenenverkocht = $_POST["schoenenverkocht"];
 $schoenen = $schoenen - $schoenenverkocht;
 $_SESSION["schoenen"] = $schoenen;
 $pixels = $pixels + ($schoenenverkocht * 35);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vschoenenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vschoenenv=1" method="post">
   <select name="schoenenverkocht">
     <option selected value="0">0</option>
 <?php
 if($schoenen >= 1)
   {echo"<option value='1'>1</option>";}
 if($schoenen >= 2)
   {echo"<option value='2'>2</option>";}
 if($schoenen >= 5)
   {echo"<option value='5'>5</option>";}
     if($schoenen >= 10)
   {echo"<option value='10'>10</option>";}
 if($schoenen >= 20)
   {echo"<option value='20'>20</option>";}
 if($schoenen >= 50)
   {echo"<option value='50'>50</option>";}
 if($schoenen >= 100)
   {echo"<option value='100'>100</option>";}
 if($schoenen >= 200)
   {echo"<option value='200'>200</option>";}
 if($schoenen >= 500)
   {echo"<option value='500'>500</option>";}
 if($schoenen >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vschoenen" value="verkoop leren schoenen">
 </form>
 <?php
    }
  if($stof >= 1)
  {
  ?>
  <a title='<?php if($stof > 1){echo"U heeft $stof lappen stof, ik geef je 10 pixels per lap";} else {echo"U heeft 1 lap stof, ik geef je 10 pixels per lap";} ?>' href="verkoopshop.php?vstofv=1">lappen stof<br /></a>
  <?php
  }
  $_SESSION["vstofv"] = $_GET["vstofv"];
  $vstofv = $_SESSION["vstofv"];    
  if($vstofv == 1)
     {
     if(isset($_POST["vstof"]))
   {
 $stofverkocht = $_POST["stofverkocht"];
 $stof = $stof - $stofverkocht;
 $_SESSION["stof"] = $stof;
 $pixels = $pixels + ($stofverkocht * 10);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vstofv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vstofv=1" method="post">
   <select name="stofverkocht">
     <option selected value="0">0</option>
 <?php
 if($stof >= 1)
   {echo"<option value='1'>1</option>";}
 if($stof >= 2)
   {echo"<option value='2'>2</option>";}
 if($stof >= 5)
   {echo"<option value='5'>5</option>";}
     if($stof >= 10)
   {echo"<option value='10'>10</option>";}
 if($stof >= 20)
   {echo"<option value='20'>20</option>";}
 if($stof >= 50)
   {echo"<option value='50'>50</option>";}
 if($stof >= 100)
   {echo"<option value='100'>100</option>";}
 if($stof >= 200)
   {echo"<option value='200'>200</option>";}
 if($stof >= 500)
   {echo"<option value='500'>500</option>";}
 if($stof >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vstof" value="verkoop lappen stof">
 </form>
 <?php
    }
  if($sigaretten >= 1)
  {
  ?>
  <a title='<?php if($sigaretten > 1){echo"U heeft $sigaretten pakjes sigaretten, ik geef je 6 pixels per pakje";} else {echo"U heeft 1 pakje sigaretten, ik geef je 6 pixels per pakje";} ?>' href="verkoopshop.php?vsigarettenv=1">pakjes sigaretten<br /></a>
  <?php
  }
  $_SESSION["vsigarettenv"] = $_GET["vsigarettenv"];
  $vsigarettenv = $_SESSION["vsigarettenv"];
  if($vsigarettenv == 1)
     {
     if(isset($_POST["vsigaretten"]))
   {
 $sigarettenverkocht = $_POST["sigarettenverkocht"];
 $sigaretten = $sigaretten - $sigarettenverkocht;
 $_SESSION["sigaretten"] = $sigaretten;
 $pixels = $pixels + ($sigarettenverkocht * 6);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vsigarettenv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vsigarettenv=1" method="post">
   <select name="sigarettenverkocht">
     <option selected value="0">0</option>
 <?php
 if($sigaretten >= 1)
   {echo"<option value='1'>1</option>";}
 if($sigaretten >= 2)
   {echo"<option value='2'>2</option>";}
 if($sigaretten >= 5)
   {echo"<option value='5'>5</option>";}
     if($sigaretten >= 10)
   {echo"<option value='10'>10</option>";}
 if($sigaretten >= 20)
   {echo"<option value='20'>20</option>";}
 if($sigaretten >= 50)
   {echo"<option value='50'>50</option>";}
 if($sigaretten >= 100)
   {echo"<option value='100'>100</option>";}
 if($sigaretten >= 200)
   {echo"<option value='200'>200</option>";}
 if($sigaretten >= 500)
   {echo"<option value='500'>500</option>";}
 if($sigaretten >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vsigaretten" value="verkoop pakjes sigaretten">
 </form>
 <?php
    }
  if($lucifers >= 1)
  {
  ?>
  <a title='<?php if($lucifers > 1){echo"U heeft $lucifers doosjes lucifers, ik geef je 3 pixels per doosje";} else {echo"U heeft 1 doosje lucifers, ik geef je 3 pixels per doosje";} ?>' href="verkoopshop.php?vlucifersv=1">doosje lucifers<br /></a>
  <?php
  }
  $_SESSION["vlucifersv"] = $_GET["vlucifersv"];
  $vlucifersv = $_SESSION["vlucifersv"];
  if($vlucifersv == 1)
     {
     if(isset($_POST["vlucifers"]))
   {
 $lucifersverkocht = $_POST["lucifersverkocht"];
 $lucifers = $lucifers - $lucifersverkocht;
 $_SESSION["lucifers"] = $lucifers;
 $pixels = $pixels + ($lucifersverkocht * 3);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["vlucifersv"] = 0;
 header('Location: verkoopshop.php');
 }
 ?>
   <form action="verkoopshop.php?vlucifersv=1" method="post">
   <select name="lucifersverkocht">
     <option selected value="0">0</option>
 <?php
 if($lucifers >= 1)
   {echo"<option value='1'>1</option>";}
 if($lucifers >= 2)
   {echo"<option value='2'>2</option>";}
 if($lucifers >= 5)
   {echo"<option value='5'>5</option>";}
     if($lucifers >= 10)
   {echo"<option value='10'>10</option>";}
 if($lucifers >= 20)
   {echo"<option value='20'>20</option>";}
 if($lucifers >= 50)
   {echo"<option value='50'>50</option>";}
 if($lucifers >= 100)
   {echo"<option value='100'>100</option>";}
 if($lucifers >= 200)
   {echo"<option value='200'>200</option>";}
 if($lucifers >= 500)
   {echo"<option value='500'>500</option>";}
 if($lucifers >= 1000)
   {echo"<option value='1000'>1000</option>";}
 ?>
 </select>
 <input type="submit" name="vlucifers" value="verkoop doosjes lucifers">
 </form>
 <?php
    }
?>

</div>