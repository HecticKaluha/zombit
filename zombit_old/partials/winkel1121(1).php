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
$energyrepen = $_SESSION["engergyrepen"];
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
$randenergyrepen = $_SESSION["randengergyrepen"];
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

if($koophelm == 1 && $randhelm != 0)
			 {
			 if($randhelm ==1)
			 			  {
						  echo"U heeft 1 helm gevonden";
						  $helm = $_SESION["helm"];
						  $helm = $helm + 1;
						  $_SESSION["helm"] = $helm;
						  }
			 else
			 	 		  {
						  echo"U heeft $randhelm helmen gevonden";
						  $helm = $_SESION["helm"];
						  $helm = $helm + $randhelm;
						  $_SESSION["helm"] = $helm;
						  }
			 }
			
			
if($koopkogels == 1 && $randkogels != 0)
			 {
			 if($randkogels ==1)
			 			  {
						  echo"U heeft 1 kogel gevonden";
						  $kogels = $_SESION["kogels"];
						  $kogels = $kogels + 1;
						  $_SESSION["kogels"] = $kogels;
						  }
			 else
			 	 		  {
						  echo"U heeft $randkogels kogels gevonden";
						  $kogels = $_SESION["kogels"];
						  $kogels = $kogels + $randkogels;
						  $_SESSION["kogels"] = $kogels;
						  }
			 }
			 
if($koopschouderbeschermers == 1 && $randschouderbeschermers != 0)
			 {
			 if($randschouderbeschermers ==1)
			 			  {
						  echo"U heeft 1 schouderbeschermer gevonden";
						  $schouderbeschermers = $_SESION["schouderbeschermers"];
						  $schouderbeschermers = $schouderbeschermers + 1;
						  $_SESSION["schouderbeschermers"] = $schouderbeschermers;
						  }
			 else
			 	 		  {
						  echo"U heeft $randschouderbeschermers schouderbeschermers gevonden";
						  $schouderbeschermers = $_SESION["schouderbeschermers"];
						  $schouderbeschermers = $schouderbeschermers + $randschouderbeschermers;
						  $_SESSION["schouderbeschermers"] = $schouderbeschermers;
						  }
			 }
			 
if($koopbeenbeschermers == 1 && $randbeenbeschermers != 0)
			 {
			 if($randbeenbeschermers ==1)
			 			  {
						  echo"U heeft 1 beenbeschermer gevonden";
						  $beenbeschermers = $_SESION["beenbeschermers"];
						  $beenbeschermers = $beenbeschermers + 1;
						  $_SESSION["beenbeschermers"] = $beenbeschermers;
						  }
			 else
			 	 		  {
						  echo"U heeft $randbeenbeschermers beenbeschermers gevonden";
						  $beenbeschermers = $_SESION["beenbeschermers"];
						  $beenbeschermers = $beenbeschermers + $randbeenbeschermers;
						  $_SESSION["beenbeschermers"] = $beenbeschermers;
						  }
			 }
			 
if($koopmachinegeweer == 1 && $randmachinegeweer != 0)
			 {
			 if($randmachinegeweer ==1)
			 			  {
						  echo"U heeft 1 machinegeweer gevonden";
						  $machinegeweer = $_SESION["machinegeweer"];
						  $machinegeweer = $machinegeweer + 1;
						  $_SESSION["machinegeweer"] = $machinegeweer;
						  }
			 else
			 	 		  {
						  echo"U heeft $randmachinegeweer machinegeweren gevonden";
						  $machinegeweer = $_SESION["machinegeweer"];
						  $machinegeweer = $machinegeweer + $randmachinegeweer;
						  $_SESSION["machinegeweer"] = $machinegeweer;
						  }
			 }
	if($koopluchtbuks == 1 && $randluchtbuks != 0)
			 {
			 if($randluchtbuks ==1)
			 			  {
						  echo"U heeft 1 luchtbuks gevonden";
						  $luchtbuks = $_SESION["luchtbuks"];
						  $luchtbuks = $luchtbuks + 1;
						  $_SESSION["luchtbuks"] = $luchtbuks;
						  }
			 else
			 	 		  {
						  echo"U heeft $randluchtbuks luchtbuksen gevonden";
						  $luchtbuks = $_SESION["luchtbuks"];
						  $luchtbuks = $luchtbuks + $randluchtbuks;
						  $_SESSION["luchtbuks"] = $luchtbuks;
						  }
			 }
			 
if($koopbbgun == 1 && $randbbgun != 0)
			 {
			 if($randbbgun ==1)
			 			  {
						  echo"U heeft 1 bbgun gevonden";
						  $bbgun = $_SESION["bbgun"];
						  $bbgun = $bbgun + 1;
						  $_SESSION["bbgun"] = $bbgun;
						  }
			 else
			 	 		  {
						  echo"U heeft $bbgun bbguns gevonden";
						  $bbgun = $_SESION["bbgun"];
						  $bbgun = $bbgun + $bbgun;
						  $_SESSION["bbgun"] = $bbgun;
						  }
			 }
			 
