<form class="flex flex-column flex-between form" action="<?= URL ?>password/resetPassword" method="POST">
    <div class="flex flex-column flex-1 flex-center">
        <div class="flex flex-column">
            <h3>Wachtwoordreset</h3>
            <div class="flex flex-row form-row">
                <label for="email">Vul je email in: </label><input type="email" name="email" id="email" value="<?=  isset($user->email) ? $user->email : $data['email'] ?>"><span class="error">*</span>
            </div>
            <?php if (!empty($errors['email'])): ?>
                <div class="errors">
                    <p><?= implode('<br>',$errors['email']); ?></p>
                </div>
            <?php endif;?>
        </div>
    </div>
    <input type="submit" value="Verzend"/>
</form>
