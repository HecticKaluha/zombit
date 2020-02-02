<?php isset($errors) ? print_r($errors) : ''  ?>
<?php isset($data) ? print_r($data) : ''  ?>

<form class="flex flex-column flex-between form" name="registreren" action="<?= URL ?>register/store" method="post">
    <div class="flex flex-row form-row">
        <label for="email">Email:</label><input type="email" name="email" id="email">
    </div>
    <div class="flex flex-row form-row">
        <label for="username">Gebruikersnaam:</label><input type="text" name="username" id="username" maxlength="20" size="20" />
    </div>
    <div class="flex flex-row form-row">
        <label for="password">Wachtwoord:</label><input type="password" name="password" id="password">
    </div>
    <div class="flex flex-row form-row">
        <label for="confirm_password">Herhaal wachtwoord:</label><input type="password" name="confirm_password" id="confirm_password">
    </div>

    <input type="submit" value="Account aanmaken" />
    <a href='<?= URL ?>login/login'>Terug naar inloggen</a>
</form>