if($koopantidotes == 1 && $randantidotes != 0)
			 {
			 if($randantidotes ==1)
			 			  {
						  echo"U heeft 1 antidote gevonden";
						  $antidotes = $_SESION["antidotes"];
						  $antidotes = $antidotes + 1;
						  $_SESSION["antidotes"] = $antidotes;
						  }
			 else
			 	 		  {
						  echo"U heeft $antidotes antidotes gevonden";
						  $antidotes = $_SESION["antidotes"];
						  $antidotes = $antidotes + $antidotes;
						  $_SESSION["antidotes"] = $antidotes;
						  }
			 }

if($kooplevenspotions == 1 && $randlevenspotions != 0)
			 {
			 if($randlevenspotions ==1)
			 			  {
						  echo"U heeft 1 levenspotion gevonden";
						  $levenspotions = $_SESION["levenspotions"];
						  $levenspotions = $levenspotions + 1;
						  $_SESSION["levenspotions"] = $levenspotions;
						  }
			 else
			 	 		  {
						  echo"U heeft $levenspotions levenspotions gevonden";
						  $levenspotions = $_SESION["levenspotions"];
						  $levenspotions = $levenspotions + $levenspotions;
						  $_SESSION["levenspotions"] = $levenspotions;
						  }
			 }

if($koopflesje == 1 && $randflesje != 0)
			 {
			 if($randflesje ==1)
			 			  {
						  echo"U heeft 1 flesje gevonden";
						  $flesje = $_SESION["flesje"];
						  $flesje = flesje + 1;
						  $_SESSION["flesje"] = $flesje;
						  }
			 else
			 	 		  {
						  echo"U heeft $flesje flesjes gevonden";
						  $flesje = $_SESION["flesje"];
						  $flesje = $flesje + $flesje;
						  $_SESSION["flesje"] = $flesje;
						  }
			 } 		
			 
if($koopenergyrepen == 1 && $randenergyrepen != 0)
			 {
			 if($randenergyrepen ==1)
			 			  {
						  echo"U heeft 1 energyreep gevonden";
						  $energyrepen = $_SESION["energyrepen"];
						  $energyrepen = $energyrepen + 1;
						  $_SESSION["energyrepen"] = $energyrepen;
						  }
			 else
			 	 		  {
						  echo"U heeft $energyrepen energyrepen gevonden";
						  $energyrepen = $_SESION["energyrepen"];
						  $energyrepen = $energyrepen + $energyrepen;
						  $_SESSION["energyrepen"] = $energyrepen;
						  }
			 } 		
			 
if($koopgoudenketting == 1 && $randgoudenketting != 0)
			 {
			 if($randgoudenketting ==1)
			 			  {
						  echo"U heeft 1 goudenketting gevonden";
						  $goudenketting = $_SESION["goudenketting"];
						  $goudenketting = $goudenketting + 1;
						  $_SESSION["goudenketting"] = $goudenketting;
						  }
			 else
			 	 		  {
						  echo"U heeft $goudenketting goudenkettingen gevonden";
						  $goudenketting = $_SESION["goudenketting"];
						  $goudenketting = $goudenketting + $goudenketting;
						  $_SESSION["goudenketting"] = $goudenketting;
						  }
			 } 		
			 
if($koopgoorbellen == 1 && $randoorbellen != 0)
			 {
			 if($randoorbellen ==1)
			 			  {
						  echo"U heeft 1 oorbel gevonden";
						  $oorbellen = $_SESION["oorbellen"];
						  $oorbellen = $oorbellen + 1;
						  $_SESSION["oorbellen"] = $oorbellen;
						  }
			 else
			 	 		  {
						  echo"U heeft $oorbellen oorbellen gevonden";
						  $oorbellen = $_SESION["oorbellen"];
						  $oorbellen = $oorbellen + $oorbellen;
						  $_SESSION["oorbellen"] = $oorbellen;
						  }
			 } 		
				 
if($koopgzilverenketting == 1 && $randzilverenketting != 0)
			 {
			 if($randzilverenketting ==1)
			 			  {
						  echo"U heeft 1 zilveren ketting gevonden";
						  $zilverenketting = $_SESION["zilverenketting"];
						  $zilverenketting = $zilverenketting + 1;
						  $_SESSION["zilverenketting"] = $zilverenketting;
						  }
			 else
			 	 		  {
						  echo"U heeft $zilverenketting zilveren kettingen gevonden";
						  $oorbellen = $_SESION["zilverenketting"];
						  $oorbellen = $zilverenketting + $zilverenketting;
						  $_SESSION["zilverenketting"] = $zilverenketting;
						  }
			 }
			 
