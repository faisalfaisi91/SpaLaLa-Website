<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Service_Menu_Two extends Widget_Base {

	public function get_name() {
		return 'art-service-menu-two';
	}

	public function get_title() {
		return esc_html__( 'Service Menu Two', 'mola_core' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return ['art-cherie-elements'];
	}

	protected function register_controls() {

		/* START */
		$this->start_controls_section(
			'section_service_menu',
			[
				'label' => esc_html__( 'Heading', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'mola_core' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_service_tab',
						'label' => esc_html__( 'Service tab', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'hr1',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_title_1',
						'label' => esc_html__( 'Service title #1', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_1',
						'label' => esc_html__( 'Service price #1', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_1',
						'label' => esc_html__( 'Content #1', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr2',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_title_2',
						'label' => esc_html__( 'Service title #2', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_2',
						'label' => esc_html__( 'Service price #2', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_2',
						'label' => esc_html__( 'Content #2', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr3',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_title_3',
						'label' => esc_html__( 'Service title #3', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_3',
						'label' => esc_html__( 'Service price #3', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_3',
						'label' => esc_html__( 'Content #3', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr4',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_title_4',
						'label' => esc_html__( 'Service title #4', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_4',
						'label' => esc_html__( 'Service price #4', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_4',
						'label' => esc_html__( 'Content #4', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr5',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_title_5',
						'label' => esc_html__( 'Service title #5', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_5',
						'label' => esc_html__( 'Service price #5', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_5',
						'label' => esc_html__( 'Content #5', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr6',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_6',
						'label' => esc_html__( 'Service title #6', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_6',
						'label' => esc_html__( 'Service price #6', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_6',
						'label' => esc_html__( 'Content #6', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_7',
                        'label' => esc_html__( 'Service title #7', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_7',
                        'label' => esc_html__( 'Service price #7', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_7',
                        'label' => esc_html__( 'Content #7', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_8',
                        'label' => esc_html__( 'Service title #8', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_8',
                        'label' => esc_html__( 'Service price #8', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_8',
                        'label' => esc_html__( 'Content #8', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_9',
                        'label' => esc_html__( 'Service title #9', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_9',
                        'label' => esc_html__( 'Service price #9', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_9',
                        'label' => esc_html__( 'Content #9', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_10',
                        'label' => esc_html__( 'Service title #10', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_10',
                        'label' => esc_html__( 'Service price #10', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_10',
                        'label' => esc_html__( 'Content #10', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_11',
                        'label' => esc_html__( 'Service title #11', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_11',
                        'label' => esc_html__( 'Service price #11', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_11',
                        'label' => esc_html__( 'Content #11', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_12',
                        'label' => esc_html__( 'Service title #12', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_12',
                        'label' => esc_html__( 'Service price #12', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_12',
                        'label' => esc_html__( 'Content #12', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_13',
                        'label' => esc_html__( 'Service title #13', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_13',
                        'label' => esc_html__( 'Service price #13', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_13',
                        'label' => esc_html__( 'Content #13', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_14',
                        'label' => esc_html__( 'Service title #14', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_14',
                        'label' => esc_html__( 'Service price #14', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_14',
                        'label' => esc_html__( 'Content #14', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_15',
                        'label' => esc_html__( 'Service title #15', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_15',
                        'label' => esc_html__( 'Service price #15', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_15',
                        'label' => esc_html__( 'Content #15', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_16',
                        'label' => esc_html__( 'Service title #16', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_16',
                        'label' => esc_html__( 'Service price #16', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_16',
                        'label' => esc_html__( 'Content #16', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],



				],
				'title_field' => '{{{list_service_tab}}}',
			]
		);

		$this->end_controls_section();


        /* TAB_STYLE */
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__( 'Style', 'mola_core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'tabs_class',
            [
                'label' => __( 'Tabs Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );

        $this->add_control(
            'content_class',
            [
                'label' => __( 'Content Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );

        $this->end_controls_section();
        /* END TAB_STYLE */


	}

	protected function render( $instance = [] ) {
		$settings = $this->get_settings_for_display();
		?>

		<div class="art-service-menu-two">
			<div class="art-service-menu-wrapper">

				<ul class="art-service-menu-two-tabs art-no-list-style <?php echo $settings['tabs_class']; ?>">
					<?php $art_i = 1; ?>
					<?php foreach ( $settings['list'] as $item ): ?>
						<li data-id="<?php echo $art_i; ?>" class="<?php echo ($art_i == 1) ? 'art-active':'art-no-active'; ?>">
							<span class="art-first-cl"><?php echo $item['list_service_tab']; ?></span>
						</li>
						<?php $art_i++; ?>
					<?php endforeach; ?>
				</ul>

				<div class="art-service-two-info <?php echo $settings['content_class']; ?>">
					<?php $art_i = 1; ?>
					<?php foreach ( $settings['list'] as $item ): ?>

						<div data-id="<?php echo $art_i; ?>" class="art-first-cl art-service-wrapper <?php echo ($art_i == 1) ? 'art-display-block':'art-display-none'; ?>">

							<div class="art-service-block">

								<?php for($j = 1; $j <= 16; $j++): ?>

									<?php if($item['list_service_title_' . $j]): ?>
										<div class="art-service-item">
											<div class="art-service-top">
												<span class="service-data-title art-heading-seven"><?php echo $item['list_service_title_' . $j] ?></span>
												<span class="service-data-price art-body-three-font"><?php echo $item['list_service_price_' . $j] ?></span>
											</div>
											<div class="art-service-bottom art-body-three-font">
												<?php echo $item['list_service_content_' . $j] ?>
											</div>
										</div>
									<?php endif; ?>
								<?php endfor; ?>

							</div>

						</div>

					<?php $art_i++; ?>
					<?php endforeach; ?>
				</div>

			</div>
		</div>


		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Service_Menu_Two );
?>
