<?php
// includes/modals.php
?>
<div id="panel-cart">
    <div class="panel-cart-container">
        <div class="panel-cart-title">
            <h5 class="title">Your Cart</h5>
            <button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
        </div>
        <div class="panel-cart-content cart-details">
            <table class="cart-table">
                <tr>
                    <td class="title">
                        <span class="name"><a href="#product-modal" data-toggle="modal">Beef Burger</a></span>
                        <span class="caption text-muted">Large (500g)</span>
                    </td>
                    <td class="price">$9.00</td>
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
                    <td class="price text-success">$9.00</td>
                    <td class="actions">
                        <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                        <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                    </td>
                </tr>
            </table>
            <div class="cart-summary">
                <div class="row">
                    <div class="col-7 text-right text-muted">Order total:</div>
                    <div class="col-5"><strong>$<span class="cart-products-total">0.00</span></strong></div>
                </div>
                <div class="row">
                    <div class="col-7 text-right text-muted">Delivery:</div>
                    <div class="col-5"><strong>$<span class="cart-delivery">0.00</span></strong></div>
                </div>
                <hr class="hr-sm">
                <div class="row text-lg">
                    <div class="col-7 text-right text-muted">Total:</div>
                    <div class="col-5"><strong>$<span class="cart-total">0.00</span></strong></div>
                </div>
            </div>
            <div class="cart-empty">
                <i class="ti ti-shopping-cart"></i>
                <p>Your cart is empty...</p>
            </div>
        </div>
    </div>
    <a href="checkout.php" class="panel-cart-action btn btn-secondary btn-block btn-lg"><span>Go to checkout</span></a>
</div>

<nav id="panel-mobile">
    <div class="module module-logo bg-dark dark">
        <a href="#">
            <img src="assets/img/logo-light.svg" alt="" width="88">
        </a>
        <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
    </div>
    <nav class="module module-navigation"></nav>
    <div class="module module-social">
        <h6 class="text-sm mb-3">Follow Us!</h6>
        <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
        <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
        <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
    </div>
</nav>

<div id="body-overlay"></div>

<div class="modal fade product-modal" id="product-modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-lg dark bg-dark">
                <div class="bg-image"><img src="assets/img/static/modal-add.jpg" alt=""></div>
                <h4 class="modal-title">Specify your dish</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></button>
            </div>
            <div class="modal-product-details">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h6 class="mb-1 product-modal-name">Boscaiola Pasta</h6>
                        <span class="text-muted product-modal-ingredients">Pasta, Cheese, Tomatoes, Olives</span>
                    </div>
                    <div class="col-3 text-lg text-right">$<span class="product-modal-price"></span></div>
                </div>
            </div>
            <div class="modal-body panel-details-container">
                <div class="panel-details panel-details-size">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_size" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panel-details-sizes-list" data-toggle="collapse">Size</a>
                    </h5>
                    <div id="panel-details-sizes-list" class="collapse show">
                        <div class="panel-details-content">
                            <div class="product-modal-sizes">
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Small - 100g ($9.99)</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Medium - 200g ($14.99)</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Large - 350g ($21.99)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-details panel-details-additions">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_additions" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panel-details-additions-content" data-toggle="collapse">Additions</a>
                    </h5>
                    <div id="panel-details-additions-content" class="collapse">
                        <div class="panel-details-content">
                            <div class="row product-modal-additions">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Tomato ($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Ham ($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Chicken ($1.29)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Cheese($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Bacon ($1.29)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-details panel-details-form">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_other" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panel-details-other" data-toggle="collapse">Other</a>
                    </h5>
                    <div id="panel-details-other" class="collapse">
                        <form action="#">
                            <textarea cols="30" rows="4" class="form-control" placeholder="Put this any other informations..."></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="add-to-cart"><span>Add to Cart</span></button>
            <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="update-cart"><span>Update</span></button>
        </div>
    </div>
</div>