<?php
include './data/sr/srHomePage.php';
include './data/en/enHomePage.php';
?>

<section class="reservations border-bottom mb-3">
    <div class="container">
        <div class="section-header animate rounded-5">
            <h2 class="mb-0">
                <?php if ($lang == 'sr'): ?>
                    <?= $srReservationContent["page_header"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enReservationContent["page_header"] ?>
                <?php endif; ?>
            </h2>
        </div>

        <div class="reservation-option text-center">
            <h2 class="text-uppercase fw-bold text-white animate">
                <?php if ($lang == 'sr'): ?>
                    <?= $srReservationContent["reservation_msg"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enReservationContent["reservation_msg"] ?>
                <?php endif; ?>
            </h2>

            <p class="text-white animate">
                <?php if ($lang == 'sr'): ?>
                    <?= $srReservationContent["reservation_desc"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enReservationContent["reservation_desc"] ?>
                <?php endif; ?>
            </p>

            <a href="tel:+3811220512122" class="phone-num text-capitalize fst-italic fw-bold px-5 py-3 rounded-5 animate">
                <?php if ($lang == 'sr'): ?>
                    <?= $srReservationContent["contact_btn"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enReservationContent["contact_btn"] ?>
                <?php endif; ?>
            </a>
        </div>
    </div>
</section>