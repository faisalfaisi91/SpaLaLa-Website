<?php
acf_add_local_field_group(array(
	'key'                           => 'group_page_upvGGSaL4ghCx',
	'title'                         => esc_attr__('Page Options','cherie'),
	'fields' => array(

		/*-------------------------------------------------------------------
		==  Header Type Color
		-------------------------------------------------------------------*/
		array(
			'key'                   => 'field_CbwPgNeA2rSvG',
			'label'                 => esc_attr__('Header Type Color','cherie'),
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
			'key'                   => 'header_type_color',
			'label'                 => esc_attr__('Style color','cherie'),
			'name'                  => 'page_navigator_custom_style',
			'type'                  => 'button_group',
			'instructions'          => '',
			'required'              => 0,
			'conditional_logic'     => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'light_header_text' => esc_attr__('Light','cherie'),
				'dark_header_text' => esc_attr__('Dark','cherie'),
			),
			'allow_null' => 0,
			'default_value' => 'dark_header_text',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key'                   => 'header_display_border',
			'label'                 => esc_attr__('Border','cherie'),
			'name'                  => 'page_show_hide_border',
			'type'                  => 'button_group',
			'instructions'          => '',
			'required'              => 0,
			'conditional_logic'     => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'header_border_show' => esc_attr__('Show','cherie'),
				'header_border_hide' => esc_attr__('Hide','cherie'),
			),
			'allow_null' => 0,
			'default_value' => 'header_border_hide',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),


	),
	'location' => array(
		array(
			array(
				'param'                 => 'page_template',
				'operator'              => '==',
				'value'                 => 'default',
			),
		),
        array(
            array(
                'param'                 => 'page_template',
                'operator'              => '==',
                'value'                 => 'elementor-template.php',
            ),
        ),
		array(
			array(
				'param'                 => 'post_template',
				'operator'              => '==',
				'value'                 => 'template-blog.php',
			),
		),
	),
	'menu_order'                    => 0,
	'position'                      => 'normal',
	'style'                         => 'default',
	'label_placement'               => 'top',
	'instruction_placement'         => 'label',
	'hide_on_screen'                => '',
	'active'                        => true,
	'description'                   => '',
));