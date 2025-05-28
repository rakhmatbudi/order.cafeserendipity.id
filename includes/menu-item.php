<?php
// includes/menu-item.php
// Usage: include with variables: $item_image, $item_name, $item_description, $item_price, $item_id

function renderMenuItem($item_image, $item_name, $item_description, $item_price, $item_id) {
?>
<div class="col-lg-4 col-6">
    <!-- Menu Item -->
    <div class="menu-item menu-grid-item">
        <img class="mb-4" src="<?php echo htmlspecialchars($item_image); ?>" alt="<?php echo htmlspecialchars($item_name); ?>" loading="lazy">
        <h6 class="mb-0"><?php echo htmlspecialchars($item_name); ?></h6>
        <span class="text-muted text-sm"><?php echo htmlspecialchars($item_description); ?></span>
        <div class="row align-items-center mt-4">
            <div class="col-sm-6">
                <span class="text-md mr-4">
                    <span class="text-muted">from</span> $<span data-product-base-price><?php echo number_format($item_price, 2); ?></span>
                </span>
            </div>
            <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                <button class="btn btn-outline-secondary btn-sm" data-action="open-cart-modal" data-id="<?php echo intval($item_id); ?>">
                    <span>Add to cart</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php
}
?>