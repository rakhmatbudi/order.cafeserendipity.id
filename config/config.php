<?php
// config/config.php
// Main configuration file

// Site configuration
define('SITE_NAME', 'Cafe Serendipity');
define('SITE_URL', 'http://localhost/cafe-serendipity');
define('ASSETS_URL', 'assets/');

// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_NAME', 'cafe_serendipity');
define('DB_USER', 'root');
define('DB_PASS', '');

// Email configuration
define('MAILCHIMP_ACTION', '//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&id=24ac8a22ad');

// Theme settings
define('DEFAULT_THEME', 'theme-beige');
define('LOGO_LIGHT', 'assets/img/logo-light.svg');
define('LOGO_DARK', 'assets/img/logo-dark.svg');

// Navigation menu items
$navigation_menu = [
    'Home' => [
        'url' => '#',
        'dropdown' => [
            'Home Basic' => 'index.html',
            'Home Burgers' => 'index-burgers.html',
            'Home Fullwidth Slider' => 'index-slider.html',
            'Home Video' => 'index-video.html',
            'Home Fresh' => 'index-fresh.html',
            'Home Dark' => 'index-dark.html'
        ]
    ],
    'About' => [
        'url' => '#',
        'dropdown' => [
            'About Us' => 'page-about.html',
            'Services' => 'page-services.html',
            'Gallery' => 'page-gallery.html',
            'Reviews' => 'page-reviews.html',
            'FAQ' => 'page-faq.html'
        ]
    ],
    'Menu' => [
        'url' => '#',
        'dropdown' => [
            'List' => [
                'Navigation' => 'menu-list-navigation.html',
                'Collapse' => 'menu-list-collapse.html'
            ],
            'Grid' => [
                'Navigation' => 'menu-grid-navigation.html',
                'Collapse' => 'menu-grid-collapse.html'
            ]
        ]
    ],
    'Offers' => 'page-offers.html',
    'Contact' => 'page-contact.html',
    'More' => [
        'url' => '#',
        'dropdown' => [
            'Offer single' => 'page-offer-single.html',
            'Product' => 'page-product.html',
            'Book a table' => 'book-a-table.html',
            'Checkout' => 'checkout.html',
            'Confirmation' => 'confirmation.html',
            'Blog' => 'blog.html',
            'Blog + Sidebar' => 'blog-sidebar.html',
            'Blog Post' => 'blog-post.html',
            'Documentation' => 'documentation/'
        ]
    ]
];

// Social media links
$social_links = [
    'facebook' => '#',
    'google' => '#',
    'twitter' => '#',
    'youtube' => '#',
    'instagram' => '#'
];

// Footer news items
$footer_news = [
    [
        'title' => 'How to create effective webdesign?',
        'date' => 'February 14, 2015',
        'url' => 'blog-post.html'
    ],
    [
        'title' => 'Awesome weekend in Polish mountains!',
        'date' => 'February 14, 2015',
        'url' => 'blog-post.html'
    ],
    [
        'title' => 'How to create effective webdesign?',
        'date' => 'February 14, 2015',
        'url' => 'blog-post.html'
    ]
];
?>