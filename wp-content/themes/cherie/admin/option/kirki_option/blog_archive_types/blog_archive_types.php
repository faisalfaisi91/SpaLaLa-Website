<?php

CHERIE_Options::add_section('blog_archive_type', [
	'title'         => esc_attr__('Blog Archive Type', 'cherie'),
	'priority'      => 8,
	'icon'          => 'fa fa-paint-brush'
]);


CHERIE_Options::add_field( [
	'type'              => 'radio-buttonset',
	'settings'          => 'blog_archive_type',
	'label'             => esc_attr__( 'Blog Archive Type', 'cherie' ),
	'section'           => 'blog_archive_type',
	'priority'          => 1,
	'choices'     => [
		'blog_default'        => esc_html__( 'Default', 'cherie' ),
		'blog_sticky'         => esc_html__( 'Sticky', 'cherie' ),
		'blog_typical'        => esc_html__( 'Typical', 'cherie' ),
	],
	'default'           => 'blog_typical',
] );