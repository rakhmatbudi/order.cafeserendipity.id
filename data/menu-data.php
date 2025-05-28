<?php
// data/menu-data.php
// Menu data configuration

return [
    'Burgers' => [
        'name' => 'Burgers',
        'image' => 'assets/img/static/menu-title-burgers.jpg',
        'items' => [
            [
                'id' => 1,
                'name' => 'Beef Burger',
                'description' => 'Beef, cheese, potato, onion, fries',
                'image' => 'assets/img/static/product-burger.jpg',
                'price' => 9.00
            ],
            [
                'id' => 2,
                'name' => 'Broccoli',
                'description' => 'Beef, cheese, potato, onion, fries',
                'image' => 'assets/img/static/product-pizza.jpg',
                'price' => 9.00
            ],
            [
                'id' => 3,
                'name' => 'Chicken Burger',
                'description' => 'Beef, cheese, potato, onion, fries',
                'image' => 'assets/img/static/product-chicken-burger.jpg',
                'price' => 9.00
            ],
            [
                'id' => 4,
                'name' => 'Creste di Galli',
                'description' => 'Beef, cheese, potato, onion, fries',
                'image' => 'assets/img/static/product-pasta.jpg',
                'price' => 13.00
            ],
            [
                'id' => 5,
                'name' => 'Chicken wings',
                'description' => 'Beef, cheese, potato, onion, fries',
                'image' => 'assets/img/static/product-chicken-wings.jpg',
                'price' => 13.00
            ],
            [
                'id' => 6,
                'name' => 'Nigiri-sushi',
                'description' => 'Beef, cheese, potato, onion, fries',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 13.00
            ]
        ]
    ],
    'Pasta' => [
        'name' => 'Pasta',
        'image' => 'assets/img/static/menu-title-pasta.jpg',
        'items' => [
            [
                'id' => 7,
                'name' => 'Spaghetti Carbonara',
                'description' => 'Pasta, eggs, cheese, bacon, black pepper',
                'image' => 'assets/img/static/product-pasta.jpg',
                'price' => 12.00
            ],
            [
                'id' => 8,
                'name' => 'Penne Arrabbiata',
                'description' => 'Pasta, tomatoes, garlic, chili, herbs',
                'image' => 'assets/img/static/product-pasta.jpg',
                'price' => 11.00
            ]
        ]
    ],
    'Pizza' => [
        'name' => 'Pizza',
        'image' => 'assets/img/static/menu-title-pizza.jpg',
        'items' => [
            [
                'id' => 9,
                'name' => 'Margherita',
                'description' => 'Tomato, mozzarella, basil, olive oil',
                'image' => 'assets/img/static/product-pizza.jpg',
                'price' => 14.00
            ],
            [
                'id' => 10,
                'name' => 'Pepperoni',
                'description' => 'Tomato, mozzarella, pepperoni, oregano',
                'image' => 'assets/img/static/product-pizza.jpg',
                'price' => 16.00
            ]
        ]
    ],
    'Sushi' => [
        'name' => 'Sushi',
        'image' => 'assets/img/static/menu-title-sushi.jpg',
        'items' => [
            [
                'id' => 11,
                'name' => 'Salmon Roll',
                'description' => 'Fresh salmon, rice, nori, wasabi',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 18.00
            ],
            [
                'id' => 12,
                'name' => 'Tuna Nigiri',
                'description' => 'Fresh tuna, sushi rice, ginger',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 15.00
            ]
        ]
    ],
    'Desserts' => [
        'name' => 'Desserts',
        'image' => 'assets/img/static/menu-title-desserts.jpg',
        'items' => [
            [
                'id' => 13,
                'name' => 'Chocolate Cake',
                'description' => 'Rich chocolate, cream, berries',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 8.00
            ],
            [
                'id' => 14,
                'name' => 'Tiramisu',
                'description' => 'Coffee, mascarpone, cocoa, ladyfingers',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 9.00
            ]
        ]
    ],
    'Drinks' => [
        'name' => 'Drinks',
        'image' => 'assets/img/static/menu-title-drinks.jpg',
        'items' => [
            [
                'id' => 15,
                'name' => 'Fresh Orange Juice',
                'description' => 'Freshly squeezed orange juice',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 5.00
            ],
            [
                'id' => 16,
                'name' => 'Coffee',
                'description' => 'Premium arabica coffee beans',
                'image' => 'assets/img/static/product-sushi.jpg',
                'price' => 4.00
            ]
        ]
    ]
];
?>