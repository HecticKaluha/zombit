<div id='div3'>De eigenaar van de winkel legt uit dat hij aan het schuilen was voor de zombies, hij ziet erg bang een aangedaan uit. Hij zegt dat hij je wel spullen wilt verkopen maar dat zijn winkel dan eerst een beetje opgeknapt moet worden hij zegt dat je 20 planken en een hamer nodig hebt. </div>
 <div id='div4'>
 
 <?php
 
 $planken = $_SESSION["planken"]; 
 $hamer = $_SESSION["hamer"]; 
 
 if ($planken == 0) { echo"U heeft 0 planken<br />";}
 if ($planken == 1) { echo"U heeft 1 plank<br />";}
 if ($planken > 1) { echo"U heeft $planken planken<br />";}
 
 if ($hamer == 0) { echo"U heeft 0 hamers<br />";}
 if ($hamer == 1) { echo"U heeft 1 hamer<br />";}
 if ($hamer > 1) { echo"U heeft $hamer hamers<br />";}
 
 if($planken > 19 && $hamer > 0)
 {
 echo"<a href='index.php?id=winkel1111'>Help de winkeleigenaar<br /></a><br><br>";
 $_SESSION["winkelstoryline"] = $_SESSION["winkelstoryline"] + 1;
 }
 else
 {
 echo"<a href='index.php?id=winkel'>Keer terug naar de winkelruimte</a>";
 }
?>
 </div> 