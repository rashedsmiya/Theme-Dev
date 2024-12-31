<?php

register_nav_menu('main_menu', __('Main Menu', 'alihossain'));

// Walker Menu Properties
function ali_nav_description($item_output, $item, $args) {
    // Ensure $args is an object and has the 'link_after' property
    if (is_object($args) && property_exists($args, 'link_after') && !empty($item->description)) {
        $item_output = str_replace(
            $args->link_after . '</a>',
            '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output, 
        );    
    }
    return $item_output;
}   
   
add_filter('walker_nav_menu_start_el', 'ali_nav_description', 10, 3);
