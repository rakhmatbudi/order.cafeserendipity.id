<?php
// ajax/load-menu-items.php
// Create this file in an 'ajax' directory

// Prevent direct access
if (!isset($_POST['items'])) {
    http_response_code(400);
    exit('Bad Request');
}

// Include necessary files
require_once '../includes/menu-item.php';

// Get items data
$items_json = $_POST['items'];
$menu_items = json_decode($items_json, true);

if (!is_array($menu_items)) {
    http_response_code(400);
    exit('Invalid data');
}

// Render menu items
echo '<div class="p-4"><div class="row gutters-sm">';
foreach ($menu_items as $item) {
    renderMenuItem(
        $item['image'], 
        $item['name'], 
        $item['description'], 
        $item['price'], 
        $item['id']
    );
}
echo '</div></div>';
?>