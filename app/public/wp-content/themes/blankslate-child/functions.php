<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION


// Fonction pour ajouter un élément au menu de navigation lorsqu'un utilisateur est connecté
// $admin_item = '<li id="menu-item-681" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="' . admin_url() . '">Admin</a></li>';

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() ) {

        $items .= '<li id="menu-item-681" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;

}

?>