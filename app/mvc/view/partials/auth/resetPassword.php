<form class="flex flex-column flex-between form" action="<?= URL ?>password/resetPassword" method="POST">
    <div class="flex flex-column flex-1 flex-center">
        <div class="flex flex-column">
            <h3>Vul je nieuwe wachtwoord din</h3>

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

        </div>
    </div>
    <input type="submit" value="Verzend"/>
</form>
