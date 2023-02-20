<?php
CHERIE_Options::add_panel('style_headers_setting', [
    'title'         => esc_attr__('Headers Settings', 'cherie'),
    'priority'      => 9,
    'icon'          => 'fa fa-paint-brush'
]);


// Dark button
CHERIE_Options::add_section('second_header_setting_section', [
    'title'             => esc_attr__( 'Second Header', 'cherie' ),
    'priority'          => 8,
    'panel'             => 'style_headers_setting',
]);

CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'header_button_text',
    'label'    => esc_html__( 'Button text', 'cherie' ),
    'section'  => 'second_header_setting_section',
    'default'  => esc_attr__( 'Book Appointment', 'cherie' ),
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'header_button_link',
    'label'    => esc_html__( 'Button simple link', 'cherie' ),
    'section'  => 'second_header_setting_section',
    'default'  => '',
    'priority' => 10,
] );


CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'header_button_booked',
    'label'    => esc_html__( 'Booked Plugin Shortcode', 'cherie' ),
    'section'  => 'second_header_setting_section',
    'default'  => '',
    'priority' => 10,
] );


CHERIE_Options::add_field( [
    'type'              => 'image',
    'settings'          => 'header_button_popap_image',
    'label'             => esc_attr__( 'Popap image', 'cherie' ),
    'description'       => esc_attr__('Upload an image for your custom popap.', 'cherie' ),
    'section'           => 'second_header_setting_section',
    'default'           => '',
    'priority'          => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'header_button_popap_title',
    'label'    => esc_html__( 'Popap title', 'cherie' ),
    'section'  => 'second_header_setting_section',
    'default'  => esc_attr__( 'Book Appointment', 'cherie' ),
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'textarea',
    'settings' => 'header_button_popap_description',
    'label'    => esc_html__( 'Popap description', 'cherie' ),
    'section'  => 'second_header_setting_section',
    'default'  => esc_attr__( 'Leave your contacts and we will get back to you asap. We are here to help you.', 'cherie' ),
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'header_button_popap_custom_shortcode',
    'label'    => esc_html__( 'Popap Shortcode', 'cherie' ),
    'section'  => 'second_header_setting_section',
    'default'  => '',
    'priority' => 10,
] );