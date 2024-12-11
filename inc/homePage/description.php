<?php
include './data/sr/srHomePage.php';
include './data/en/enHomePage.php';
?>

<section class="description border-bottom mb-3">
    <div class="container">
        <div class="row text-white">

            <div class="col-12 col-md-6 mb-3">
                <h2 class="mb-5 fst-italic">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srDescriptionContent["headline"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enDescriptionContent["headline"] ?>
                    <?php endif; ?>
                </h2>

                <h6 class="mb-5 lh-base">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srDescriptionContent["description"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enDescriptionContent["description"] ?>
                    <?php endif; ?>
                </h6>

                <p class="mb-1 fst-italic">
                <?php if ($lang == 'sr'): ?>
                        <?= $srDescriptionContent["quote"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enDescriptionContent["quote"] ?>
                    <?php endif; ?>
                </p>
                <p class="mb-0 fst-italic">
                <?php if ($lang == 'sr'): ?>
                        <?= $srDescriptionContent["author"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enDescriptionContent["author"] ?>
                    <?php endif; ?>
                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div id="carouselMenuItems" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/home/carousel-img-one.avif" class="w-100" alt="carousel-img-one">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/home/carousel-img-two.avif" class="w-100" alt="carousel-img-two">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/home/carousel-img-three.avif" class="w-100" alt="carousel-img-three">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMenuItems" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMenuItems" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>