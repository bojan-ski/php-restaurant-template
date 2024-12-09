<!-- PHP code -->
<?php require './models/getSelectOptions.php'; ?>

<!-- HTML code -->
<section class="select-feature text-center">
    <div class="container">
        <?php if (isset($selectOptionsResult) && !empty($selectOptionsResult)): ?>
            <select class="my-5 select-option">
                <?php foreach ($selectOptionsResult as $option): ?>
                    <option value='<?= $option['select_option_value'] ?>'>
                        <?= $option['select_option_title'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <h3 class="fw-bold text-white text-decoration-none my-5">
                Greška prilikom prikazivanje opcija za meni
            </h3>
        <?php endif; ?>
    </div>
</section>