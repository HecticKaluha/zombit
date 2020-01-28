<div id="koopshoplinks">
<a href="shop.php">terug naar de shop</a><br /><br />
Voorwerpen die u kunt kopen:<br />
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
$randkogels = $_SESSION["randkogels"];
$randhelm = $_SESSION["randhelm"];
$randschouderbeschermers = $_SESSION["randschouderbeschermers"];
$randbeenbeschermers = $_SESSION["randbeenbeschermers"];
$randmachinegeweer = $_SESSION["randmachinegeweer"];
$randluchtbuks = $_SESSION["randluchtbuks"];
$randbbgun = $_SESSION["randbbgun"];
$randantidotes = $_SESSION["randantidotes"];
$randlevenspotions = $_SESSION["randlevenspotions"];
$randflesje = $_SESSION["randflesje"];
$randenergyrepen = $_SESSION["randenergyrepen"];
$randschedel = $_SESSION["randschedel"];
$randvingerkootje = $_SESSION["randvingerkootje"];
$randtanden = $_SESSION["randtanden"];
$randstenen = $_SESSION["randstenen"];
$randgoudenketting = $_SESSION["randgoudenketting"];
$randoorbellen = $_SESSION["randoorbellen"];
$randzilverenketting = $_SESSION["randzilverenketting"];
$randring = $_SESSION["randring"];
$randarmband = $_SESSION["randarmband"];
$randmunt = $_SESSION["randmunt"];
$randplanken = $_SESSION["randplanken"];
$randtak = $_SESSION["randtak"];
$randijzer = $_SESSION["randijzer"];
$randdonkerkristal = $_SESSION["randdonkerkristal"];
$randroodkristal = $_SESSION["randroodkristal"];
$randhamer = $_SESSION["randhamer"];
$randschroevendraaier = $_SESSION["randschroevendraaier"];
$randbeitel = $_SESSION["randbeitel"];
$randschoenen = $_SESSION["randschoenen"];
$randstof = $_SESSION["randstof"];
$randsigaretten = $_SESSION["randsigaretten"];
$randlucifers = $_SESSION["randlucifers"];
$koopkogels = $_SESSION["koopkogels"];
$koophelm = $_SESSION["koophelm"];
$koopschouderbeschermers = $_SESSION["koopschouderbeschermers"];
$koopbeenbeschermers = $_SESSION["koopbeenbeschermers"];
$koopmachinegeweer = $_SESSION["koopmachinegeweer"];
$koopluchtbuks = $_SESSION["koopluchtbuks"];
$koopbbgun = $_SESSION["koopbbgun"];
$koopantidotes = $_SESSION["koopantidotes"];
$kooplevenspotions = $_SESSION["kooplevenspotions"];
$koopflesje = $_SESSION["koopflesje"];
$koopenergyrepen = $_SESSION["koopenergyrepen"];
$koopschedel = $_SESSION["koopschedel"];
$koopvingerkootje = $_SESSION["koopvingerkootje"];
$kooptanden = $_SESSION["kooptanden"];
$koopstenen = $_SESSION["koopstenen"];
$koopgoudenketting = $_SESSION["koopgoudenketting"];
$koopoorbellen = $_SESSION["koopoorbellen"];
$koopzilverenketting = $_SESSION["koopzilverenketting"];
$koopring = $_SESSION["koopring"];
$kooparmband = $_SESSION["kooparmband"];
$koopmunt = $_SESSION["koopmunt"];
$koopplanken = $_SESSION["koopplank"];
$kooptak = $_SESSION["kooptak"];
$koopijzer = $_SESSION["koopijzer = 1"];
$koopdonkerkristal = $_SESSION["koopdonkerkristal"];
$kooproodkristal = $_SESSION["kooproodkristal"];
$koophamer = $_SESSION["koophamer"];
$koopschroevendraaier = $_SESSION["koopschroevendraaier"];
$koopbeitel = $_SESSION["koopbeitel"];
$koopschoenen = $_SESSION["koopschoenen"];
$koopstof = $_SESSION["koopstof"];
$koopsigaretten = $_SESSION["koopsigaretten"];
$kooplucifers = $_SESSION["kooplucifers"];
if($koopkogels == 1)
   {
   ?>
     <a title='<?php if($randkogels > 1){echo"Ik heb $randkogels kogels, ze kosten 2 pixels per stuk";} else {echo"Ik heb 1 kogel, ze kosten 2 pixels per stuk";} ?>' href="koopshop.php?kkogelsk=1">kogels<br /></a>
     <?php
   }
