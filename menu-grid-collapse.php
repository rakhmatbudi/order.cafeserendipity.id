<?php
// menu-grid-collapse.php - New refactored version
$page_title = "Menu Grid - Cafe Serendipity";
// Load menu data
$menu_data = include 'data/menu-data.php';
// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>
<!-- Content -->
<div id="content">
    <!-- Page Title -->
    <div class="page-title bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <h1 class="mb-0">Menu Grid</h1>
                    <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-10 offset-md-1" role="tablist">
                    <?php
                    // Include menu category component
                    include 'includes/menu-category.php';

                    // Render each menu category
                    $first_category = true;
                    foreach ($menu_data as $category_id => $category) {
                        renderMenuCategory(
                            $category_id,
                            $category['name'],
                            $category['image'],
                            $category['items'],
                            $first_category // First category is open by default
                        );
                        $first_category = false;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content / End -->
<?php
// Include modals and footer
include 'includes/modals.php';
include 'includes/footer.php';
?>