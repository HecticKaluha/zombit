<form class="flex flex-column flex-between form" action="<?= URL ?>login/login" method="post">
    <div class="flex flex-column flex-1 flex-center">
        <div class="flex flex-column">
            <div class="flex flex-row form-row">
                <label for="email">Email: </label><input type="email" name="email" id="email" value="<?=  isset($user->email) ? $user->email : $data['email'] ?>"><span class="required">*</span>
            </div>
            <?php if (!empty($errors['email'])): ?>
                <div class="errors">
                    <p><?= implode('<br>',$errors['email']); ?></p>
                </div>
            <?php endif;?>
        </div>

        <div class="flex flex-column">
            <div class="flex flex-row form-row">
                <label for="password">Wachtwoord:</label><input type="password" name="password" id="password"><span class="required">*</span>
            </div>
            <?php if (!empty($errors['password'])): ?>
                <div class="errors">
                    <p><?= implode('<br>',$errors['password']); ?></p>
                </div>
            <?php endif;?>
        </div>
        <div class="flex flex-row flex-evenly mt-1">
            <a class="small" href='<?= URL ?>register/create'> Registreer</a>
            <a class="small" href='<?= URL ?>login/'> Wachtwoord vergeten?</a>
        </div>


    </div>
    <input type="submit" value="Inloggen"/>
</form>
