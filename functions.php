<?php
add_action('wp_enqueue_scripts', 'lime_scripts');

function lime_scripts() {
    wp_enqueue_style('lime_style', get_stylesheet_uri());
    wp_enqueue_script('lime_scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);    
}

add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes',10,3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'menu-text'; 
    }
    
    return $atts;
}

?>