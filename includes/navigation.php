<?php
// includes/navigation.php
?>
<!-- Header -->
<header id="header" class="light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Logo -->
                <div class="module module-logo dark">
                    <a href="index.html">
                        <img src="assets/img/logo-light.svg" alt="" width="88">
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Navigation -->
                <nav class="module module-navigation left mr-4">
                    <ul id="nav-main" class="nav nav-main">
                        <li><a href="menu-grid-collapse.php">Menu</a></li>
                        <li><a href="page-faq">FAQ</a></li>
                        <li><a href="page-about.html">About Us</a></li>
                        <li><a href="page-offers.html">Offers</a></li>
                    </ul>
                </nav>
                <div class="module left">
                    <a href="menu-list-navigation.html" class="btn btn-outline-secondary"><span>Order</span></a>
                </div>
            </div>
            <div class="col-md-2">
                <a href="#" class="module module-cart right" data-toggle="panel-cart">
                    <span class="cart-icon">
                        <i class="ti ti-shopping-cart"></i>
                        <span class="notification">0</span>
                    </span>
                    <span class="cart-value">$<span class="value">0.00</span></span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Header -->
<header id="header-mobile" class="light">
    <div class="module module-nav-toggle">
        <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
    </div>
    <div class="module module-logo" style="display: flex; align-items: center; justify-content: center; height: 60px;">
        <h4 style="font-weight: bold; margin: 0;">Cafe Serendipity</h4>
    </div>
    <a href="#" class="module module-cart" data-toggle="panel-cart">
        <i class="ti ti-shopping-cart"></i>
        <span class="notification">0</span>
    </a>
</header>