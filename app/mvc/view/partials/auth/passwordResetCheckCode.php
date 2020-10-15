<form class="flex flex-column flex-between form" action="<?= URL ?>password/checkCode" method="POST">
    <div class="flex flex-column flex-1 flex-center">
        <div class="flex flex-column">
            <h3>Wachtwoordreset</h3>
            <h4>We hebben een e-mail met een code verstuurd naar "<?= $data['email'] ?>". Vul de code hieronder in
                om verder te gaan met het resetten van je wachtwoord.</h4>
            <div class="flex flex-row form-row">
                <label for="code">Vul de code in: </label><input type="text" name="code" id="code"><span
                        class="error">*</span>
            </div>
            <?php if (!empty($errors['code'])): ?>
                <div class="errors">
                    <p><?= implode('<br>', $errors['code']); ?></p>
                </div>
            <?php endif; ?>

            <input type="hidden" name="email" id="email" value="<?= $data["email"] ?>">

        </div>
        <input type="submit" value="Doorgaan"/>
    </div>
</form>
