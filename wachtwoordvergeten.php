<head>
<script language = "Javascript">
function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Uw emailadres is verkeerd ingevoerd")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Uw emailadres is verkeerd ingevoerd")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Uw emailadres is verkeerd ingevoerd")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Uw emailadres is verkeerd ingevoerd")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Uw emailadres is verkeerd ingevoerd")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Uw emailadres is verkeerd ingevoerd")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.wachtwoordvergeten.emailen
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Vul alstublieft uw emailadres in")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
 
</script>
</head>


<div id="login">
<form name="wachtwoordvergeten" action="index.php?id=wachtwoordvergeten" method="post" onSubmit="return ValidateForm()">
Vul hier uw emailadres in:<br /><br /><br />
<input type="text" name="emailen" /><br /><br />
<input type="submit" name="verstuur" value="Klik voor uw gegevens" /><br /><br />
</form>

<?php
if(isset($_POST["verstuur"]))
{
$emailen = $_POST["emailen"];

$mysql = mysql_connect("localhost","rubenik104_admin","appeltaart") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
mysql_select_db("rubenik104_zombit",$mysql) or die("Fout: Het openen van de database is mislukt!");
$resultaat1 = mysql_query("SELECT emailadres FROM users WHERE emailadres = '$emailen'",$mysql) or die("De gebruikersnaam die of het emailadres dat u hebt gekozen is al in gebruik. Probeer het alstublieft opnieuw.");
$resultaat2 = mysql_query("SELECT wachtwoord FROM users WHERE emailadres = '$emailen'",$mysql) or die("De gebruikersnaam die of het emailadres dat u hebt gekozen is al in gebruik. Probeer het alstublieft opnieuw.");
$resultaat3 = mysql_query("SELECT gebruikersnaam FROM users WHERE emailadres = '$emailen'",$mysql) or die("De gebruikersnaam die of het emailadres dat u hebt gekozen is al in gebruik. Probeer het alstublieft opnieuw.");
mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
if(mysql_num_rows($resultaat1)==0){echo"Het ingegeven emailadres komt niet voor in de database.";}
while(list($emailecht) = mysql_fetch_row($resultaat1))
 {

   while(list($hetwachtwoord) = mysql_fetch_row($resultaat2))
   	{
	  while(list($degebruikersnaam) = mysql_fetch_row($resultaat3))
   	  	{

	echo"Er is succesvol een email verzonden naar $emailecht<br />";
	
  	  mail("$emailecht","Zombit Klantenservice","
	  Onlangs hebt u uw gegevens opgevraagd via www.zombit.nl.
	  
	  Uw gebruikersnaam is: $degebruikersnaam
	  Uw wachtwoord is: $hetwachtwoord
	  
	  Uit veiligheidsoverwegingen geven wij verder geen informatie over uw account.
	  
	  Met vriendelijke groeten,
	  De Zombit Crew
	  
	  PS. Dit is een automatisch gegenereerde email. Een reactie sturen is niet mogelijk."
	  
	  ,"From: zombit@noreply.com");
	  
	  }
	 
  	}
  
  
  
  }
 


}

?>
<a href='index.php?id=inloggen'>Terug naar inloggen</a>
</div>