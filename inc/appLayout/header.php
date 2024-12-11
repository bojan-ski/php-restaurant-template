<?php
include './data/sr/srHeader.php';
include './data/en/enHeader.php';
?>

<header class="header" id="header">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="header-logo">
            <img src="assets/san-marco-logo.avif" alt="logo" class="img-fluid" style="height: 120px;">
        </div>

        <div class="nav-options">
            <a
                href="/"
                class="nav-option nav-option-one fst-italic me-0 me-md-3 me-lg-5 <?= $currentUrl == '/' ? 'active' : '' ?>">
                <?php if ($lang == 'sr'): ?>
                    <?= $srHeaderContent["nav_option_one"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enHeaderContent["nav_option_one"] ?>
                <?php endif; ?>
            </a>
            <a
                href="menu.php"
                class="nav-option nav-option-two fst-italic <?= $currentUrl != '/' ? 'active' : '' ?>">
                <?php if ($lang == 'sr'): ?>
                    <?= $srHeaderContent["nav_option_two"] ?>
                <?php elseif ($lang == 'en'): ?>
                    <?= $enHeaderContent["nav_option_two"] ?>
                <?php endif; ?>
            </a>
        </div>

        <div class="custom-dropdown">
            <div class="selected-option" onclick="toggleDropdown()">
                <img src="assets/flags/<?= $lang; ?>_flag.png" alt="<?= $lang; ?>-flag" class="flag">
            </div>
            <div class="dropdown-options">
                <div class="option" data-value="sr" onclick="selectOption(this)">
                    <img src="assets/flags/sr_flag.png" alt="sr-flag" class="flag">
                </div>
                <div class="option" data-value="en" onclick="selectOption(this)">
                    <img src="assets/flags/en_flag.png" alt="en-flag" class="flag">
                </div>
            </div>
        </div>

        <div class="mobile-nav-options">
            <div class="navigation">
                <input type="checkbox" class="navigation-checkbox" id="nav-toggle">

                <label for="nav-toggle" class="navigation-button">
                    <span class="navigation-icon">
                        &nbsp;
                    </span>
                </label>

                <div class="navigation-background">
                    &nbsp;
                </div>

                <nav class="navigation-nav">
                    <ul class="navigation-list">
                        <li class="navigation-item">
                            <a href="/" class="navigation-link <?= $currentUrl == '/' ? 'active' : '' ?>">
                                <?php if ($lang == 'sr'): ?>
                                    <?= $srHeaderContent["nav_option_one"] ?>
                                <?php elseif ($lang == 'en'): ?>
                                    <?= $enHeaderContent["nav_option_one"] ?>
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="navigation-item">
                            <a href="menu.php" class="navigation-link <?= $currentUrl != '/' ? 'active' : '' ?>">
                                <?php if ($lang == 'sr'): ?>
                                    <?= $srHeaderContent["nav_option_two"] ?>
                                <?php elseif ($lang == 'en'): ?>
                                    <?= $enHeaderContent["nav_option_two"] ?>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>