<?php
include 'inc/htmlStart.php';

include './data/sr/srMenuPage.php';
include './data/en/enMenuPage.php';

?>

<main class="main" id="main">
    <div class="menu-page border-bottom mb-3">

        <h2 class="text-white text-center text-uppercase">
            <?php if ($lang == 'sr'): ?>
                <?= $srMenuContent["headline"] ?>
            <?php elseif ($lang == 'en'): ?>
                <?= $enMenuContent["headline"] ?>
            <?php endif; ?>
        </h2>

        <?php include 'inc/menuPage/selectOptions.php' ?>

        <?php include 'inc/menuPage/menuItems.php' ?>

    </div>
</main>

<?php include 'inc/htmlEnd.php' ?>