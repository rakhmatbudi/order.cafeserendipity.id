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
                    
                    <!-- Order Details -->
                    <div class="bg-white p-4 p-md-5 mb-4 shadow-sm rounded">
                        <h5 class="mb-4"><i class="ti ti-receipt mr-2 text-primary"></i>Order Summary</h5>
                        <div class="row text-left">
                            <div class="col-md-6">
                                <p><strong>Order Number:</strong> #CS-<?php echo date('Ymd') . rand(1000, 9999); ?></p>
                                <p><strong>Order Date:</strong> <?php echo date('F j, Y - g:i A'); ?></p>
                                <p><strong>Payment Method:</strong> Cash on Delivery</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Estimated Delivery:</strong> 30-45 minutes</p>
                                <p><strong>Status:</strong> <span class="badge badge-warning">Preparing</span></p>
                                <p><strong>Total Amount:</strong> <strong class="text-success">$13.92</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Information -->
                    <div class="bg-white p-4 p-md-5 mb-4 shadow-sm rounded">
                        <h5 class="mb-4"><i class="ti ti-truck mr-2 text-primary"></i>Delivery Information</h5>
                        <div class="row text-left">
                            <div class="col-md-6">
                                <p><strong>Delivery Address:</strong><br>
                                Jalan Kebon Jeruk No. 15<br>
                                Jakarta Barat, DKI Jakarta</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Contact:</strong><br>
                                John Doe<br>
                                +62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>

                    <!-- What's Next -->
                    <div class="bg-white p-4 p-md-5 mb-5 shadow-sm rounded">
                        <h5 class="mb-4"><i class="ti ti-info mr-2 text-primary"></i>What happens next?</h5>
                        <div class="row text-left">
                            <div class="col-md-4 mb-3">
                                <div class="text-center mb-2">
                                    <span class="icon icon-md icon-primary"><i class="ti ti-receipt"></i></span>
                                </div>
                                <h6>Order Confirmed</h6>
                                <p class="text-muted small">We've received your order and started preparing your delicious meal.</p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center mb-2">
                                    <span class="icon icon-md icon-warning"><i class="ti ti-chef-hat"></i></span>
                                </div>
                                <h6>Preparing</h6>
                                <p class="text-muted small">Our chefs are carefully preparing your order with fresh ingredients.</p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center mb-2">
                                    <span class="icon icon-md icon-secondary"><i class="ti ti-truck"></i></span>
                                </div>
                                <h6>On the Way</h6>
                                <p class="text-muted small">Your order will be delivered fresh and hot to your doorstep.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a href="menu-grid-collapse.php" class="btn btn-outline-secondary btn-block">
                                <i class="ti ti-arrow-left mr-2"></i>Order Again
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="index.php" class="btn btn-primary btn-block">
                                <i class="ti ti-home mr-2"></i>Back to Home
                            </a>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="mt-4 pt-4 border-top">
                        <p class="text-muted">
                            Questions about your order? 
                            <a href="tel:+62821234567890" class="text-primary">Call us at +62 821-2345-6789</a> 
                            or <a href="mailto:info@cafeserendipity.com" class="text-primary">send us an email</a>
                        </p>
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