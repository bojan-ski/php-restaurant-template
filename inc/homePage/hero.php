<!-- PHP code -->
<?php
include './data/sr/srHomePage.php';
include './data/en/enHomePage.php';
?>

<!-- HTML code -->
<section class="hero border-bottom text-center mb-3">
    <!-- Video Background -->
    <video autoplay loop muted playsinline class="video-background">
        <source
            src="https://video.wixstatic.com/video/cd9ce2_d4f14374ea3e4d63b37eb615bc2da650/1080p/mp4/file.mp4" type="video/mp4">
    </video>

    <!-- Overlay Content -->
    <div class="hero-header mb-5">
        <h2 class="header-label-one text-white fst-italic">
            <?php if ($lang == 'sr'): ?>
                <?= $srHeroContent["welcome_msg"] ?>
            <?php elseif ($lang == 'en'): ?>
                <?= $enHeroContent["welcome_msg"] ?>
            <?php endif; ?>
        </h2>
        <h2 class="header-label-two text-white fst-italic">
        <?php if ($lang == 'sr'): ?>
                <?= $srHeroContent["restaurant_desc"] ?>
            <?php elseif ($lang == 'en'): ?>
                <?= $enHeroContent["restaurant_desc"] ?>
            <?php endif; ?>
        </h2>
    </div>

    <div class="hero-options row">
        <div class="col-12 col-md-6 mb-5 mb-md-0">
            <a href="menu.php" class="hero-nav-link text-uppercase fst-italic rounded-5 fw-bold">
            <?php if ($lang == 'sr'): ?>
                <?= $srHeroContent["option_one"] ?>
            <?php elseif ($lang == 'en'): ?>
                <?= $enHeroContent["option_one"] ?>
            <?php endif; ?>
            </a>
        </div>

        <div class="col-12 col-md-6">
            <a href="tel:+3811220512122" class="text-uppercase fst-italic rounded-5 fw-bold">
            <?php if ($lang == 'sr'): ?>
                <?= $srHeroContent["option_two"] ?>
            <?php elseif ($lang == 'en'): ?>
                <?= $enHeroContent["option_two"] ?>
            <?php endif; ?>
            </a>
        </div>
    </div>
</section>