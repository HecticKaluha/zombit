<form class="flex flex-column flex-between form" action="<?= URL ?>register/store" method="post">
    <div class="flex flex-column">
        <div class="flex flex-row form-row">
            <label for="email">Email: </label><input type="email" name="email" id="email" value="<?= $data['email'] ?>"><span class="error">*</span>
        </div>
        <?php if (!empty($errors['email'])): ?>
            <div class="errors">
                <p><?= implode('<br>',$errors['email']); ?></p>
            </div>
        <?php endif;?>
    </div>

    <div class="flex flex-column">
        <div class="flex flex-row form-row">
            <label for="username">Gebruikersnaam:</label><input type="text" name="username" id="username"
                                                                value="<?= $data['username'] ?>" maxlength="20" size="20"/><span class="error">*</span>
        </div>
        <?php if (!empty($errors['username'])): ?>
            <div class="errors">
                <p><?= implode('<br>',$errors['username']); ?></p>
            </div>
        <?php endif;?>
    </div>


    <div class="flex flex-column">
        <div class="flex flex-row form-row">
            <label for="password">Wachtwoord:</label><input type="password" name="password" id="password"><span class="error">*</span>
        </div>
        <?php if (!empty($errors['password'])): ?>
            <div class="errors">
                <p><?= implode('<br>',$errors['password']); ?></p>
            </div>
        <?php endif;?>
    </div>

    <div class="flex flex-column">
        <div class="flex flex-row form-row">
            <label for="confirm_password">Herhaal wachtwoord:</label><input type="password" name="confirm_password"
                                                                            id="confirm_password"><span class="error">*</span>
        </div>
        <?php if (!empty($errors['confirm_password'])): ?>
            <div class="errors">
                <p><?= implode('<br>',$errors['confirm_password']); ?></p>
            </div>
        <?php endif;?>
    </div>


    <input type="submit" value="Account aanmaken"/>
    <a class="small" href='<?= URL ?>login/'>Naar inloggen</a>
</form>
