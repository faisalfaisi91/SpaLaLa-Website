<?php
    CHERIE_Options::add_section('typography_setting', [
        'title'             => esc_attr__( 'Typography', 'cherie' ),
        'priority'          => 8,
        'panel'             => '',
        'icon'              => 'fa fa-font'
    ]);

    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'body_typography',
        'label'             => esc_attr__( 'Body', 'cherie' ),
        'section'           => 'typography_setting',
        'default'     => [
            'font-family'                       => 'Jost',
            'variant'                           => '300',
            'font-size'                         => '18px',
//            'line-height'                       => '30px',
            'line-height'                       => '1.7em',
            'letter-spacing'                    => '',
            //'color'                             => '#000000',
            'text-transform'                    => 'none',
            'text-align'                        => 'left',
        ],
        'priority'    => 1,
        'output'      => [
            [
                'element' => 'body, .art-body-font, code, kbd, pre, samp',
            ],
        ],
    ] );

	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'body_two_typography',
		'label'             => esc_attr__( 'Body 2', 'cherie' ),
		'section'           => 'typography_setting',
		'default'     => [
			'font-family'                       => 'Jost',
			'variant'                           => '300',
			'font-size'                         => '16px',
			'line-height'                       => '26px',
			'letter-spacing'                    => '0.02em',
			//'color'                             => '#000000',
			'text-transform'                    => 'none',

		],
		'priority'    => 1,
		'output'      => [
			[
				'element'                           => '.art-body-two-font, .accordion-product-container tbody',
			],
		],
	] );

	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'body_three_typography',
		'label'             => esc_attr__( 'Body 3', 'cherie' ),
		'section'           => 'typography_setting',
		'default'     => [
			'font-family'                       => 'Jost',
			'variant'                           => '300',
			'font-size'                         => '14px',
			'line-height'                       => '20px',
			'letter-spacing'                    => '0.02em',
			//'color'                             => '#000000',
			'text-transform'                    => 'none',

		],
		'priority'    => 1,
		'output'      => [
			[
				'element'                           => '.art-body-three-font, .art-post-tags a, .woocommerce .woocommerce-breadcrumb, h3#ship-to-different-address',
			],
		],
	] );

	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'body_five_typography',
		'label'             => esc_attr__( 'Body 5', 'cherie' ),
		'section'           => 'typography_setting',
		'default'     => [
			'font-family'                       => 'Jost',
			'variant'                           => '300',
			'font-size'                         => '12px',
			'line-height'                       => '17px',
			//'color'                             => '#000000',
			'text-transform'                    => 'none',

		],
		'priority'    => 1,
		'output'      => [
			[
				'element'                           => '.art-body-five-font, .woocommerce-privacy-policy-text, .woocommerce-checkout #payment div.payment_box',
			],
		],
	] );

	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'buttons_typography',
		'label'             => esc_attr__( 'Buttons', 'cherie' ),
		'section'           => 'typography_setting',
		'default'     => [
			'font-family'                       => 'Jost',
			'variant'                           => '500',
			'font-size'                         => '14px',
			'line-height'                       => '20px',
			'letter-spacing'                    => '0.1em',
			//'color'                             => '#ffffff',
			'text-transform'                    => 'uppercase',
			'text-align'                        => 'center',
		],
		'priority'    => 1,
		'output'      => [
			[
				'element'  => '.woocommerce button.button, .elementor-widget-button .elementor-button, #pwgc-redeem-button, .art-button, .woocommerce div.product form.cart .button, .woocommerce #respond input#submit, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, .woocommerce .button.wc-backward, .art-woo-checkout-page .art-checkout-right .woocommerce-checkout-review-order #payment .form-row.place-order #pwgc-redeem-gift-card-form #pwgc-redeem-form #pwgc-redeem-button',
			],
		],
	] );



    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'blockquote_style',
        'label'             => esc_attr__( 'Blockquote Style Text', 'cherie' ),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'EB Garamond',
            'variant'                           => '500',
            'font-size'                         => '30px',
            'line-height'                       => '45px',
            'color'                             => '#000000',
            'letter-spacing'                    => '0.02em',
            'text-transform'                    => 'none',
            'subsets'                           => false,
        ],
        'output'    => [
            [
                'element' => '.story blockquote, .story blockquote code',
            ],
        ],


    ] );


	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'header_style',
		'label'             => esc_attr__( 'Header Style Text', 'cherie' ),
		'section'           => 'typography_setting',
		'priority'          => 10,
		'default' => [
			'font-family'                       => 'EB Garamond',
			/*'variant'                           => '700',*/
			'color'                             => '#000000',
			'letter-spacing'                    => '0.02em',
			'text-transform'                    => 'none',
			'subsets'                           => false,
		],
		'output'    => [
			[
				'element' => '.art-text-title-style',
			],
		],
	] );

    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'header_typography',
        'label'             => esc_attr__( 'Header Titles', 'cherie' ),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            /*'font-family'                       => 'EB Garamond',*/
            /*'variant'                           => '700',*/
            'color'                             => '#000000',
            'letter-spacing'                    => '0.02em',
            'text-transform'                    => 'none',
            'subsets'                           => false,
        ],
        'output'    => [
            [
                'element' => 'a, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6',
            ],
        ],
    ] );


    // h1

	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'h1_size_typography',
		'label'             => esc_attr__('H1', 'cherie'),
		'section'           => 'typography_setting',
		'priority'          => 10,
		'default' => [
			'font-family'                       => 'EB Garamond',
			'variant'                           => '400',
			'font-size'                         => '60px',
			'line-height'                       => '78px',
		],

		'output'      => [
			[
				'element'                           => 'h1, .art-h1, h1.elementor-heading-title',
			],
		],
	]);

    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h1_size_typography_phone',
        'label'             => esc_attr__('H1 phone', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'EB Garamond',
            'variant'                           => '400',
            'font-size'                         => '30px',
            'line-height'                       => '39px',
        ],

        'output'      => [
            [
                'element'                           => 'h1, .art-h1, h1.elementor-heading-title',
                'property'    => 'width',
                'units'       => 'px',
                'media_query' => '@media (max-width: 767px)',
            ],
        ],
    ]);


    // h2

    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h2_size_typography',
        'label'             => esc_attr__('H2', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
	        'font-family'                       => 'EB Garamond',
	        'variant'                           => '500',
	        'font-size'                         => '42px',
	        'line-height'                       => '55px',
        ],

        'output'      => [
            [
                'element'                           => 'h2, .art-h2, h2.elementor-heading-title',
            ],
        ],
    ]);


    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h2_size_typography_phone',
        'label'             => esc_attr__('H2 phone', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'EB Garamond',
            'variant'                           => '500',
            'font-size'                         => '28px',
            'line-height'                       => '37px',
        ],

        'output'      => [
            [
                'element'                           => 'h2, .art-h2, h2.elementor-heading-title',
                'property'    => 'width',
                'units'       => 'px',
                'media_query' => '@media (max-width: 767px)',
            ],
        ],
    ]);




    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h4_size_typography',
        'label'             => esc_attr__('H4', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'Jost',
            'variant'                           => '400',
            'font-size'                         => '26px',
            'line-height'                       => '38px',
            'letter-spacing'                    => '0.02em',
        ],

        'output'      => [
            [
                'element'                           => 'h4, .art-h4, h4.elementor-heading-title',
            ],
        ],
    ]);


	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'h5_size_typography',
		'label'             => esc_attr__('H5', 'cherie'),
		'section'           => 'typography_setting',
		'priority'          => 10,
		'default' => [
			'font-family'                       => 'Jost',
			'variant'                           => '400',
			'font-size'                         => '22px',
			'line-height'                       => '32px',
			'color'                             => '#000000',
			'letter-spacing'                    => '0.02em',
		],

		'output'      => [
			[
				'element'                           => 'h5, .art-h5, h5.elementor-heading-title, .comment-respond .comment-reply-title, .art-product-layout-classic .related.products h2',
			],
		],
	]);


    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h5_size_typography_phone',
        'label'             => esc_attr__('H5 phone', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'Jost',
            'variant'                           => '400',
            'font-size'                         => '20px',
            'line-height'                       => '29px',
            'color'                             => '#000000',
            'letter-spacing'                    => '0.02em',
        ],

        'output'      => [
            [
                'element'                           => 'h5, .art-h5, h5.elementor-heading-title, .comment-respond .comment-reply-title, .art-product-layout-classic .related.products h2',
                'property'    => 'width',
                'units'       => 'px',
                'media_query' => '@media (max-width: 767px)',
            ],
        ],
    ]);



    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h6_size_typography',
        'label'             => esc_attr__('H6', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'Jost',
            'variant'                           => '500',
            'font-size'                         => '20px',
            'line-height'                       => '29px',
            'color'                             => '#000000',
            'letter-spacing'                    => '0.02em',
        ],

        'output'      => [
            [
                'element'                           => 'h6, .art-h6, h6.elementor-heading-title',
            ],
        ],
    ]);

    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h6_size_typography_phone',
        'label'             => esc_attr__('H6 phone', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'Jost',
            'variant'                           => '500',
            'font-size'                         => '16px',
            'line-height'                       => '23px',
            'color'                             => '#000000',
            'letter-spacing'                    => '0.02em',
        ],

        'output'      => [
            [
                'element'                           => 'h6, .art-h6, h6.elementor-heading-title',
                'property'    => 'width',
                'units'       => 'px',
                'media_query' => '@media (max-width: 767px)',
            ],
        ],
    ]);


	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'h7_size_typography',
		'label'             => esc_attr__('Heading 7', 'cherie'),
		'section'           => 'typography_setting',
		'priority'          => 10,
		'default' => [
			'font-family'                       => 'Jost',
			'variant'                           => '500',
			'font-size'                         => '16px',
			'line-height'                       => '23px',
			'color'                             => '#000000',
			'letter-spacing'                    => '0.02em',
		],

		'output'      => [
			[
				'element'                           => '.art-heading-seven, .woocommerce #reviews #comments h2, .woocommerce-loop-product__title',
			],
		],
	]);


    CHERIE_Options::add_field( [
        'type'              => 'typography',
        'settings'          => 'h8_size_typography',
        'label'             => esc_attr__('Heading 8', 'cherie'),
        'section'           => 'typography_setting',
        'priority'          => 10,
        'default' => [
            'font-family'                       => 'Jost',
            'variant'                           => '400',
            'font-size'                         => '14px',
            'line-height'                       => '20px',
            'color'                             => '#000000',
            'letter-spacing'                    => '0.02em',
        ],

        'output'      => [
            [
                'element'                           => '.art-heading-eight, footer.art-main-footer ul li a, footer.art-main-footer ul li',
            ],
        ],
    ]);


	CHERIE_Options::add_field( [
		'type'              => 'typography',
		'settings'          => 'h9_size_typography',
		'label'             => esc_attr__('Heading 9', 'cherie'),
		'section'           => 'typography_setting',
		'priority'          => 10,
		'default' => [
			'font-family'                       => 'Jost',
			'variant'                           => '400',
			'font-size'                         => '13px',
			'line-height'                       => '19px',
			'color'                             => '#000000',
			'letter-spacing'                    => '0.1em',
		],

		'output'      => [
			[
				'element'                           => '.art-h9',
			],
		],
	]);