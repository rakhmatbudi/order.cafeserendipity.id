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

    <title><?php echo isset($page_title) ? $page_title : 'Serendipity Ordering System'; ?></title>



    <!-- Favicons -->

    <link rel="shortcut icon" href="assets/img/logo-symbol.svg">

    <link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">

    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">

    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">



    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Raleway:wght@100;200;400;500&display=swap" rel="stylesheet">



    <!-- CSS Core -->

    <!-- Load CSS asynchronously to prevent blocking -->
    <link rel="preload" href="dist/css/bootstrap.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="dist/css/bootstrap.css"></noscript>
    
    <link rel="preload" href="dist/css/animsition.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="dist/css/animsition.css"></noscript>
    
    <link rel="preload" href="dist/css/font-awesome.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="dist/css/font-awesome.css"></noscript>
    
    <!-- Critical CSS inline for immediate rendering -->
    <style>
    /* Inline critical CSS for instant loading */
    body {
        font-family: 'Raleway', sans-serif;
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .row {
        display: flex;
        flex-wrap: wrap;
    }
    
    .col-6 { width: 50%; }
    .col-md-4 { width: 33.333%; }
    .col-lg-4 { width: 33.333%; }
    
    @media (max-width: 768px) {
        .col-md-4 { width: 50%; }
        .col-lg-4 { width: 50%; }
    }
    
    /* Menu essentials */
    .menu-category {
        margin-bottom: 1rem;
    }
    
    .menu-item {
        padding: 1rem;
        text-align: center;
    }
    
    .menu-item img {
        max-width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: cover;
    }
    
    /* Loading state */
    .page-loading {
        opacity: 0.5;
    }
    </style>



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