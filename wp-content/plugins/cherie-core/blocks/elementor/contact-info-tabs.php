<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Contact_Info_Tabs extends Widget_Base {

	public function get_name() {
		return 'art-contact-info-tabs';
	}

	public function get_title() {
		return __( 'Contact Info Tabs', 'cherie-core' );
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
			'contact_section',
			[
				'label' => __( 'Contact', 'cherie-core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'cherie-core' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [

					[
						'name' => 'list_service_city',
						'label' => esc_html__( 'City', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'hr',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_custom_icons_1',
						'label' => esc_html__( 'Custom Icons', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::ICONS,
					],
					[
						'name' => 'list_service_title_1',
						'label' => esc_html__( 'Service title', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_content_1',
						'label' => esc_html__( 'Content', 'cherie-core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'cherie-core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_custom_icons_2',
						'label' => esc_html__( 'Custom Icons', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::ICONS,
					],
					[
						'name' => 'list_service_title_2',
						'label' => esc_html__( 'Service title', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_content_2',
						'label' => esc_html__( 'Content', 'cherie' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'cherie' ),
						'show_label' => false,
					],
					[
						'name' => 'hr',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_custom_icons_3',
						'label' => esc_html__( 'Custom Icons', 'cherie' ),
						'default' => '',
						'type' => Controls_Manager::ICONS,
					],
					[
						'name' => 'list_service_title_3',
						'label' => esc_html__( 'Service title', 'cherie' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_content_3',
						'label' => esc_html__( 'Content', 'cherie' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'cherie' ),
						'show_label' => false,
					],
				],
				'title_field' => '{{{list_service_city}}}',
			]
		);

		$this->end_controls_section();
		/* END */



        /* TAB_STYLE */
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__( 'Style', 'cherie' ),
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
            'text_class',
            [
                'label' => __( 'Text Class', 'plugin-domain' ),
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

		if( $settings['list'] ):
			?>

			<div class="art-contact-widget-tabs">


				<ul class="art-contact-menu-two-tabs art-no-list-style <?php echo $settings['tabs_class']; ?>">
					<?php $art_i = 1; ?>
					<?php foreach ( $settings['list'] as $item ): ?>
						<li data-id="<?php echo $art_i; ?>" class="art-body-three-font art-first-cl <?php echo ($art_i == 1) ? 'art-active':'art-no-active'; ?>">
							<span class="art-first-cl"><?php echo $item['list_service_city']; ?></span>
						</li>
						<?php $art_i++; ?>
					<?php endforeach; ?>
				</ul>


                <div class="art-contact-info-wrapper <?php echo $settings['text_class']; ?>">

	                <?php $art_i = 1; ?>
	                <?php foreach ($settings['list'] as $item):?>
                        <div data-id="<?php echo $art_i; ?>" class="art-contact-info-data <?php echo ($art_i == 1) ? 'art-display-block':'art-display-none'; ?>">

                            <div class="art-contact-info-widget">

				                <?php for($j = 1; $j <= 3; $j++): ?>

                                    <div class="col-md-4 art-item">
                                        <div class="art-icon"><?php Icons_Manager::render_icon( $item['list_custom_icons_' . $j] ); ?></div>
                                        <h6 class="art-title"><?php echo $item['list_service_title_' . $j];?></h6>
                                        <div class="art-description art-body-two-font"><?php echo $item['list_content_' . $j]; ?></div>
                                    </div>

				                <?php endfor; ?>
				                <?php $art_i++; ?>

                            </div>

                        </div>
	                <?php endforeach; ?>

                </div>


			</div>



			<?php
		endif;

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Contact_Info_Tabs );
?>
