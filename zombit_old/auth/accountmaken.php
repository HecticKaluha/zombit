<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zombit | Registreren</title>
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
	var emailID=document.registreren.emailadres
	
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
<body>
<form name="registreren" action="../index.php?id=accountmaken" method="post" onSubmit="return ValidateForm()">
Vul hier uw gewenste gebruikersnaam in:
<br /> <input class="lol" type="text" name="gebruikersnaam" maxlength="20" size="20" /><br /><br />
Vul hier uw wachtwoord in:
<br /> <input class="lol" type="password" name="wachtwoord" maxlength="20" size="20" /><br /><br />
Herhaal uw wachtwoord:
<br /> <input class="lol" type="password" name="herhaalwachtwoord" maxlength="20" size="20" /><br /><br />
Vul hier uw emailadres in:
<br /> <input class="lol" type="email" name="emailadres" maxlength="30" size="30" /><br /><br />
<input type="submit" name="verzend" value="Account aanmaken" /><a href='../index.php?id=inloggen'>Terug naar inloggen</a>
</form>
<br /><br />
<?php
if(isset($_POST["verzend"]))
{

$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];
$herhaalwachtwoord = $_POST["herhaalwachtwoord"];
$emailadres = $_POST["emailadres"];

if(preg_match("/^[a-zA-Z0-9]+$/", $gebruikersnaam))
{

if($wachtwoord == $herhaalwachtwoord && !empty($gebruikersnaam) && !empty($wachtwoord))
{
$mysql = mysql_connect("localhost","rubenik104_admin","appeltaart") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
mysql_select_db("rubenik104_zombit",$mysql) or die("Fout: Het openen van de database is mislukt!");
mysql_query("INSERT INTO users (gebruikersnaam, wachtwoord, emailadres) VALUES ('$gebruikersnaam', '$wachtwoord', '$emailadres')",$mysql) or die("De gebruikersnaam die of het emailadres dat u hebt gekozen is al in gebruik. Probeer het alstublieft opnieuw.");
mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

$_SESSION["naamaccmaken"] = $gebruikersnaam;
$_SESSION["accmaken"] = 1;
sleep(5);
header("Location: index.php?id=inloggen");
}

else
{
echo"Uw ingegeven wachtwoorden zijn niet aan elkaar gelijk. Probeer het alstublieft opnieuw.";	
}

}
else
{
echo"U hebt speciale tekens gebruikt of u hebt niet alle velden ingevoerd. Probeer het alstublieft opnieuw.";
}

}
?>

</body>
</html>