<?php

CHERIE_Options::add_section('shop_archive_type', [
    'title'         => esc_attr__('Shop Archive Type', 'cherie'),
    'priority'      => 8,
    'icon'          => 'fa fa-paint-brush'
]);


CHERIE_Options::add_field( [
    'type'              => 'radio-buttonset',
    'settings'          => 'shop_archive_type',
    'label'             => esc_attr__( 'Shop Archive Type', 'cherie' ),
    'section'           => 'shop_archive_type',
    'priority'          => 1,
    'choices'     => [
        'shop_advanced'         => esc_html__( 'Advanced', 'cherie' ),
        'shop_default'        => esc_html__( 'Default', 'cherie' ),
    ],
    'default'           => 'shop_advanced',
] );