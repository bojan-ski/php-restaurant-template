<!-- PHP code -->
<?php require './db/getSelectOptions.php'; ?>

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
            <h2 class="fw-bold text-white text-decoration-none my-5">
                Pojavila se greška
            </h2>
        <?php endif; ?>
    </div>
</section>