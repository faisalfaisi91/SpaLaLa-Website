<?php
acf_add_local_field_group(array(
	'key'                           => 'group_page_6y12l25e0958f',
	'title'                         => esc_attr__('Page Options','cherie'),
	'fields' => array(
		/*-------------------------------------------------------------------
		==  Post Setting
		-------------------------------------------------------------------*/
		array(
			'key'                   => 'field_DJ68mHh6E9Q1Fs',
			'label'                 =>  esc_attr__('Post Setting','cherie'),
			'name'                  => '',
			'type'                  => 'tab',
			'instructions'          => '',
			'required'              => 0,
			'conditional_logic'     => 0,
			'wrapper' => array(
				'width'                             => '',
				'class'                             => '',
				'id'                                => '',
			),
			'placement'             => 'left',
			'endpoint'              => 0,
		),

		array(
			'key' => 'art_blog_post_sticky',
			'label' => esc_attr__( 'An image for a sticky post','cherie'),
			'name' => 'background_holder',
			'type' => 'image',
			'instructions' => esc_attr__('Recommended image size 1110 x 1110 px','cherie'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),



		/*-------------------------------------------------------------------
		==
		-------------------------------------------------------------------*/




	),
	'location' => array(
		array(
			array(
				'param'                                     => 'post_type',
				'operator'                                  => '==',
				'value'                                     => 'post',
			),
		),
	),
	'menu_order'                => 0,
	'position'                  => 'normal',
	'style'                     => 'default',
	'label_placement'           => 'top',
	'instruction_placement'     => 'label',
	'hide_on_screen'            => '',
	'active'                    => 1,
	'description'               => '',
));