<div id="description" class="flex flex-row">
    <div class="flex flex-column">
        <h3>Gebruiker</h3>
        <?php foreach ($user as $key => $value): ?>
            <div class="flex flex-row resource-row">
                <span><?= $key ?>:</span>&nbsp<span><?= $value ?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <img src="<?= SOURCES ?>/img/logo.png">
</div>

<div id="options" class="flex flex-column">

</div>