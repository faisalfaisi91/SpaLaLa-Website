<?php
if (!function_exists('cherie_customize_register'))
{
    function cherie_customize_register($wp_customize)
    {
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
        $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
        $wp_customize->get_control('site_icon')->priority = 10;

        $wp_customize->remove_control('display_header_text');

        $wp_customize->get_section('title_tagline')->title = 'General';
        $wp_customize->get_section('title_tagline')->icon = 'fa fa-paint-brush';
        $wp_customize->get_section('title_tagline')->priority = 1;

        $wp_customize->remove_section('colors');
        $wp_customize->remove_section('header_image');
        $wp_customize->remove_section('background_image');
    }
}
add_action('customize_register', 'cherie_customize_register');

if (!function_exists('initial_kirki_options') && class_exists('CHERIE_Options'))
{
    function initial_kirki_options()
    {
    CHERIE_Options::add_config([
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ]);

    //General Setting
    get_template_part('admin/option/kirki_option/general/general_option');

    //Style Setting
    get_template_part('admin/option/kirki_option/style/style_color');
    get_template_part('admin/option/kirki_option/style/style_buttons');
    get_template_part('admin/option/kirki_option/style/headers');

    //Typography Setting
    get_template_part('admin/option/kirki_option/typography/typography_option');

    //Social Icons
    get_template_part('admin/option/kirki_option/social_icons/social_icons');

    //Global Icons
    get_template_part('admin/option/kirki_option/global_icons/global_icons');

    //Header Types
    get_template_part('admin/option/kirki_option/header_types/header_types');

    //Blog Archive Types
    get_template_part('admin/option/kirki_option/blog_archive_types/blog_archive_types');

    //Shop Archive Types
    get_template_part('admin/option/kirki_option/shop_archive_types/shop_archive_types');

    //Courses Popap Settings
    get_template_part('admin/option/kirki_option/courses_popap_settings/courses_popap_settings');

    //Footer
    get_template_part('admin/option/kirki_option/footer/footer_settings');

    }
    add_action('init', 'initial_kirki_options');
}
if (!function_exists('cherie_get_theme_mod')) {
    function cherie_get_theme_mod($name = null, $use_acf = null, $postId = null, $acf_name = null)
    {
        $value = null;

        // try get value from meta box
        if ($use_acf) {
            $value = cherie_get_metabox($acf_name ? $acf_name : $name, $postId);
        }

        // get value from options
        if (($value === null || $value === 'default')) {
            if (class_exists('CHERIE_Options')) {
                $value = CHERIE_Options::get_option($name);
            }
        }

        $value = apply_filters('cherie_filter_get_theme_mod', $value, $name);
        return $value;
    }
}
// get metabox
if (!function_exists( 'cherie_get_metabox' )):
    function cherie_get_metabox($name = null, $postId = null)
    {
        $value = null;

        // try get value from meta box
        if (function_exists('get_field')) {
            if ($postId == null) {
                $postId = get_the_ID();
            }
            $value = get_field($name, $postId);
        }

        return $value;
    }
endif;