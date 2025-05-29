<?php
// page-faq.php - Refactored version
$page_title = "FAQ - Cafe Serendipity";

// Include header and navigation
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Content -->
<div id="content">
    
    <!-- Page Title -->
    <div class="page-title bg-light">
        <div class="bg-image bg-parallax"><img src="assets/img/photos/bg-desk.jpg" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <h1 class="mb-0">FAQ</h1>
                    <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Side Navigation -->
                    <nav id="side-navigation" class="stick-to-content pt-4" data-local-scroll>
                        <h5 class="mb-3"><i class="ti ti-align-justify mr-3 text-muted"></i>Pick a content:</h5>
                        <ul class="nav nav-vertical">
                            <li class="nav-item">
                                <a href="#faq1" class="nav-link">General</a>
                                <ul>
                                    <li class="nav-item"><a href="#faq1_1" class="nav-link">How does it work?</a></li>
                                    <li class="nav-item"><a href="#faq1_2" class="nav-link">How long does it take?</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#faq2" class="nav-link">Delivery</a>
                                <ul>
                                    <li class="nav-item"><a href="#faq2_1" class="nav-link">How does it work?</a></li>
                                    <li class="nav-item"><a href="#faq2_2" class="nav-link">How long does it take?</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#faq3" class="nav-link">Payments</a>
                                <ul>
                                    <li class="nav-item"><a href="#faq3_1" class="nav-link">How does it work?</a></li>
                                    <li class="nav-item"><a href="#faq3_2" class="nav-link">How long does it take?</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 offset-md-1">
                    <div id="faq1">
                        <h3><i class="ti ti-file mr-4 text-primary"></i>General info</h3>
                        <hr>
                        <div id="faq1_1" class="pb-5">
                            <h4>How does online ordering work?</h4>
                            <p class="lead">Our online ordering system makes it easy to enjoy Cafe Serendipity's delicious food from the comfort of your home.</p>
                            <p>Simply browse our menu, select your favorite dishes, customize them to your liking, and add them to your cart. You can specify any special instructions and choose your preferred delivery time. Payment is secure and processed online for your convenience.</p>
                        </div>
                        <div id="faq1_2" class="pb-5">
                            <h4>What are your operating hours?</h4>
                            <p class="lead">Cafe Serendipity is open daily to serve you fresh, delicious meals.</p>
                            <p>We're open Monday to Thursday from 10:00 AM to 10:00 PM, Friday to Saturday from 10:00 AM to 11:00 PM, and Sunday from 11:00 AM to 9:00 PM. Our online ordering system is available 24/7, but orders are processed during operating hours only.</p>
                        </div>
                    </div>
                    <div id="faq2">
                        <h3><i class="ti ti-package mr-4 text-primary"></i>Delivery</h3>
                        <hr>
                        <div id="faq2_1" class="pb-5">
                            <h4>How does delivery work?</h4>
                            <p class="lead">We offer reliable delivery service throughout Jakarta Selatan and surrounding areas.</p>
                            <p>Our delivery team ensures your food arrives fresh and hot. You can track your order status through our system and receive notifications when your food is being prepared and when it's on the way. We use insulated bags to maintain food quality during transport.</p>
                        </div>
                        <div id="faq2_2" class="pb-5">
                            <h4>How long does delivery take?</h4>
                            <p class="lead">Typical delivery time is 30-45 minutes, depending on your location and order complexity.</p>
                            <p>During peak hours (lunch and dinner), delivery may take up to 60 minutes. We always provide an estimated delivery time when you place your order. For faster service, consider ordering during off-peak hours.</p>
                        </div>
                    </div>
                    <div id="faq3">
                        <h3><i class="ti ti-wallet mr-4 text-primary"></i>Payments</h3>
                        <hr>
                        <div id="faq3_1" class="pb-5">
                            <h4>What payment methods do you accept?</h4>
                            <p class="lead">We accept various payment methods for your convenience, including cash and digital payments.</p>
                            <p>You can pay with cash on delivery, bank transfer, GoPay, OVO, DANA, or credit/debit cards. All online payments are processed securely through our trusted payment gateway. Delivery fee varies by location and will be calculated at checkout.</p>
                        </div>
                        <div id="faq3_2" class="pb-5">
                            <h4>Is there a minimum order amount?</h4>
                            <p class="lead">Yes, we have a minimum order requirement for delivery to ensure service efficiency.</p>
                            <p>The minimum order amount is Rp 50,000 for delivery within Jakarta Selatan. For areas outside our primary delivery zone, the minimum may be higher. There's no minimum order requirement for pickup orders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Content / End -->

<?php
// Include modals and footer
include 'includes/modals.php';
include 'includes/footer.php';
?>