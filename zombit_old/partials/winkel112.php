<?php
if($welhelm > 13)
 {
 $_SESSION["koophelm"] = 0;
 }
$welschouderbeschermers = rand(1,100);
if($welschouderbeschermers <= 11)
 {
 $_SESSION["koopschouderbeschermers"] = 1;
 $randschouderbeschermers = rand(1,2);
 $_SESSION["randschouderbeschermers"] = $randschouderbeschermers;
 }
if($welschouderbeschermers > 11)
 {
 $_SESSION["koopschouderbeschermers"] = 0;
 }
$welbeenbeschermers = rand(1,100);
if($welbeenbeschermers <= 10)
 {
 $_SESSION["koopbeenbeschermers"] = 1;
 $randbeenbeschermers = rand(1,2);
 $_SESSION["randbeenbeschermers"] = $randbeenbeschermers;
 }
if($welbeenbeschermers > 10)
 {
 $_SESSION["koopbeenbeschermers"] = 0;
 }
$welmachinegeweer = rand(1,100);
if($welmachinegeweer <= 2)
 {
 $_SESSION["koopmachinegeweer"] = 1;
 $_SESSION["randmachinegeweer"] = 1;
 }
if($welmachinegeweer > 2)
 {
 $_SESSION["koopmachinegeweer"] = 0;
 }
$welluchtbuks = rand(1,100);
if($welluchtbuks <= 9)
 {
 $_SESSION["koopluchtbuks"] = 1;
 $_SESSION["randluchtbuks"] = 1;
 }
if($welluchtbuks > 9)
 {
 $_SESSION["koopluchtbuks"] = 0;
 }
$welbbgun = rand(1,100);
if($welbbgun <= 15)
 {
 $_SESSION["koopbbgun"] = 1;
 $_SESSION["randbbgun"] = 1;
 }
if($welbbgun > 15)
 {
 $_SESSION["koopbbgun"] = 0;
 }
$welantidotes = rand(1,100);
if($welantidotes <= 50)
 {
 $_SESSION["koopantidotes"] = 1;
 $randantidotes = rand(1,3);
 $_SESSION["randantidotes"] = $randantidotes;
 }
if($welantidotes > 50)
 {
 $_SESSION["koopantidotes"] = 0;
 }
$wellevenspotions = rand(1,100);
if($wellevenspotions <= 50)
 {
 $_SESSION["kooplevenspotions"] = 1;
 $randlevenspotions = rand(1,3);
 $_SESSION["randlevenspotions"] = $randlevenspotions;
 }
if($wellevenspotions > 50)
 {
 $_SESSION["kooplevenspotions"] = 0;
 }
$_SESSION["koopflesje"] = 1;
$randflesje = rand(1,6);
$_SESSION["randflesje"] = $randflesje;
$welenergyrepen = rand(1,100);
if($welenergyrepen <= 50)
 {
 $_SESSION["koopenergyrepen"] = 1;
 $randenergyrepen = rand(1,4);
 $_SESSION["randenergyrepen"] = $randenergyrepen;
 }
if($welenergyrepen > 50)
 {
 $_SESSION["koopenergyrepen"] = 0;
 }
$welschedel = rand(1,100);
if($welschedel <= 56)
 {
 $_SESSION["koopschedel"] = 1;
 $randschedel = rand(1,3);
 $_SESSION["randschedel"] = $randschedel;
 }
if($welschedel > 56)
 {
 $_SESSION["koopschedel"] = 0;
 }
$_SESSION["koopvingerkootje"] = 1;
$randvingerkootje = rand(1,4);
$_SESSION["randvingerkootje"] = $randvingerkootje;
$weltanden = rand(1,100);
if($weltanden <= 56)
 {
 $_SESSION["kooptanden"] = 1;
 $randtanden = rand(1,4);
 $_SESSION["randtanden"] = $randtanden;
 }
if($weltanden > 56)
 {
 $_SESSION["kooptanden"] = 0;
 }
$_SESSION["koopstenen"] = 1;
$randstenen = rand(4,15);
$_SESSION["randstenen"] = $randstenen;
$welgoudenketting = rand(1,100);
if($welgoudenketting <= 4)
 {
 $_SESSION["koopgoudenketting"] = 1;
 $_SESSION["randgoudenketting"] = 1;
 }
if($welgoudenketting > 4)
 {
 $_SESSION["koopgoudenketting"] = 0;
 }
$weloorbellen = rand(1,100);
if($weloorbellen <= 6)
 {
 $_SESSION["koopoorbellen"] = 1;
 $randoorbellen = rand(1,2);
 $_SESSION["randoorbellen"] = $randoorbellen;
 }