$_SESSION["kkogelsk"] = $_GET["kkogelsk"];
  $kkogelsk = $_SESSION["kkogelsk"];
  if($kkogelsk == 1)
     {
     if(isset($_POST["kkogels"]))
   {
 $kogelsgekocht = $_POST["kogelsgekocht"];
 $kogels = $kogels + $kogelsgekocht;
 $_SESSION["kogels"] = $kogels;
 $pixels = $pixels - ($kogelsgekocht * 2);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kkogelsk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kkogelsk=1" method="post">
   <select name="kogelsgekocht">
     <option selected value="0">0</option>
 <?php
 if($randkogels >= 1 && $pixels >= 2)
   {echo"<option value='1'>1</option>";}
 if($randkogels >= 2 && $pixels >= 4)
   {echo"<option value='2'>2</option>";}
 if($randkogels >= 5 && $pixels >= 10)
   {echo"<option value='5'>5</option>";}
     if($randkogels >= 10 && $pixels >= 20)
   {echo"<option value='10'>10</option>";}
 if($randkogels >= 20 && $pixels >= 40)
   {echo"<option value='20'>20</option>";}
 ?>
 </select>
 <input type="submit" name="kkogels" value="koop kogels">
 </form>
 <?php
    }
if($koophelm == 1)
   {
   ?>
     <a title='<?php if($randhelm > 1){echo"Ik heb $randhelm helmen, ze kosten 78 pixels per stuk";} else {echo"Ik heb 1 helm, ze kosten 78 pixels per stuk";} ?>' href="koopshop.php?khelmk=1">helmen<br /></a>
     <?php
   }
$_SESSION["khelmk"] = $_GET["khelmk"];
  $khelmk = $_SESSION["khelmk"];
  if($khelmk == 1)
     {
     if(isset($_POST["khelm"]))
   {
 $helmgekocht = $_POST["helmgekocht"];
 $helm = $helm + $helmgekocht;
 $_SESSION["helm"] = $helm;
 $pixels = $pixels - ($helmgekocht * 78);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["khelmk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?khelmk=1" method="post">
   <select name="helmgekocht">
     <option selected value="0">0</option>
 <?php
 if($randhelm >= 1 && $pixels >= 78)
   {echo"<option value='1'>1</option>";}
 if($randhelm >= 2 && $pixels >= 156)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="khelm" value="koop helmen">
 </form>
 <?php
    }
if($koopschouderbeschermers == 1)
   {
   ?>
     <a title='<?php if($randschouderbeschermers > 1){echo"Ik heb $randschouderbeschermers setten schouderbeschermers, ze kosten 91 pixels per set";} else {echo"Ik heb 1 set schouderbeschermers, ze kosten 91 pixels per set";} ?>' href="koopshop.php?kschouderbeschermersk=1">schouderbeschermers<br /></a>
     <?php
   }
$_SESSION["kschouderbeschermersk"] = $_GET["kschouderbeschermersk"];
  $kschouderbeschermersk = $_SESSION["kschouderbeschermersk"];
  if($kschouderbeschermersk == 1)
     {
     if(isset($_POST["kschouderbeschermers"]))
   {
 $schouderbeschermersgekocht = $_POST["schouderbeschermersgekocht"];
 $schouderbeschermers = $schouderbeschermers + $schouderbeschermersgekocht;
 $_SESSION["schouderbeschermers"] = $schouderbeschermers;
 $pixels = $pixels - ($schouderbeschermersgekocht * 91);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kschouderbeschermersk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kschouderbeschermersk=1" method="post">
   <select name="schouderbeschermersgekocht">
     <option selected value="0">0</option>
 <?php
 if($randschouderbeschermers >= 1 && $pixels >= 91)
   {echo"<option value='1'>1</option>";}
 if($randschouderbeschermers >= 2 && $pixels >= 182)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kschouderbeschermers" value="koop schouderbeschermers">
 </form>
 <?php
    }
if($koopbeenbeschermers == 1)
   {
   ?>
     <a title='<?php if($randbeenbeschermers > 1){echo"Ik heb $randbeenbeschermers setten beenbeschermers, ze kosten 104 pixels per set";} else {echo"Ik heb 1 set beenbeschermers, ze kosten 104 pixels per set";} ?>' href="koopshop.php?kbeenbeschermersk=1">beenbeschermers<br /></a>
     <?php
   }
$_SESSION["kbeenbeschermersk"] = $_GET["kbeenbeschermersk"];
  $kbeenbeschermersk = $_SESSION["kbeenbeschermersk"];
  if($kbeenbeschermersk == 1)
     {
     if(isset($_POST["kbeenbeschermers"]))
   {
 $beenbeschermersgekocht = $_POST["beenbeschermersgekocht"];
 $beenbeschermers = $beenbeschermers + $beenbeschermersgekocht;
 $_SESSION["beenbeschermers"] = $beenbeschermers;
 $pixels = $pixels - ($beenbeschermersgekocht * 104);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kbeenbeschermersk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kbeenbeschermersk=1" method="post">
   <select name="beenbeschermersgekocht">
     <option selected value="0">0</option>
 <?php
 if($randbeenbeschermers >= 1 && $pixels >= 104)
   {echo"<option value='1'>1</option>";}
 if($randbeenbeschermers >= 2 && $pixels >= 208)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kbeenbeschermers" value="koop beenbeschermers">
 </form>
 <?php
    }
if($koopmachinegeweer == 1)
   {
   ?>
     <a title='<?php if($randmachinegeweer > 1){echo"Ik heb $randmachinegeweer machinegeweren, ze kosten 663 pixels per stuk";} else {echo"Ik heb 1 machinegeweer, ze kosten 663 pixels per stuk";} ?>' href="koopshop.php?kmachinegeweerk=1">machinegeweren<br /></a>
     <?php
   }
$_SESSION["kmachinegeweerk"] = $_GET["kmachinegeweerk"];
  $kmachinegeweerk = $_SESSION["kmachinegeweerk"];
  if($kmachinegeweerk == 1)
     {
     if(isset($_POST["kmachinegeweer"]))
   {
 $machinegeweergekocht = $_POST["machinegeweergekocht"];
 $machinegeweer = $machinegeweer + $machinegeweergekocht;
 $_SESSION["machinegeweer"] = $machinegeweer;
 $pixels = $pixels - ($machinegeweergekocht * 663);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kmachinegeweerk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kmachinegeweerk=1" method="post">
   <select name="machinegeweergekocht">
     <option selected value="0">0</option>
 <?php
 if($randmachinegeweer >= 1 && $pixels >= 663)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kmachinegeweer" value="koop machinegeweer">
 </form>
 <?php
    }
if($koopluchtbuks == 1)
   {
   ?>
     <a title='<?php if($randluchtbuks > 1){echo"Ik heb $randluchtbuks luchtbuksen, ze kosten 117 pixels per stuk";} else {echo"Ik heb 1 luchtbuks, ze kosten 117 pixels per stuk";} ?>' href="koopshop.php?kluchtbuksk=1">luchtbuksen<br /></a>
     <?php
   }
$_SESSION["kluchtbuksk"] = $_GET["kluchtbuksk"];
  $kluchtbuksk = $_SESSION["kluchtbuksk"];
  if($kluchtbuksk == 1)
     {
     if(isset($_POST["kluchtbuks"]))
   {
 $luchtbuksgekocht = $_POST["luchtbuksgekocht"];
 $luchtbuks = $luchtbuks + $luchtbuksgekocht;
 $_SESSION["luchtbuks"] = $luchtbuks;
 $pixels = $pixels - ($luchtbuksgekocht * 117);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kluchtbuksk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kluchtbuksk=1" method="post">
   <select name="luchtbuksgekocht">
     <option selected value="0">0</option>
 <?php
 if($randluchtbuks >= 1 && $pixels >= 117)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kluchtbuks" value="koop luchtbuks">
 </form>
 <?php
    }
if($koopbbgun == 1)
   {
   ?>
     <a title='<?php if($randbbgun > 1){echo"Ik heb $randbbgun bbguns, ze kosten 65 pixels per stuk";} else {echo"Ik heb 1 bbgun, ze kosten 65 pixels per stuk";} ?>' href="koopshop.php?kbbgunk=1">bbguns<br /></a>
     <?php
   }
$_SESSION["kbbgunk"] = $_GET["kbbgunk"];
  $kbbgunk = $_SESSION["kbbgunk"];
  if($kbbgunk == 1)
     {
     if(isset($_POST["kbbguns"]))
   {
 $bbgungekocht = $_POST["bbgungekocht"];
 $bbgun = $bbgun + $bbgungekocht;
 $_SESSION["bbgun"] = $bbgun;
 $pixels = $pixels - ($bbgungekocht * 65);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kbbgunk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kbbgunk=1" method="post">
   <select name="bbgungekocht">
     <option selected value="0">0</option>
 <?php
 if($randbbgun >= 1 && $pixels >= 65)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kbbgun" value="koop een bbgun">
 </form>
 <?php
    }
if($koopantidotes == 1)
   {
   ?>
     <a title='<?php if($randantidotes > 1){echo"Ik heb $randantidotes antidotes, ze kosten 20 pixels per stuk";} else {echo"Ik heb 1 antidote, ze kosten 20 pixels per stuk";} ?>' href="koopshop.php?kantidotesk=1">antidotes<br /></a>
     <?php
   }
$_SESSION["kantidotesk"] = $_GET["kantidotesk"];
  $kantidotesk = $_SESSION["kantidotesk"];
  if($kantidotesk == 1)
     {
     if(isset($_POST["kantidotes"]))
   {
 $antidotesgekocht = $_POST["antidotesgekocht"];
 $antidotes = $antidotes + $antidotesgekocht;
 $_SESSION["antidotes"] = $antidotes;
 $pixels = $pixels - ($antidotesgekocht * 20);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kantidotesk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kantidotesk=1" method="post">
   <select name="antidotesgekocht">
     <option selected value="0">0</option>
 <?php
 if($randantidotes >= 1 && $pixels >= 20)
   {echo"<option value='1'>1</option>";}
 if($randantidotes >= 2 && $pixels >= 40)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kantidotes" value="koop antidotes">
 </form>
 <?php
    }
if($kooplevenspotions == 1)
   {
   ?>
     <a title='<?php if($randlevenspotions > 1){echo"Ik heb $randlevenspotions levenspotions, ze kosten 20 pixels per stuk";} else {echo"Ik heb 1 levenspotion, ze kosten 20 pixels per stuk";} ?>' href="koopshop.php?klevenspotionsk=1">levenspotions<br /></a>
     <?php
   }
$_SESSION["klevenspotionsk"] = $_GET["klevenspotionsk"];
  $klevenspotionsk = $_SESSION["klevenspotionsk"];
  if($klevenspotionsk == 1)
     {
     if(isset($_POST["klevenspotions"]))
   {
 $levenspotionsgekocht = $_POST["levenspotionsgekocht"];
 $levenspotions = $levenspotions + $levenspotionsgekocht;
 $_SESSION["levenspotions"] = $levenspotions;
 $pixels = $pixels - ($levenspotionsgekocht * 20);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["klevenspotionsk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?klevenspotionsk=1" method="post">
   <select name="levenspotionsgekocht">
     <option selected value="0">0</option>
 <?php
 if($randlevenspotions >= 1 && $pixels >= 20)
   {echo"<option value='1'>1</option>";}
 if($randlevenspotions >= 2 && $pixels >= 40)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="klevenspotions" value="koop levenspotions">
 </form>
 <?php
    }
if($koopflesje == 1)
   {
   ?>
     <a title='<?php if($randflesje > 1){echo"Ik heb $randflesje flesjes, ze kosten 4 pixels per stuk";} else {echo"Ik heb 1 flesje, ze kosten 4 pixels per stuk";} ?>' href="koopshop.php?kflesjek=1">flesjes<br /></a>
     <?php
   }
$_SESSION["kflesjek"] = $_GET["kflesjek"];
  $kflesjek = $_SESSION["kflesjek"];
  if($kflesjek == 1)
     {
     if(isset($_POST["kflesje"]))
   {
 $flesjegekocht = $_POST["flesjegekocht"];
 $flesje = $flesje + $flesjegekocht;
 $_SESSION["flesje"] = $flesje;
 $pixels = $pixels - ($flesjegekocht * 4);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kflesjek"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kflesjek=1" method="post">
   <select name="flesjegekocht">
     <option selected value="0">0</option>
 <?php
 if($randflesje >= 1 && $pixels >= 4)
   {echo"<option value='1'>1</option>";}
 if($randflesje >= 2 && $pixels >= 8)
   {echo"<otion value='2'>2</option>";}
 if($randflesje >= 5 && $pixels >= 20)
   {echo"<option value='5'>5</option>";}
 ?>
 </select>
 <input type="submit" name="kflesje" value="koop flesjes">
 </form>
 <?php
    }
if($koopenergyrepen == 1)
   {
   ?>
     <a title='<?php if($randenergyrepen > 1){echo"Ik heb $randenergyrepen energyrepen, ze kosten 20 pixels per stuk";} else {echo"Ik heb 1 energyrepen, ze kosten 20 pixels per stuk";} ?>' href="koopshop.php?kenergyrepenk=1">engeryrepen<br /></a>
     <?php
   }
$_SESSION["kenergyrepenk"] = $_GET["kenergyrepenk"];
  $kenergyrepenk = $_SESSION["kenergyrepenk"];
  if($kenergyrepenk == 1)
     {
     if(isset($_POST["kenergyrepen"]))
   {
 $energyrepengekocht = $_POST["energyrepengekocht"];
 $energyrepen = $energyrepen + $energyrepengekocht;
 $_SESSION["energyrepen"] = $energyrepen;
 $pixels = $pixels - ($energyrepengekocht * 20);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kenergyrepenk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kenergyrepenk=1" method="post">
   <select name="energyrepengekocht">
     <option selected value="0">0</option>
 <?php
 if($randenergyrepen >= 1 && $pixels >= 20)
   {echo"<option value='1'>1</option>";}
 if($randenergyrepen >= 2 && $pixels >= 40)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kenergyrepen" value="koop energyrepen">
 </form>
 <?php
 }
if($koopstenen == 1)
   {
   ?>
     <a title='<?php if($randstenen > 1){echo"Ik heb $randstenen stenen, ze kosten 7 pixels per stuk";} else {echo"Ik heb 1 steen, ze kosten 7 pixels per stuk";} ?>' href="koopshop.php?kstenenk=1">stenen<br /></a>
     <?php
   }
$_SESSION["kstenenk"] = $_GET["kstenenk"];
  $kstenenk = $_SESSION["kstenenk"];
  if($kstenenk == 1)
     {
     if(isset($_POST["kstenen"]))
   {
 $stenengekocht = $_POST["stenengekocht"];
 $stenen = $stenen + $stenengekocht;
 $_SESSION["stenen"] = $stenen;
 $pixels = $pixels - ($stenengekocht * 7);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kstenenk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kstenenk=1" method="post">
   <select name="stenengekocht">
     <option selected value="0">0</option>
 <?php
 if($randstenen >= 1 && $pixels >= 7)
   {echo"<option value='1'>1</option>";}
 if($randstenen >= 2 && $pixels >= 14)
   {echo"<option value='2'>2</option>";}
 if($randstenen >= 5 && $pixels >= 35)
   {echo"<option value='5'>5</option>";}
     if($randstenen >= 10 && $pixels >= 70)
   {echo"<option value='10'>10</option>";}
 ?>
 </select>
 <input type="submit" name="kstenen" value="koop stenen">
 </form>
 <?php
    }
if($koopgoudenketting == 1)
   {
   ?>
     <a title='<?php if($randgoudenketting > 1){echo"Ik heb $randgoudenketting gouden kettingen, ze kosten 273 pixels per stuk";} else {echo"Ik heb 1 gouden ketting, ze kosten 273 pixels per stuk";} ?>' href="koopshop.php?kgoudenketting=1">gouden kettingen<br /></a>
     <?php
   }
$_SESSION["kgoudenkettingk"] = $_GET["kgoudenkettingk"];
  $kgoudenkettingk = $_SESSION["kgoudenkettingk"];
  if($kgoudenkettingk == 1)
     {
     if(isset($_POST["kgoudenketting"]))
   {
 $goudenkettinggekocht = $_POST["goudenkettinggekocht"];
 $goudenketting = $goudenketting + $goudenkettinggekocht;
 $_SESSION["goudenketting"] = $goudenketting;
 $pixels = $pixels - ($goudenkettinggekocht * 273);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kgoudenkettingk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kgoudenkettingk=1" method="post">
   <select name="goudenkettinggekocht">
     <option selected value="0">0</option>
 <?php
 if($randgoudenketting >= 1 && $pixels >= 273)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kgoudenketting" value="koop gouden ketting">
 </form>
 <?php
    }
if($koopoorbellen == 1)
   {
   ?>
     <a title='<?php if($randoorbellen > 1){echo"Ik heb $randoorbellen setten oorbellen, ze kosten 156 pixels per set";} else {echo"Ik heb 1 set oorbellen, ze kosten 156 pixels per set";} ?>' href="koopshop.php?koorbellenk=1">oorbellen<br /></a>
     <?php
   }
$_SESSION["koorbellenk"] = $_GET["koorbellenk"];
  $koorbellenk = $_SESSION["koorbellenk"];
  if($koorbellenk == 1)
     {
     if(isset($_POST["koorbellens"]))
   {
 $oorbellengekocht = $_POST["oorbellengekocht"];
 $oorbellen = $oorbellen + $oorbellengekocht;
 $_SESSION["oorbellen"] = $oorbellen;
 $pixels = $pixels - ($oorbellengekocht * 156);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["koorbellenk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?koorbellenk=1" method="post">
   <select name="oorbellengekocht">
     <option selected value="0">0</option>
 <?php
 if($randoorbellen >= 1 && $pixels >= 156)
   {echo"<option value='1'>1</option>";}
 if($randoorbellen >= 2 && $pixels >= 312)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="koorbellen" value="koop oorbellen">
 </form>
 <?php
    }
 ?>
</div>
<div id="koopshoprechts">
<?php

if($koopzilverenketting == 1)
   {
   ?>
     <a title='<?php if($randzilverenketting > 1){echo"Ik heb $randzilverenketting zilveren kettingen, ze kosten 156 pixels per stuk";} else {echo"Ik heb 1 zilveren ketting, ze kosten 156 pixels per stuk";} ?>' href="koopshop.php?kzilverenkettingk=1">zilveren kettingen<br /></a>
     <?php
   }
$_SESSION["kzilverenkettingk"] = $_GET["kzilverenkettingk"];
  $kzilverenkettingk = $_SESSION["kzilverenkettingk"];
  if($kzilverenkettingk == 1)
     {
     if(isset($_POST["kzilverenketting"]))
   {
 $zilverenkettinggekocht = $_POST["zilverenkettinggekocht"];
 $zilverenketting = $zilverenketting + $zilverenkettinggekocht;
 $_SESSION["zilverenketting"] = $zilverenketting;
 $pixels = $pixels - ($zilverenkettinggekocht * 156);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kzilverenkettingk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kzilverenkettingk=1" method="post">
   <select name="zilverenkettinggekocht">
     <option selected value="0">0</option>
 <?php
 if($randzilverenketting >= 1 && $pixels >= 156)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kzilverenketting" value="koop zilveren ketting">
 </form>
 <?php
    }
if($koopring == 1)
   {
   ?>
     <a title='<?php if($randring > 1){echo"Ik heb $randring ringen, ze kosten 65 pixels per stuk";} else {echo"Ik heb 1 ring, ze kosten 65 pixels per stuk";} ?>' href="koopshop.php?kringk=1">ringen<br /></a>
     <?php
   }
$_SESSION["kringk"] = $_GET["kringk"];
  $kringk = $_SESSION["kringk"];
  if($kringk == 1)
     {
     if(isset($_POST["kring"]))
   {
 $ringgekocht = $_POST["ringgekocht"];
 $ring = $ring + $ringgekocht;
 $_SESSION["ring"] = $ring;
 $pixels = $pixels - ($ringgekocht * 65);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kringk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kringk=1" method="post">
   <select name="ringgekocht">
     <option selected value="0">0</option>
 <?php
 if($randring >= 1 && $pixels >= 65)
   {echo"<option value='1'>1</option>";}
 if($randring >= 2 && $pixels >= 130)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kring" value="koop ring">
 </form>
 <?php
    }
if($kooparmband == 1)
   {
   ?>
     <a title='<?php if($randarmband > 1){echo"Ik heb $randarmband armbanden, ze kosten 91 pixels per stuk";} else {echo"Ik heb 1 armband, ze kosten 91 pixels per stuk";} ?>' href="koopshop.php?karmbandk=1">armbanden<br /></a>
     <?php
   }
$_SESSION["karmbandk"] = $_GET["karmbandk"];
  $karmbandk = $_SESSION["karmbandk"];
  if($karmbandk == 1)
     {
     if(isset($_POST["karmband"]))
   {
 $armbandgekocht = $_POST["armbandgekocht"];
 $armband = $armband + $armbandgekocht;
 $_SESSION["armband"] = $armband;
 $pixels = $pixels - ($armbandgekocht * 91);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["karmbandk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?karmbandk=1" method="post">
   <select name="armbandgekocht">
     <option selected value="0">0</option>
 <?php
 if($randarmband >= 1 && $pixels >= 91)
   {echo"<option value='1'>1</option>";}
 if($randarmband >= 2 && $pixels >= 182)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="karmband" value="koop armband">
 </form>
 <?php
    }
if($koopmunt == 1)
   {
   ?>
     <a title='<?php if($randmunt > 1){echo"Ik heb $randmunt azteekse munten, ze kosten 117 pixels per stuk";} else {echo"Ik heb $randmunt azteekse munt, ze kosten 117 pixels per stuk";} ?>' href="koopshop.php?kmuntk=1">azteekse munten<br /></a>
     <?php
   }
$_SESSION["kmuntk"] = $_GET["kmuntk"];
  $kmuntk = $_SESSION["kmuntk"];
  if($kmuntk == 1)
     {
     if(isset($_POST["kmunt"]))
   {
 $muntgekocht = $_POST["muntgekocht"];
 $munt = $munt + $muntgekocht;
 $_SESSION["munt"] = $munt;
 $pixels = $pixels - ($muntgekocht * 117);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kmuntk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kmuntk=1" method="post">
   <select name="muntgekocht">
     <option selected value="0">0</option>
 <?php
 if($randmunt >= 1 && $pixels >= 117)
   {echo"<option value='1'>1</option>";}
 if($randmunt >= 2 && $pixels >= 234)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kmunt" value="koop azteekse munten">
 </form>
 <?php
    }
if($koopplanken == 1)
   {
   ?>
     <a title='<?php if($randplanken > 1){echo"Ik heb $randplanken planken, ze kosten 16 pixels per stuk";} else {echo"Ik heb 1 plank, ze kosten 16 pixels per stuk";} ?>' href="koopshop.php?kplankenk=1">planken<br /></a>
     <?php
   }
$_SESSION["kplankenk"] = $_GET["kplankenk"];
  $kplankenk = $_SESSION["kplankenk"];
  if($kplankenk == 1)
     {
     if(isset($_POST["kplanken"]))
   {
 $plankengekocht = $_POST["plankengekocht"];
 $planken = $planken + $plankengekocht;
 $_SESSION["planken"] = $planken;
 $pixels = $pixels - ($plankengekocht * 16);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kplankenk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kplankenk=1" method="post">
   <select name="plankengekocht">
     <option selected value="0">0</option>
 <?php
 if($randplanken >= 1 && $pixels >= 16)
   {echo"<option value='1'>1</option>";}
 if($randplanken >= 2 && $pixels >= 32)
   {echo"<option value='2'>2</option>";}
 if($randplanken >= 5 && $pixels >= 80)
   {echo"<option value='5'>5</option>";}
 ?>
 </select>
 <input type="submit" name="kplanken" value="koop planken">
 </form>
 <?php
    }
if($kooptak == 1)
   {
   ?>
     <a title='<?php if($randtak > 1){echo"Ik heb $randtak takken, ze kosten 5 pixels per stuk";} else {echo"Ik heb 1 tak, ze kosten 5 pixels per stuk";} ?>' href="koopshop.php?ktakk=1">takken<br /></a>
     <?php
   }
$_SESSION["ktakk"] = $_GET["ktakk"];
  $ktakk = $_SESSION["ktakk"];
  if($ktakk == 1)
     {
     if(isset($_POST["ktak"]))
   {
 $takgekocht = $_POST["takgekocht"];
 $tak = $tak + $takgekocht;
 $_SESSION["tak"] = $tak;
 $pixels = $pixels - ($takgekocht * 5);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["ktakk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?ktakk=1" method="post">
   <select name="takgekocht">
     <option selected value="0">0</option>
 <?php
 if($randtak >= 1 && $pixels >= 5)
   {echo"<option value='1'>1</option>";}
 if($randtak >= 2 && $pixels >= 10)
   {echo"<option value='2'>2</option>";}
 if($randtak >= 5 && $pixels >= 25)
   {echo"<option value='5'>5</option>";}
     if($randtak >= 10 && $pixels >= 50)
   {echo"<option value='10'>10</option>";}
 ?>
 </select>
 <input type="submit" name="ktak" value="koop takken">
 </form>
 <?php
    }
if($koopijzer == 1)
   {
   ?>
     <a title='<?php if($randijzer > 1){echo"Ik heb $randijzer brokken ijzer, ze kosten 33 pixels per stuk";} else {echo"Ik heb 1 brok ijzer, ze kosten 33 pixels per stuk";} ?>' href="koopshop.php?kijzerk=1">brokken ijzer<br /></a>
     <?php
   }
$_SESSION["kijzerk"] = $_GET["kijzerk"];
  $kijzerk = $_SESSION["kijzerk"];
  if($kijzerk == 1)
     {
     if(isset($_POST["kijzer"]))
   {
 $ijzergekocht = $_POST["ijzergekocht"];
 $ijzer = $ijzer + $ijzergekocht;
 $_SESSION["ijzer"] = $ijzer;
 $pixels = $pixels - ($ijzergekocht * 33);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kijzerk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kijzerk=1" method="post">
   <select name="ijzergekocht">
     <option selected value="0">0</option>
 <?php
 if($randijzer >= 1 && $pixels >= 33)
   {echo"<option value='1'>1</option>";}
 if($randijzer >= 2 && $pixels >= 66)
   {echo"<option value='2'>2</option>";}
 if($randijzer >= 5 && $pixels >= 165)
   {echo"<option value='5'>5</option>";}
 ?>
 </select>
 <input type="submit" name="kijzer" value="koop brokken ijzer">
 </form>
 <?php
    }
if($koopdonkerkristal == 1)
   {
   ?>
     <a title='<?php if($randdonkerkristal > 1){echo"Ik heb $randdonkerkristal donkere kristallen, ze kosten 1040 pixels per stuk";} else {echo"Ik heb 1 donker kristal, ze kosten 1040 pixels per stuk";} ?>' href="koopshop.php?kdonkerkristalk=1">donkere kristallen<br /></a>
     <?php
   }
$_SESSION["kdonkerkristalk"] = $_GET["kdonkerkristalk"];
  $kdonkerkristalk = $_SESSION["kdonkerkristalk"];
  if($kdonkerkristalk == 1)
     {
     if(isset($_POST["kdonkerkristal"]))
   {
 $donkerkristalgekocht = $_POST["donkerkristalgekocht"];
 $donkerkristal = $donkerkristal + $donkerkristalgekocht;
 $_SESSION["donkerkristal"] = $donkerkristal;
 $pixels = $pixels - ($donkerkristalgekocht * 1040);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kdonkerkristalk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kdonkerkristalk=1" method="post">
   <select name="donkerkristalgekocht">
     <option selected value="0">0</option>
 <?php
 if($randdonkerkristal >= 1 && $pixels >= 1040)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kdonkerkristal" value="koop donker kristal">
 </form>
 <?php
    }
if($kooproodkristal == 1)
   {
   ?>
     <a title='<?php if($randroodkristal > 1){echo"Ik heb $randroodkristal rode kristallen, ze kosten 780 pixels per stuk";} else {echo"Ik heb 1 rood kristal, ze kosten 780 pixels per stuk";} ?>' href="koopshop.php?kroodkristalk=1">rode kristallen<br /></a>
     <?php
   }
$_SESSION["kroodkristalk"] = $_GET["kroodkristalk"];
  $kroodkristalk = $_SESSION["kroodkristalk"];
  if($kroodkristalk == 1)
     {
     if(isset($_POST["kroodkristal"]))
   {
 $roodkristalgekocht = $_POST["roodkristalgekocht"];
 $roodkristal = $roodkristal + $roodkristalgekocht;
 $_SESSION["roodkristal"] = $roodkristal;
 $pixels = $pixels - ($roodkristalgekocht * 780);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kroodkristalk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kroodkristalk=1" method="post">
   <select name="roodkristalgekocht">
     <option selected value="0">0</option>
 <?php
 if($randroodkristal >= 1 && $pixels >= 780)
   {echo"<option value='1'>1</option>";}
 ?>
 </select>
 <input type="submit" name="kroodkristal" value="koop rood kristal">
 </form>
 <?php
    }
if($koophamer == 1)
   {
   ?>
     <a title='<?php if($randhamer > 1){echo"Ik heb $randhamer hamers, ze kosten 26 pixels per stuk";} else {echo"Ik heb 1 hamer, ze kosten 26 pixels per stuk";} ?>' href="koopshop.php?khamerk=1">hamers<br /></a>
     <?php
   }
$_SESSION["khamerk"] = $_GET["khamerk"];
  $khamerk = $_SESSION["khamerk"];
  if($khamerk == 1)
     {
     if(isset($_POST["khamer"]))
   {
 $hamergekocht = $_POST["hamergekocht"];
 $hamer = $hamer + $hamergekocht;
 $_SESSION["hamer"] = $hamer;
 $pixels = $pixels - ($hamergekocht * 26);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["khamerk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?khamerk=1" method="post">
   <select name="hamergekocht">
     <option selected value="0">0</option>
 <?php
 if($randhamer >= 1 && $pixels >= 26)
   {echo"<option value='1'>1</option>";}
 if($randhamer >= 2 && $pixels >= 52)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="khamer" value="koop hamer">
 </form>
 <?php
    }
if($koopschroevendraaier == 1)
   {
   ?>
     <a title='<?php if($randschroevendraaier > 1){echo"Ik heb $randschroevendraaier schroevendraaiers, ze kosten 26 pixels per stuk";} else {echo"Ik heb 1 schroevendraaier, ze kosten 26 pixels per stuk";} ?>' href="koopshop.php?kschroevendraaierk=1">schroevendraaiers<br /></a>
     <?php
   }
$_SESSION["kschroevendraaierk"] = $_GET["kschroevendraaierk"];
  $kschroevendraaierk = $_SESSION["kschroevendraaierk"];
  if($kschroevendraaierk == 1)
     {
     if(isset($_POST["kschroevendraaier"]))
   {
 $schroevendraaiergekocht = $_POST["schroevendraaiergekocht"];
 $schroevendraaier = $schroevendraaier + $schroevendraaiergekocht;
 $_SESSION["schroevendraaier"] = $schroevendraaier;
 $pixels = $pixels - ($schroevendraaiergekocht * 26);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kschroevendraaierk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kschroevendraaierk=1" method="post">
   <select name="schroevendraaiergekocht">
     <option selected value="0">0</option>
 <?php
 if($randschroevendraaier >= 1 && $pixels >= 26)
   {echo"<option value='1'>1</option>";}
 if($randschroevendraaier >= 2 && $pixels >= 52)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kschroevendraaier" value="koop schroevendraaier">
 </form>
 <?php
    }
if($koopbeitel == 1)
   {
   ?>
     <a title='<?php if($randbeitel > 1){echo"Ik heb $randbeitel beitels, ze kosten 26 pixels per stuk";} else {echo"Ik heb 1 beitel, ze kosten 26 pixels per stuk";} ?>' href="koopshop.php?kbeitelk=1">beitels<br /></a>
     <?php
   }
$_SESSION["kbeitelk"] = $_GET["kbeitelk"];
  $kbeitelk = $_SESSION["kbeitelk"];
  if($kbeitelk == 1)
     {
     if(isset($_POST["kbeitel"]))
   {
 $beitelgekocht = $_POST["beitelgekocht"];
 $beitel = $beitel + $beitelgekocht;
 $_SESSION["beitel"] = $beitel;
 $pixels = $pixels - ($beitelgekocht * 26);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kbeitelk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kbeitelk=1" method="post">
   <select name="beitelgekocht">
     <option selected value="0">0</option>
 <?php
 if($randbeitel >= 1 && $pixels >= 26)
   {echo"<option value='1'>1</option>";}
 if($randbeitel >= 2 && $pixels >= 52)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kbeitel" value="koop beitel">
 </form>
 <?php
    }
if($koopschoenen == 1)
   {
   ?>
     <a title='<?php if($randkogels > 1){echo"Ik heb $randschoenen paren schoenen, ze kosten 46 pixels per paar";} else {echo"Ik heb 1 paar schoenen, ze kosten 46 pixels per paar";} ?>' href="koopshop.php?kschoenenk=1">schoenen<br /></a>
     <?php
   }
$_SESSION["kschoenenk"] = $_GET["kschoenenk"];
  $kschoenenk = $_SESSION["kschoenenk"];
  if($kschoenenk == 1)
     {
     if(isset($_POST["kschoenen"]))
   {
 $schoenengekocht = $_POST["schoenengekocht"];
 $schoenen = $schoenen + $schoenengekocht;
 $_SESSION["schoenen"] = $schoenen;
 $pixels = $pixels - ($schoenengekocht * 46);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kschoenenk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kschoenenk=1" method="post">
   <select name="schoenengekocht">
     <option selected value="0">0</option>
 <?php
 if($randschoenen >= 1 && $pixels >= 46)
   {echo"<option value='1'>1</option>";}
 if($randschoenen >= 2 && $pixels >= 92)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="kschoenen" value="koop schoenen">
 </form>
 <?php
    }
if($koopstof == 1)
   {
   ?>
     <a title='<?php if($randstof > 1){echo"Ik heb $randstof lappen stof, ze kosten 13 pixels per lap";} else {echo"Ik heb 1 lap stof, ze kosten 13 pixels per lap";} ?>' href="koopshop.php?kstofk=1">lappen stof<br /></a>
     <?php
   }
$_SESSION["kstofk"] = $_GET["kstofk"];
  $kstofk = $_SESSION["kstofk"];
  if($kstofk == 1)
     {
     if(isset($_POST["kstof"]))
   {
 $stofgekocht = $_POST["stofgekocht"];
 $stof = $stof + $stofgekocht;
 $_SESSION["stof"] = $stof;
 $pixels = $pixels - ($stofgekocht * 13);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["kstofk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?kstofk=1" method="post">
   <select name="stofgekocht">
     <option selected value="0">0</option>
 <?php
 if($randstof >= 1 && $pixels >= 13)
   {echo"<option value='1'>1</option>";}
 if($randstof >= 2 && $pixels >= 26)
   {echo"<option value='2'>2</option>";}
 if($randstof >= 5 && $pixels >= 65)
   {echo"<option value='5'>5</option>";}
 ?>
 </select>
 <input type="submit" name="kstof" value="koop lappen stof">
 </form>
 <?php
    }
if($koopsigaretten == 1)
   {
   ?>
     <a title='<?php if($randsigaretten > 1){echo"Ik heb $randsigaretten pakjes sigaretten, ze kosten 8 pixels per pakje";} else {echo"Ik heb 1 pakje sigaretten, ze kosten 8 pixels per pakje";} ?>' href="koopshop.php?ksigarettenk=1">pakjes sigaretten<br /></a>
     <?php
   }
$_SESSION["ksigarettenk"] = $_GET["ksigarettenk"];
  $ksigarettenk = $_SESSION["ksigarettenk"];
  if($ksigarettenk == 1)
     {
     if(isset($_POST["ksigaretten"]))
   {
 $sigarettengekocht = $_POST["sigarettengekocht"];
 $sigaretten = $sigaretten + $sigarettengekocht;
 $_SESSION["sigaretten"] = $sigaretten;
 $pixels = $pixels - ($sigarettengekocht * 8);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["ksigarettenk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?ksigarettenk=1" method="post">
   <select name="sigarettengekocht">
     <option selected value="0">0</option>
 <?php
 if($randsigaretten >= 1 && $pixels >= 8)
   {echo"<option value='1'>1</option>";}
 if($randsigaretten >= 2 && $pixels >= 16)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="ksigaretten" value="koop pakjes sigaretten">
 </form>
 <?php
    }
if($kooplucifers == 1)
   {
   ?>
     <a title='<?php if($randlucifers > 1){echo"Ik heb $randlucifers doosjes lucifers, ze kosten 4 pixels per doosje";} else {echo"Ik heb 1 doosje lucifers, ze kosten 4 pixels per doosje";} ?>' href="koopshop.php?klucifersk=1">doosjes lucifers<br /></a>
     <?php
   }
$_SESSION["klucifersk"] = $_GET["klucifersk"];
  $klucifersk = $_SESSION["klucifersk"];
  if($klucifersk == 1)
     {
     if(isset($_POST["klucifers"]))
   {
 $lucifersgekocht = $_POST["lucifersgekocht"];
 $lucifers = $lucifers + $lucifersgekocht;
 $_SESSION["lucifers"] = $lucifers;
 $pixels = $pixels - ($lucifersgekocht * 4);
 $_SESSION["pixels"] = $pixels;
 $_SESSION["klucifersk"] = 0;
 header('location: koopshop.php');
 }
 ?>
   <form action="koopshop.php?klucifersk=1" method="post">
   <select name="lucifersgekocht">
     <option selected value="0">0</option>
 <?php
 if($randlucifers >= 1 && $pixels >= 4)
   {echo"<option value='1'>1</option>";}
 if($randlucifers >= 2 && $pixels >= 8)
   {echo"<option value='2'>2</option>";}
 ?>
 </select>
 <input type="submit" name="klucifers" value="koop doosjes lucifers">
 </form>
 <?php
    }
?>

</div>
