<?php
include 'inc/htmlStart.php';

include './data/sr/srNotFoundPage.php';
include './data/en/enNotFoundPage.php';

?>

<main class="main" id="main">
    <div class="not-found-page border-bottom mb-3 d-flex align-items-center justify-content-center">

        <div>
            <h1 class="text-white text-center fw-bold">
                <?php if ($lang == 'sr'): ?>
                    <?= $srNotFoundContent["heading_one"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enNotFoundContent["heading_one"] ?>
                <?php endif; ?>
            </h1>

            <h2 class="text-white text-center">
                <?php if ($lang == 'sr'): ?>
                    <?= $srNotFoundContent["heading_two"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enNotFoundContent["heading_two"] ?>
                <?php endif; ?>
            </h2>
        </div>

    </div>
</main>

<?php include 'inc/htmlEnd.php' ?>