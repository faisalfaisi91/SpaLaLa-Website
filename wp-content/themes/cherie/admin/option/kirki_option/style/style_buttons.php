<?php
CHERIE_Options::add_panel('style_buttons_setting', [
	'title'         => esc_attr__('Buttons Style', 'cherie'),
	'priority'      => 8,
	'icon'          => 'fa fa-paint-brush'
]);


// Dark button
CHERIE_Options::add_section('dark_button_text_setting_section', [
	'title'             => esc_attr__( 'Dark button', 'cherie' ),
	'priority'          => 8,
	'panel'             => 'style_buttons_setting',
]);

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'dark_button_text_setting',
	'label'         => esc_attr__( 'Dark button text color', 'cherie' ),
	'section'       => 'dark_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'dark_button_text_hover_setting',
	'label'         => esc_attr__( 'Dark button text color hover', 'cherie' ),
	'section'       => 'dark_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'dark_button_bg_setting',
	'label'         => esc_attr__( 'Dark button background color', 'cherie' ),
	'section'       => 'dark_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#000000',
	'choices'     => [
		'alpha' => true,
	],
] );



// Light button
CHERIE_Options::add_section('light_button_text_setting_section', [
	'title'             => esc_attr__( 'Light button', 'cherie' ),
	'priority'          => 8,
	'panel'             => 'style_buttons_setting',
]);

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_text_setting',
	'label'         => esc_attr__( 'Light button text color', 'cherie' ),
	'section'       => 'light_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#000000',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_text_hover_setting',
	'label'         => esc_attr__( 'Light button text color hover', 'cherie' ),
	'section'       => 'light_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_border_setting',
	'label'         => esc_attr__( 'Light button border color', 'cherie' ),
	'section'       => 'light_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#000000',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_bg_hover_setting',
	'label'         => esc_attr__( 'Light button background color hover', 'cherie' ),
	'section'       => 'light_button_text_setting_section',
	'priority'      => 1,
	'default'       => '#000000',
	'choices'     => [
		'alpha' => true,
	],
] );



// Light button two
CHERIE_Options::add_section('light_button_two_text_setting_section', [
	'title'             => esc_attr__( 'Light button two', 'cherie' ),
	'priority'          => 8,
	'panel'             => 'style_buttons_setting',
]);

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_two_text_setting',
	'label'         => esc_attr__( 'Light button text color', 'cherie' ),
	'section'       => 'light_button_two_text_setting_section',
	'priority'      => 1,
	'default'       => '#000000',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_two_background_setting',
	'label'         => esc_attr__( 'Light button background color', 'cherie' ),
	'section'       => 'light_button_two_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );




// Light button three
CHERIE_Options::add_section('light_button_three_text_setting_section', [
	'title'             => esc_attr__( 'Light button', 'cherie' ),
	'priority'          => 8,
	'panel'             => 'style_buttons_setting',
]);

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_three_text_setting',
	'label'         => esc_attr__( 'Light button text color', 'cherie' ),
	'section'       => 'light_button_three_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_three_text_hover_setting',
	'label'         => esc_attr__( 'Light button text color hover', 'cherie' ),
	'section'       => 'light_button_three_text_setting_section',
	'priority'      => 1,
	'default'       => '#000000',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_three_border_setting',
	'label'         => esc_attr__( 'Light button border color', 'cherie' ),
	'section'       => 'light_button_three_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );

CHERIE_Options::add_field( [
	'type'          => 'color',
	'settings'      => 'light_button_three_bg_hover_setting',
	'label'         => esc_attr__( 'Light button background color hover', 'cherie' ),
	'section'       => 'light_button_three_text_setting_section',
	'priority'      => 1,
	'default'       => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
] );
