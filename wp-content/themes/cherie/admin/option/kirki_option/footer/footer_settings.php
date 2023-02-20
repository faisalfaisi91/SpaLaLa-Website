<?php

CHERIE_Options::add_section('footer_settings', [
    'title'         => esc_attr__('Footer Settings', 'cherie'),
    'priority'      => 8,
    'icon'          => 'fa fa-paint-brush'
]);


CHERIE_Options::add_field( [
    'type'        => 'editor',
    'settings'    => 'footer_bottom_line_text',
    'label'       => esc_html__( 'Footer bottom line text', 'cherie' ),
    'section'     => 'footer_settings',
    'default'     => '',
] );


CHERIE_Options::add_field( [
    'type'          => 'color',
    'settings'      => 'footer_bottom_line_bg_color',
    'label'         => esc_html__( 'Footer Bottom line BG color', 'cherie' ),
    'section'       => 'footer_settings',
    'priority'      => 10,
    'default'       => '',
    'choices'     => [
        'alpha' => true,
    ],
] );

CHERIE_Options::add_field( [
    'type'        => 'dimension',
    'settings'    => 'footer_bottom_line_size',
    'label'       => esc_html__( 'Footer Bottom font size', 'cherie' ),
    'section'     => 'footer_settings',
    'default'     => '16',
] );

CHERIE_Options::add_field( [
    'type'        => 'dimension',
    'settings'    => 'footer_bottom_line_padding',
    'label'       => esc_html__( 'Footer Bottom line padding', 'cherie' ),
    'section'     => 'footer_settings',
    'default'     => '10',
] );