if($weloorbellen > 6)
 {
 $_SESSION["koopoorbellen"] = 0;
 }
$welzilverenketting = rand(1,100);
if($welzilverenketting <= 6)
 {
 $_SESSION["koopzilverenketting"] = 1;
 $_SESSION["randzilverenketting"] = 1;
 }
if($welzilverenketting > 6)
 {
 $_SESSION["koopzilverenketting"] = 0;
 }
$welring = rand(1,100);
if($welring <= 15)
 {
 $_SESSION["koopring"] = 1;
 $randring = rand(1,3);
 $_SESSION["randring"] = $randring;
 }
if($welring > 15)
 {
 $_SESSION["koopring"] = 0;
 }
$welarmband = rand(1,100);
if($welarmband <= 11)
 {
 $_SESSION["kooparmband"] = 1;
 $randarmband = rand(1,2);
 $_SESSION["randarmband"] = $randarmband;
 }
if($welarmband > 11)
 {
 $_SESSION["kooparmband"] = 0;
 }
$welmunt = rand(1,100);
if($welmunt <= 9)
 {
 $_SESSION["koopmunt"] = 1;
 $randmunt = rand(1,4);
 $_SESSION["randmunt"] = $randmunt;
 }
if($welmunt > 9)
 {
 $_SESSION["koopmunt"] = 0;
 }
$welplanken = rand(1,100);
if($welplanken <= 63)
 {
 $_SESSION["koopplanken"] = 1;
 $randplanken = rand(3,9);
 $_SESSION["randplanken"] = $randplanken;
 }
if($welplank > 63)
 {
 $_SESSION["koopplank"] = 0;
 }
$_SESSION["kooptak"] = 1;
$randtak = rand(4,17);
$_SESSION["randtak"] = $randtak;
$welijzer = rand(1,100);
if($welijzer <= 30)
 {
 $_SESSION["koopijzer = 1"];
 $randijzer = rand(2,5);
 $_SESSION["randijzer"] = $randijzer;
 }
if($welijzer > 30)
 {
 $_SESSION["koopijzer"] = 0;
 }
$weldonkerkristal = rand(1,100);
if($weldonkerkristal <= 1)
 {
 $_SESSION["koopdonkerkristal"] = 1;
 $_SESSION["randdonkerkristal"] = 1;
 }
if($weldonkerkristal > 1)
 {
 $_SESSION["koopdonkerkristal"] = 0;
 }
$welroodkristal = rand(1,100);
if($welroodkristal <= 2)
 {
 $_SESSION["kooproodkristal"] = 1;
 $_SESSION["randroodkristal"] = 1;
 }
if($welroodkristal > 2)
 {
 $_SESSION["kooproodkristal"] = 0;
 }
$welhamer = rand(1,100);
if($welhamer <= 38)
 {
 $_SESSION["koophamer"] = 1;
 $randhamer = rand(1,3);
 $_SESSION["randhamer"] = $randhamer;
 }
if($welhamer > 38)
 {
 $_SESSION["koophamer"] = 0;
 }
$welschroevendraaier = rand(1,100);
if($welschroevendraaier <= 38)
 {
 $_SESSION["koopschroevendraaier"] = 1;
 $randschroevendraaier = rand(1,2);
 $_SESSION["randschroevendraaier"] = $randschroevendraaier;
 }
if($welschroevendraaier > 38)
 {
 $_SESSION["koopschroevendraaier"] = 0;
 }
$welbeitel = rand(1,100);
if($welbeitel <= 38)
 {
 $_SESSION["koopbeitel"] = 1;
 $randbeitel = rand(1,4);
 $_SESSION["randbeitel"] = $randbeitel;
 }
if($welbeitel > 38)
 {
 $_SESSION["koopbeitel"] = 0;
 }
$welschoenen = rand(1,100);
if($welschoenen <= 22)
 {
 $_SESSION["koopschoenen"] = 1;
 $randschoenen = rand(1,2);
 $_SESSION["randschoenen"] = $randschoenen;
 }
if($welschoenen > 22)
 {
 $_SESSION["koopschoenen"] = 0;
 }
$welstof = rand(1,100);
if($welstof <= 77)
 {
 $_SESSION["koopstof"] = 1;
 $randstof = rand(2,7);
 $_SESSION["randstof"] = $randstof;
 }
if($welstof > 77)
 {
 $_SESSION["koopstof"] = 0;
 }
 
 ?>


<div id='div3'>Je hebt de eigenaar gedood. Je pakt de sleutel van zijn lichaam</div>
 <div id='div4'>
 <a href='index.php?id=winkel1121'>Ga items uit de winkel halen</a><br><br>
 <a href='index.php?id=winkel1122'>Vertek</a>
 </div> 