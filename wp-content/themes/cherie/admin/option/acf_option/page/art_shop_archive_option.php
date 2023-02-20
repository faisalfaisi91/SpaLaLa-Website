<?php




if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f02227f6ff',
		'title' => 'Woocommerce Archive Settings',
		'fields' => array(

			/*-------------------------------------------------------------------
			==  Product Titles
			-------------------------------------------------------------------*/
			array(
				'key'                   => 'field_id04588G',
				'label'                 => esc_attr__('Product Titles','cherie'),
				'name'                  => '',
				'type'                  => 'tab',
				'instructions'          => '',
				'required'              => 0,
				'conditional_logic'     => 0,
				'wrapper' => array(
					'width'         => '',
					'class'         => '',
					'id'            => '',
				),
				'placement'             => 'left',
				'endpoint'              => 0,
			),



			array(
				'key' => 'woo_archive_title_key_1',
				'label' => 'Title 1',
				'name' => 'woo_archive_title_1',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f045b75f1c14_1',
				'label' => 'Description 1',
				'name' => 'woo_title_description_1',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),


			array(
				'key' => 'field_5f04588f01579_2',
				'label' => 'Title 2',
				'name' => 'woo_title_2',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f045b75f1c14_2',
				'label' => 'Description 2',
				'name' => 'woo_title_description_2',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),



			/*-------------------------------------------------------------------
			==  Product Archive Images
			-------------------------------------------------------------------*/


			array(
				'key'                   => 'field_id04588G_images',
				'label'                 => esc_attr__('Product Archive Images','cherie'),
				'name'                  => '',
				'type'                  => 'tab',
				'instructions'          => '',
				'required'              => 0,
				'conditional_logic'     => 0,
				'wrapper' => array(
					'width'         => '',
					'class'         => '',
					'id'            => '',
				),
				'placement'             => 'left',
				'endpoint'              => 0,
			),


			array(
				'key' => 'field_5f045dc902e44_1',
				'label' => 'Product Image 1',
				'name' => 'product_image_1',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),

			array(
				'key' => 'field_5f045dc902e44_2',
				'label' => 'Product Image 2',
				'name' => 'product_image_2',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),

			array(
				'key' => 'field_5f045dc902e44_3',
				'label' => 'Product Image 3',
				'name' => 'product_image_3',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),


		),
		'location' => array(
			array(
				array(
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'woo-shop-page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;