if($koopring == 1 && $randring != 0)
			 {
			 if($randring ==1)
			 			  {
						  echo"U heeft 1 ring gevonden";
						  $ring = $_SESION["ring"];
						  $ring = $ring + 1;
						  $_SESSION["ring"] = $ring;
						  }
			 else
			 	 		  {
						  echo"U heeft $ring ring gevonden";
						  $ring = $_SESION["ring"];
						  $ring = $ring + $ring;
						  $_SESSION["ring"] = $ring;
						  }
			 }
			 
			
if($kooparmband == 1 && $randarmband != 0)
			 {
			 if($randarmband ==1)
			 			  {
						  echo"U heeft 1 armband gevonden";
						  $armband = $_SESION["armband"];
						  $armband = $armband + 1;
						  $_SESSION["armband"] = $armband;
						  }
			 else
			 	 		  {
						  echo"U heeft $armband armband gevonden";
						  $armband = $_SESION["armband"];
						  $armband = $armband + $armband;
						  $_SESSION["armband"] = $armband;
						  }
			 }
if($koopmunt == 1 && $randmunt != 0)
			 {
			 if($randmunt ==1)
			 			  {
						  echo"U heeft 1 munt gevonden";
						  $munt = $_SESION["munt"];
						  $munt = $munt + 1;
						  $_SESSION["munt"] = $munt;
						  }
			 else
			 	 		  {
						  echo"U heeft $munt munt gevonden";
						  $munt = $_SESION["munt"];
						  $munt = $munt + $munt;
						  $_SESSION["munt"] = $munt;
						  }
			 }			 
			 			 
if($koopplanken == 1 && $randplanken != 0)
			 {
			 if($randplanken ==1)
			 			  {
						  echo"U heeft 1 plank gevonden";
						  $planken = $_SESION["planken"];
						  $planken = $planken + 1;
						  $_SESSION["planken"] = $planken;
						  }
			 else
			 	 		  {
						  echo"U heeft $planken planken gevonden";
						  $planken = $_SESION["planken"];
						  $planken = $planken + $planken;
						  $_SESSION["planken"] = $planken;
						  }
			 }			 

if($kooptak == 1 && $randtak != 0)
			 {
			 if($randtak ==1)
			 			  {
						  echo"U heeft 1 tak gevonden";
						  $tak = $_SESION["tak"];
						  $tak = $tak + 1;
						  $_SESSION["tak"] = $tak;
						  }
			 else
			 	 		  {
						  echo"U heeft $tak tak gevonden";
						  $tak = $_SESION["tak"];
						  $tak = $tak + $tak;
						  $_SESSION["tak"] = $tak;
						  }
			 }		
			 	 
if($koopijzer == 1 && $randijzer != 0)
			 {
			 if($randijzer ==1)
			 			  {
						  echo"U heeft 1 brok ijzer gevonden";
						  $ijzer = $_SESION["ijzer"];
						  $ijzer = $tak + 1;
						  $_SESSION["ijzer"] = $ijzer;
						  }
			 else
			 	 		  {
						  echo"U heeft $ijzer brokken ijzer gevonden";
						  $ijzer = $_SESION["ijzer"];
						  $ijzer = $ijzer + $ijzer;
						  $_SESSION["ijzer"] = $ijzer;
						  }
			 }			 
			 
if($koopdonkerkristal == 1 && $randdonkerkristal != 0)
			 {
			 if($randdonkerkristal ==1)
			 			  {
						  echo"U heeft 1 donker kristal gevonden";
						  $donkerkristal = $_SESION["donkerkristal"];
						  $donkerkristal = $donkerkristal + 1;
						  $_SESSION["donkerkristal"] = $donkerkristal;
						  }
			 else
			 	 		  {
						  echo"U heeft $donkerkristal donkere kristal gevonden";
						  $donkerkristal = $_SESION["donkerkristal"];
						  $donkerkristal = $donkerkristal + $donkerkristal;
						  $_SESSION["donkerkristal"] = $donkerkristal;
						  }
			 }			 

if($kooproodkristal == 1 && $randroodkristal != 0)
			 {
			 if($randroodkristal ==1)
			 			  {
						  echo"U heeft 1 rood kristal gevonden";
						  $roodkristal = $_SESION["roodkristal"];
						  $roodkristal = $roodkristal + 1;
						  $_SESSION["roodkristal"] = $roodkristal;
						  }
			 else
			 	 		  {
						  echo"U heeft $roodkristal rode kristallen gevonden";
						  $roodkristal = $_SESION["roodkristal"];
						  $roodkristal = $roodkristal + $roodkristal;
						  $_SESSION["roodkristal"] = $roodkristal;
						  }
			 }	
			 		 
