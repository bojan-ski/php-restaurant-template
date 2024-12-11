<?php
include './data/sr/srHomePage.php';
include './data/en/enHomePage.php';
?>

<section class="location mb-3">
    <div class="section-header animate rounded-5 mb-5">
        <h2 class="mb-0">
            <?php if ($lang == 'sr'): ?>
                <?= $srLocationContent["page_header"] ?>
            <?php elseif ($lang == 'en'): ?>
                <?= $enLocationContent["page_header"] ?>
            <?php endif; ?>
        </h2>
    </div>

    
    <div class="location-info container">
        <div class="row mb-4">

            <div class="col-12 col-md-6 mb-5 mb-md-3">
                <p class="text-white mb-0 animate">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srLocationContent["location_info"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enLocationContent["location_info"] ?>
                    <?php endif; ?>
                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <p class="text-white mb-0 ms-0 ms-md-5 animate">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srLocationContent["address"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enLocationContent["address"] ?>
                    <?php endif; ?>
                </p>
                <p class="text-white mb-3 ms-0 ms-md-5 animate">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srLocationContent["city"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enLocationContent["city"] ?>
                    <?php endif; ?>
                </p>
                <p class="text-white mb-0 ms-0 ms-md-5 animate">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srLocationContent["working_hours"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enLocationContent["working_hours"] ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>

    <div class="location-map">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2839.7863986304133!2d21.18331407622838!3d44.621841971072655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750ef0c5b63663d%3A0xf9f0b358755c659c!2sSan%20Marco%20Po%C5%BEarevac!5e0!3m2!1sen!2srs!4v1733056901634!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>