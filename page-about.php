<?php
// page-about.php - Refactored version
$page_title = "About Us - Cafe Serendipity";

// Include header and navigation
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Content -->
<div id="content">

    <!-- Page Title -->
    <div class="page-title border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <h1 class="mb-0">About Us</h1>
                    <h4 class="text-muted mb-0">Learn more about Cafe Serendipity</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Section -->
    <section class="section section-bg-edge">
        <div class="image left bottom col-md-7">
            <div class="bg-image"><img src="assets/img/photos/bg-chef.jpg" alt="Our Chef"></div>
        </div>

        <div class="container">
            <div class="col-lg-5 offset-lg-5 col-md-9 offset-md-3">
                <div class="rate mb-5 rate-lg">
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                </div>
                <h2>The best food in Jakarta!</h2>
                <p class="lead">Welcome to Cafe Serendipity, where every meal is a delightful discovery. Located in the heart of Jagakarsa, Jakarta Selatan, we've been serving our community with passion and dedication.</p>
                <p>Our story began with a simple vision: to create a place where friends and families can come together to enjoy exceptional food in a warm, welcoming atmosphere. We source the freshest ingredients locally and prepare each dish with care and attention to detail. From our signature burgers to authentic pasta dishes, every item on our menu is crafted to bring you joy and satisfaction.</p>
                <p>At Cafe Serendipity, we believe that great food brings people together. Our team of experienced chefs combines traditional techniques with modern flavors to create memorable dining experiences. Whether you're joining us for a casual lunch, romantic dinner, or ordering for delivery, we're committed to exceeding your expectations.</p>
                <h6>Made with love by our kitchen team</h6>
                <img src="assets/img/svg/sign.svg" alt="Signature" class="mb-5">
                <h4>What people say about Us?</h4>
                <a href="page-reviews.php" class="btn btn-outline-primary"><span>Check our reviews</span></a>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="section section-lg dark bg-dark">
        <!-- BG Image -->
        <div class="bg-image bg-parallax"><img src="assets/img/photos/bg-croissant.jpg" alt="Background"></div>

        <div class="container text-center">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-3">Would you like to visit Us?</h2>
                <h5 class="text-muted">Order online for delivery or come dine with us at our cozy location in Jagakarsa!</h5>
                <a href="menu-grid-collapse.php" class="btn btn-primary"><span>Order Online</span></a>
                <a href="page-contact.php" class="btn btn-outline-primary"><span>Visit Us</span></a>
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