if($koophamer == 1 && $randhamer != 0)
			 {
			 if($randhamer ==1)
			 			  {
						  echo"U heeft 1 hamer gevonden";
						  $hamer = $_SESION["hamer"];
						  $hamer = $hamer + 1;
						  $_SESSION["hamer"] = $hamer;
						  }
			 else
			 	 		  {
						  echo"U heeft $hamer hamer gevonden";
						  $hamer = $_SESION["hamer"];
						  $hamer = $hamer + $hamer;
						  $_SESSION["hamer"] = $hamer;
						  }
			 }
			 
if($koopschroevendraaier == 1 && $randschroevendraaier != 0)
			 {
			 if($randschroevendraaier ==1)
			 			  {
						  echo"U heeft 1 schroevendraaier gevonden";
						  $schroevendraaier = $_SESION["schroevendraaier"];
						  $schroevendraaier = $schroevendraaier + 1;
						  $_SESSION["schroevendraaier"] = $schroevendraaier;
						  }
			 else
			 	 		  {
						  echo"U heeft $schroevendraaier schroevendraaiers gevonden";
						  $schroevendraaier = $_SESION["schroevendraaier"];
						  $schroevendraaier = $schroevendraaier + $schroevendraaier;
						  $_SESSION["schroevendraaier"] = $schroevendraaier;
						  }
			 }		
			  			 		 			
if($koopbeitel == 1 && $randbeitel != 0)
			 {
			 if($randbeitel ==1)
			 			  {
						  echo"U heeft 1 beitel gevonden";
						  $beitel = $_SESION["beitel"];
						  $beitel = $beitel + 1;
						  $_SESSION["beitel"] = $beitel;
						  }
			 else
			 	 		  {
						  echo"U heeft $beitel beitels gevonden";
						  $beitel = $_SESION["beitel"];
						  $beitel = $beitel + $beitel;
						  $_SESSION["beitel"] = $beitel;
						  }
			 }		 			 		 			
			 
if($koopschoenen == 1 && $randschoenen != 0)
			 {
			 if($randschoenen==1)
			 			  {
						  echo"U heeft 1 schoen gevonden";
						  $schoenen = $_SESION["schoenen"];
						  $schoenen = $schoenen + 1;
						  $_SESSION["schoenen"] = $schoenen;
						  }
			 else
			 	 		  {
						  echo"U heeft $schoenen schoenen gevonden";
						  $schoenen = $_SESION["schoenen"];
						  $schoenen = $schoenen + $schoenen;
						  $_SESSION["schoenen"] = $schoenen;
						  }
			 }	
			 	 			 		 			
if($koopstof == 1 && $stof != 0)
			 {
			 if($stof==1)
			 			  {
						  echo"U heeft 1 lap stof gevonden";
						  $stof = $_SESION["stof"];
						  $stof = $stof + 1;
						  $_SESSION["stof"] = $stof;
						  }
			 else
			 	 		  {
						  echo"U heeft $stof lappen stof gevonden";
						  $stof = $_SESION["stof"];
						  $stof = $stof + $stof;
						  $_SESSION["stof"] = $stof;
						  }
			 }	
			 	 			 		 			
if($koopsigaretten == 1 && $sigaretten != 0)
			 {
			 if($sigaretten==1)
			 			  {
						  echo"U heeft 1 pakje sigaretten gevonden";
						  $sigaretten = $_SESION["sigaretten"];
						  $sigaretten = $sigaretten + 1;
						  $_SESSION["sigaretten"] = $sigaretten;
						  }
			 else
			 	 		  {
						  echo"U heeft $sigaretten pakjes sigaretten gevonden";
						  $sigaretten = $_SESION["sigaretten"];
						  $sigaretten = $sigaretten + $sigaretten;
						  $_SESSION["sigaretten"] = $sigaretten;
						  }
			 }	
			 			 
if($kooplucifers == 1 && $lucifers != 0)
			 {
			 if($lucifers==1)
			 			  {
						  echo"U heeft 1 doosje lucifers gevonden";
						  $lucifers = $_SESION["lucifers"];
						  $lucifers = $lucifers + 1;
						  $_SESSION["lucifers"] = $lucifers;
						  }
			 else
			 	 		  {
						  echo"U heeft $lucifers doosjes lucifers gevonden";
						  $lucifers = $_SESION["lucifers"];
						  $lucifers = $lucifers + $lucifers;
						  $_SESSION["lucifers"] = $lucifers;
						  }
			 }		 		 			 		 			
?>

<div id='div3'></div>
 <div id='div4'>
 <a href='index.php?id=s'>Vertrek</a><br><br>
 </div> 