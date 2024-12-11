<?php
include './data/sr/srFooter.php';
include './data/en/enFooter.php';
?>

<footer class="footer pb-3" id="footer">
    <div class="container">
        <div class="section-header animate rounded-5 mb-5">
            <h2 class="text-uppercase">
                <?php if ($lang == 'sr'): ?>
                    <?= $srFooterContent["page_header"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enFooterContent["page_header"] ?>
                <?php endif; ?>
            </h2>
        </div>

        <div class="row mb-4">
            <div class="col-6">
                <p class="text-uppercase text-white fw-bold animate">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srFooterContent["restaurant_info_header"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enFooterContent["restaurant_info_header"] ?>
                    <?php endif; ?>
                </p>

                <h3 class="text-uppercase text-white fw-bold mb-5 animate">
                    <?php if ($lang == 'sr'): ?>
                        <?= $srFooterContent["restaurant_name"] ?>
                    <?php elseif ($lang == 'en'): ?>
                        <?= $enFooterContent["restaurant_name"] ?>
                    <?php endif; ?>
                </h3>

                <div class="firm-data">
                    <p class="text-white mb-0 fw-bold animate">
                        <?php if ($lang == 'sr'): ?>
                            <?= $srFooterContent["firm_name"] ?>
                        <?php elseif ($lang == 'en'): ?>
                            <?= $enFooterContent["firm_name"] ?>
                        <?php endif; ?>
                    </p>

                    <p class="text-white mb-0 animate">
                        <?php if ($lang == 'sr'): ?>
                            <?= $srFooterContent["address"] ?>
                        <?php elseif ($lang == 'en'): ?>
                            <?= $enFooterContent["address"] ?>
                        <?php endif; ?>
                    </p>

                    <p class="text-white mb-0 animate">
                        <?php if ($lang == 'sr'): ?>
                            <?= $srFooterContent["city"] ?>
                        <?php elseif ($lang == 'en'): ?>
                            <?= $enFooterContent["city"] ?>
                        <?php endif; ?>
                    </p>

                    <a href="mailto:kontakt@sanmarcopo.com" class="email-address animate text-white mb-0">
                        <?php if ($lang == 'sr'): ?>
                            <?= $srFooterContent["email_address"] ?>
                        <?php elseif ($lang == 'en'): ?>
                            <?= $enFooterContent["email_address"] ?>
                        <?php endif; ?>
                    </a>
                </div>
            </div>

            <div class="col-6 text-end">
                <img src="assets/san-marco-logo.avif" alt="logo" class="img-fluid">
            </div>
        </div>

        <div class="application-rights animate mb-3">
            <p class="text-white mb-0">
                <?php if ($lang == 'sr'): ?>
                    <?= $srFooterContent["app_rights"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enFooterContent["app_rights"] ?>
                <?php endif; ?>
            </p>
        </div>
    </div>

    <div class="social-links text-center">
        <a href="https://www.instagram.com/san_marco_plus/?hl=en" target="_blank">
            <img src="assets/instagram-logo.avif" alt="instagram-logo" class="social-link-logo animate me-3">
        </a>

        <a href="https://www.facebook.com/sanmarcopozarevac/" target="_blank">
            <img src="assets/facebook-logo.avif" alt="facebook-logo" class="social-link-logo animate">
        </a>
    </div>
</footer>