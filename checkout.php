<?php
$page_title = "Checkout - Cafe Serendipity";
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Content -->
<div id="content">

    <!-- Page Title -->
    <div class="page-title bg-dark dark">
        <!-- BG Image -->
        <div class="bg-image bg-parallax"><img src="assets/img/static/bg-croissant.jpg" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <h1 class="mb-0">Checkout</h1>
                    <h4 class="text-muted mb-0">Complete your order</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="cart-details shadow bg-white stick-to-content mb-4">
                        <div class="bg-dark dark p-4"><h5 class="mb-0">Your Order</h5></div>
                        <table class="cart-table">
                            <tr>
                                <td class="title">
                                    <span class="name"><a href="#product-modal" data-toggle="modal">Pizza Chicken BBQ</a></span>
                                    <span class="caption text-muted">26", deep-pan, thin-crust</span>
                                </td>
                                <td class="price">$9.82</td>
                                <td class="actions">
                                    <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <span class="name"><a href="#product-modal" data-toggle="modal">Beef Burger</a></span>
                                    <span class="caption text-muted">Large (500g)</span>
                                </td>
                                <td class="price">$9.82</td>
                                <td class="actions">
                                    <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <span class="name"><a href="#product-modal" data-toggle="modal">Extra Burger</a></span>
                                    <span class="caption text-muted">Small (200g)</span>
                                </td>
                                <td class="price text-success">$0.00</td>
                                <td class="actions">
                                    <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <span class="name">Weekend 20% OFF</span>
                                </td>
                                <td class="price text-success">-$8.22</td>
                                <td class="actions"></td>
                            </tr>
                        </table>
                        <div class="cart-summary">
                            <div class="row">
                                <div class="col-7 text-right text-muted">Order total:</div>
                                <div class="col-5"><strong>$<span class="cart-products-total">11.42</span></strong></div>
                            </div>
                            <div class="row">
                                <div class="col-7 text-right text-muted">Delivery:</div>
                                <div class="col-5"><strong>$<span class="cart-delivery">2.50</span></strong></div>
                            </div>
                            <hr class="hr-sm">
                            <div class="row text-lg">
                                <div class="col-7 text-right text-muted">Total:</div>
                                <div class="col-5"><strong>$<span class="cart-total">13.92</span></strong></div>
                            </div>
                        </div>
                        <div class="cart-empty" style="display: none;">
                            <i class="ti ti-shopping-cart"></i>
                            <p>Your cart is empty...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 order-lg-first">
                    <div class="bg-white p-4 p-md-5 mb-4">
                        <h4 class="border-bottom pb-4"><i class="ti ti-wallet mr-3 text-primary"></i>Payment Method</h4>
                        <form id="checkout-form" method="POST" action="process-checkout.php">
                            <div class="row text-lg">
                                <div class="col-md-4 col-sm-6 form-group">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="payment_type" value="paypal" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">PayPal</span>
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-6 form-group">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="payment_type" value="credit_card" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Credit Card</span>
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-6 form-group">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="payment_type" value="cash" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cash on Delivery</span>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Customer Information -->
                            <div class="mt-4">
                                <h5 class="border-bottom pb-3"><i class="ti ti-user mr-3 text-primary"></i>Customer Information</h5>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="customer_name">Full Name *</label>
                                        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="customer_phone">Phone Number *</label>
                                        <input type="tel" class="form-control" id="customer_phone" name="customer_phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customer_address">Delivery Address *</label>
                                    <textarea class="form-control" id="customer_address" name="customer_address" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="order_notes">Order Notes (Optional)</label>
                                    <textarea class="form-control" id="order_notes" name="order_notes" rows="2" placeholder="Special instructions for your order..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <button type="submit" form="checkout-form" class="btn btn-primary btn-lg">
                            <span>Place Order</span>
                        </button>
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