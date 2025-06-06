<?php

// menu-grid-collapse.php - New refactored version

$page_title = "Serendipity Ordering System";

// Load menu data

$menu_data = include 'data/menu-data.php';

// Include header

include 'includes/header.php';

include 'includes/navigation.php';

?>

<!-- Content -->

<div id="content">

    

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