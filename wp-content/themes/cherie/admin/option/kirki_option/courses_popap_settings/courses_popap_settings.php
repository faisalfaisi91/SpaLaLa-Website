<?php
CHERIE_Options::add_section('courses_popap_settings', [
    'title'         => esc_attr__('Courses & Career Popap Settings', 'cherie'),
    'priority'      => 8,
    'icon'          => 'fa fa-paint-brush'
]);


CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'courses_popap_title',
    'label'    => esc_html__( 'Title', 'cherie' ),
    'section'  => 'courses_popap_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'textarea',
    'settings' => 'courses_popap_description',
    'label'    => esc_html__( 'Description', 'cherie' ),
    'section'  => 'courses_popap_settings',
    'default'  => '',
    'priority' => 10,
] );

CHERIE_Options::add_field( [
    'type'     => 'text',
    'settings' => 'courses_popap_shortcode',
    'label'    => esc_html__( 'Shortcode', 'cherie' ),
    'section'  => 'courses_popap_settings',
    'default'  => '',
    'priority' => 10,
] );