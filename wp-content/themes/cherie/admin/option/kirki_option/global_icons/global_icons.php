<?php
CHERIE_Options::add_section('global_icons_settings', [
    'title'         => esc_attr__('Global Icons', 'cherie'),
    'priority'      => 8,
    'icon'          => 'fa fa-paint-brush'
]);


CHERIE_Options::add_field( [
    'type'     => 'image',
    'settings' => 'thank_you_page_icon',
    'label'    => esc_html__( 'Thank you page', 'cherie' ),
    'section'  => 'global_icons_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'image',
    'settings' => 'blog_comment_icon',
    'label'    => esc_html__( 'Blog Comment icon', 'cherie' ),
    'section'  => 'global_icons_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'image',
    'settings' => 'cherie_courses_form_icon',
    'label'    => esc_html__( 'Cherie Courses Form (WP widget)', 'cherie' ),
    'section'  => 'global_icons_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'image',
    'settings' => 'cherie_subscribe_form_icon',
    'label'    => esc_html__( 'Cherie Subscribe Form (WP widget)', 'cherie' ),
    'section'  => 'global_icons_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'image',
    'settings' => 'cherie_shop_cart_icon',
    'label'    => esc_html__( 'Shop Cart Empty', 'cherie' ),
    'section'  => 'global_icons_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'image',
    'settings' => 'cherie_shop_cart_full_icon',
    'label'    => esc_html__( 'Shop Cart Full', 'cherie' ),
    'section'  => 'global_icons_settings',
    'default'  => '',
    'priority' => 10,
] );