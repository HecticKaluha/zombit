<div id="login">

    <form action="index.php?id=inloggen" method="post">
        Log hier in<br/><br/><br/>
        Gebruikersnaam: <input class="lol" type="text" name="username" maxlength="20" size="20"/><br/><br/>
        Wachtwoord: <input class="lol" type="password" name="password" maxlength="20" size="20"/><br/>
        <a href="index.php?id=wachtwoordvergeten">Uw gegevens vergeten?</a><br/>
        <input type="submit" value="Log in"/>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            require('./db/db.php');

            $result = login($_POST);
            if (isset($result) && $result == true) {
                $_SESSION["ingelogd"] = 1;
                $_SESSION["username"] = $result[1];
                printf('<meta http-equiv="refresh" content="0;URL=index.php?id=begin"/>');
            }
            else{
                printf('<meta http-equiv="refresh" content="0;URL=index.php?id=fouteinlog"/>');
            }
        }
    }
    ?>
</div>

<div id="guest">
    OF: SPEEL ALS GAST<br/><br/>
    U kunt dan geen gegevens opslaan.
    <form action="index.php?id=begin" method="post">
        <input type="submit" name="verzend" value="Speel als gast"/>
    </form>
    <br/>

    Heeft u nog geen account? Registreer dan hier:
    <form action="index.php?id=accountmaken" method="post">
        <input type="submit" name="stuur" value="Registreer"/>
    </form>
</div>

<?php
if (isset($_SESSION["accmaken"]) && isset($_SESSION['accmaken']) == 1) {
    $gebruikersnaam = $_SESSION["naamaccmaken"];
    echo "Welkom $gebruikersnaam! Uw account is succesvol aangemaakt.";
    unset($_SESSION["accmaken"]);
}

?>