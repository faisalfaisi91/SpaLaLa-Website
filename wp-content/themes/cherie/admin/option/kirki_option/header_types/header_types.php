<?php

CHERIE_Options::add_section('header_type', [
	'title'         => esc_attr__('Header Type', 'cherie'),
	'priority'      => 8,
	'icon'          => 'fa fa-paint-brush'
]);


CHERIE_Options::add_field( [
	'type'              => 'radio-buttonset',
	'settings'          => 'header_type',
	'label'             => esc_attr__( 'Header Type', 'cherie' ),
	'section'           => 'header_type',
	'priority'          => 1,
	'choices'     => [
		'first'          => esc_html__( 'First', 'cherie' ),
		'second'         => esc_html__( 'Second', 'cherie' ),
	],
	'default'           => 'first',
] );

CHERIE_Options::add_field( [
    'type'          => 'color',
    'settings'      => 'header_bg_color',
    'label'         => esc_attr__( 'Header BG color', 'cherie' ),
    'section'       => 'header_type',
    'priority'      => 1,
    'default'       => '',
    'choices'     => [
        'alpha' => true,
    ],
] );

CHERIE_Options::add_field( [
    'type'              => 'radio-buttonset',
    'settings'          => 'header_mega_menu',
    'label'             => esc_attr__( 'Mega Menu', 'cherie' ),
    'section'           => 'header_type',
    'priority'          => 2,
    'choices'     => [
        'on'          => esc_html__( 'On', 'cherie' ),
        'off'         => esc_html__( 'Off', 'cherie' ),
    ],
    'default'           => 'on',
] );

