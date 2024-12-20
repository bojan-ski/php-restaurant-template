<?php
include 'inc/htmlStart.php';

include './data/sr/srErrorPage.php';
include './data/en/enErrorPage.php';

?>

<main class="main" id="main">
    <div class="error-page border-bottom mb-3 d-flex align-items-center justify-content-center">

        <div>
            <h1 class="text-white text-center fw-bold">
                <?php if ($lang == 'sr'): ?>
                    <?= $srErrorContent["heading_one"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enErrorContent["heading_one"] ?>
                <?php endif; ?>
            </h1>

            <h2 class="text-white text-center">
                <?php if ($lang == 'sr'): ?>
                    <?= $srErrorContent["heading_two"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enErrorContent["heading_two"] ?>
                <?php endif; ?>
            </h2>
        </div>

    </div>
</main>

<?php include 'inc/htmlEnd.php' ?>