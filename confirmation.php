<?php
$page_title = "Order Confirmation - Cafe Serendipity";
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Content -->
<div id="content">

    <!-- Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <span class="icon icon-xl icon-success mb-4"><i class="ti ti-check-box"></i></span>
                    <h1 class="mb-2">Thank you for your order!</h1>
                    <h4 class="text-muted mb-4">Your order has been received and is being prepared.</h4>

                    

                    <!-- Action Buttons -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a href="menu-grid-collapse.php" class="btn btn-primary btn-block">
                                <i class="ti ti-home mr-2"></i>Back to Menu
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Content / End -->

<?php
include 'includes/modals.php';
include 'includes/footer.php';
?>