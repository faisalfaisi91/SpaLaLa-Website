<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-page-preloader="enable">

<?php
switch (cherie_get_theme_mod('preloader_state')) {
    case 'on':
        get_template_part('template-parts/preloader/preloader');
        break;
}

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}?>
<!-- Main holder -->
<div id="art-main-holder">

    <?php
    if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ):
        switch (cherie_get_theme_mod('header_type')) {
            case 'first':
                get_template_part('template-parts/header/first_header');
                break;
            case 'second':
                get_template_part('template-parts/header/second_header');
                break;
        }
    else:
        elementor_theme_do_location('header');
    endif;
    ?>


 <div class="art-main-container">