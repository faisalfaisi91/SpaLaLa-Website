<?php
CHERIE_Options::add_section('style_setting', [
    'title'         => esc_attr__('Theme Style', 'cherie'),
    'priority'      => 8,
    'icon'          => 'fa fa-paint-brush'
]);

CHERIE_Options::add_field( [
    'type'          => 'color',
    'settings'      => 'first_color_setting',
    'label'         => esc_attr__( 'First Color Setting', 'cherie' ),
    'section'       => 'style_setting',
    'priority'      => 1,
    'default'       => '#000000',
    'choices'     => [
        'alpha' => true,
    ],
] );


CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'second_color_setting',
	'label'         => esc_attr__( 'Second Color Setting', 'cherie' ),
	'section'       => 'style_setting',
	'priority'      => 1,
	'default'       => '#F6EBE7',
	'choices'     => [
		'alpha' => true,
	],
] );


CHERIE_Options::add_field( [
    'type'              => 'radio-buttonset',
    'settings'          => 'preloader_state',
    'label'             => esc_attr__( 'Preloader', 'cherie' ),
    'section'           => 'style_setting',
    'priority'          => 1,
    'choices'     => [
        'on'          => esc_html__( 'On', 'cherie' ),
        'off'         => esc_html__( 'Off', 'cherie' ),
    ],
    'default'           => 'on',
] );
