<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/

// include system functions
if (!isset($content_width)) $content_width = 1140;

/**
 * Load Theme Variable Data
 *
 * @param string $var
 *
 * @return string
 */
function cherie_theme_data_variable($var)
{
    $theme_data = wp_get_theme();
    return $theme_data->{$var};
}

/****************************************************************
 * Define Constants
 ****************************************************************/

define("CHERIE_THEME_URL", get_template_directory_uri());
define("CHERIE_THEME_PATH", get_template_directory());
define('CHERIE_THEME_VERSION', cherie_theme_data_variable('Version'));

/****************************************************************
 * Require Needed Files & Libraries
 ****************************************************************/

/**
 * Admin References & CSS and JS files register
 */
require CHERIE_THEME_PATH . '/admin/admin.php';
/**
 * General
 */
require CHERIE_THEME_PATH . '/admin/etc/general.php';
/**
 * Register Sidebar
 */
require CHERIE_THEME_PATH . '/admin/option/sidebar.php';
/**
 * Woocommerce register plugin
 */
require CHERIE_THEME_PATH . '/admin/function/woocommerce.php';
/**
 * Load More
 */
require CHERIE_THEME_PATH . '/admin/etc/load_more_function.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require CHERIE_THEME_PATH . '/admin/inc/extras.php';
/**
 * Load Jetpack compatibility file.
 */
require CHERIE_THEME_PATH . '/admin/inc/jetpack.php';
/**
 * Comments walker
 */
require CHERIE_THEME_PATH . '/admin/inc/comments-walker.php';


/**
 * Mega Menu
 */
switch (cherie_get_theme_mod('header_mega_menu')) {
    case 'on':
        require CHERIE_THEME_PATH . '/admin/menu/menu.php';
        break;
}


/**
 * About Theme Option
 */
require CHERIE_THEME_PATH . '/admin/theme-dashboard/dashboard.php';
/**
 * Custom Css Option
 */
require CHERIE_THEME_PATH . '/admin/etc/custom_css_option.php';
