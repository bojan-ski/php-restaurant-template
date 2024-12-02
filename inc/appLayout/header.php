<header class="header" id="header">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- item 1 -->
        <div class="header-logo">
            <img src="assets/san-marco-logo.avif" alt="logo" class="img-fluid" style="height: 120px;">
        </div>

        <!-- item 2 -->
        <div class="nav-options">
            <a
                href="index.php"
                class="nav-option nav-option-one fst-italic me-0 me-md-3 me-lg-5 <?= $current_url == '/index.php' ? 'active' : '' ?>">
                Početna
            </a>
            <a
                href="menu.php"
                class="nav-option nav-option-two fst-italic <?= $current_url == '/menu.php' ? 'active' : '' ?>">
                Meni
            </a>
        </div>

        <!-- item 3 -->
        <div class="custom-dropdown">
            <div class="selected-option" onclick="toggleDropdown()">
                <img src="/assets/flags/srb_flag.png" alt="srb-flag" class="flag">
            </div>
            <div class="dropdown-options">
                <div class="option" data-value="srb" onclick="selectOption(this)">
                    <img src="/assets/flags/srb_flag.png" alt="srb-flag" class="flag">
                </div>
                <div class="option" data-value="eng" onclick="selectOption(this)">
                    <img src="/assets/flags/gbr_flag.png" alt="gbr-flag" class="flag">
                </div>
            </div>
        </div>
    </div>
</header>