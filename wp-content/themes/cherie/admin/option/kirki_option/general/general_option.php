<?php

CHERIE_Options::add_field( [
    'type'              => 'image',
    'settings'          => 'site_logo',
    'label'             => esc_attr__( 'Site Logo Light', 'cherie' ),
    'description'       => esc_attr__('Upload site logo.', 'cherie' ),
    'section'           => 'title_tagline',
    'default'           => '',
    'priority'          => 2,
] );

CHERIE_Options::add_field( [
    'type'              => 'image',
    'settings'          => 'site_logo_dark',
    'label'             => esc_attr__( 'Site Logo Dark', 'cherie' ),
    'description'       => esc_attr__('Upload site logo.', 'cherie' ),
    'section'           => 'title_tagline',
    'default'           => '',
    'priority'          => 2,
] );