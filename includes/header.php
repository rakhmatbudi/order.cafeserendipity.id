<?php

// includes/header.php

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Meta -->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <!-- Title -->

    <title><?php echo isset($page_title) ? $page_title : 'Cafe Serendipity - Restaurant'; ?></title>



    <!-- Favicons -->

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">

    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">

    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">



    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Raleway:wght@100;200;400;500&display=swap" rel="stylesheet">



    <!-- CSS Core -->

    <link rel="stylesheet" href="dist/css/core.css" />



    <!-- CSS Theme -->

    <link id="theme" rel="stylesheet" href="dist/css/theme-beige.css" />
    <style>
        /* Performance optimizations - no visual changes */
        .menu-category img,
        .menu-item img {
            max-width: 100%;
            height: auto;
        }
        
        /* Mobile optimization */
        @media (max-width: 768px) {
            /* Limit image sizes to reduce memory usage */
            .menu-category .bg-image img {
                max-height: 140px;
                object-fit: cover;
            }
            
            .menu-item img {
                max-height: 180px;
                object-fit: cover;
            }
            
            /* Reduce padding slightly on mobile for better performance */
            .menu-category-content .p-4 {
                padding: 0.75rem !important;
            }
            
            .menu-item.menu-grid-item {
                margin-bottom: 0.75rem;
            }
        }
        
        /* Optimize for slower connections */
        @media (max-width: 480px) {
            .menu-category .bg-image img {
                max-height: 120px;
            }
            
            .menu-item img {
                max-height: 160px;
            }
        }
    </style>
    
    <?php if (isset($menu_data) && !empty($menu_data)): ?>
    <?php 
        // Preload first category images for faster initial load
        $first_category = reset($menu_data);
        ?>
        <link rel="preload" as="image" href="<?php echo htmlspecialchars($first_category['image']); ?>">
        <?php if (!empty($first_category['items'])): ?>
            <link rel="preload" as="image" href="<?php echo htmlspecialchars($first_category['items'][0]['image']); ?>">
        <?php endif; ?>
    <?php endif; ?>
</head>

<body>



<!-- Body Wrapper -->

<div id="body-wrapper" class="animsition">