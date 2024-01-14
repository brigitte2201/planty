
<?php

// enqueue parent styles

function ns_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme-planty.css', array(), filemtime(get_stylesheet_directory() . '/css/theme-planty.css'));
    wp_enqueue_style('form-style', get_stylesheet_directory_uri() . '/css/form-planty.css', array(), filemtime(get_stylesheet_directory() . '/css/form-planty.css'));
}

add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );


function add_extra_item_to_nav_menu( $items, $args ) {
    // Hook Vérifier si l'utilisateur est connecté et si le menu correspond
    if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
        $items .= '<li><a href="' . esc_url( home_url( '/wp-admin/index.php' ) ) . '">Admin</a></li>';
    } 
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

