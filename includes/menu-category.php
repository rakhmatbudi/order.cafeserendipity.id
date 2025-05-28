<?php
// includes/menu-category.php
// Usage: renderMenuCategory($category_id, $category_name, $category_image, $menu_items, $is_open)

function renderMenuCategory($category_id, $category_name, $category_image, $menu_items, $is_open = false) {
    $collapsed_class = $is_open ? '' : 'collapsed';
    $expanded_attr = $is_open ? 'true' : 'false';
    $collapse_class = $is_open ? 'collapse show' : 'collapse';
?>
<div id="<?php echo htmlspecialchars($category_id); ?>" class="menu-category">
    <div class="menu-category-title collapse-toggle <?php echo $collapsed_class; ?>" 
         role="tab" 
         data-target="#menu<?php echo htmlspecialchars($category_id); ?>Content" 
         data-toggle="collapse" 
         aria-expanded="<?php echo $expanded_attr; ?>">
        <div class="bg-image">
            <img src="<?php echo htmlspecialchars($category_image); ?>" 
             alt="<?php echo htmlspecialchars($category_name); ?>"
             loading="lazy">
        </div>
        <h2 class="title"><?php echo htmlspecialchars($category_name); ?></h2>
    </div>
    <div id="menu<?php echo htmlspecialchars($category_id); ?>Content" class="menu-category-content <?php echo $collapse_class; ?>">
        <div class="p-4">
            <div class="row gutters-sm">
                <?php
                // Include menu item component
                include_once 'menu-item.php';
                
                // Render each menu item
                foreach ($menu_items as $item) {
                    renderMenuItem(
                        $item['image'], 
                        $item['name'], 
                        $item['description'], 
                        $item['price'], 
                        $item['id']
                    );
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>