<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Contact_Us extends Widget_Base {

	public function get_name() {
		return 'art-service-menu';
	}

	public function get_title() {
		return esc_html__( 'Service Menu', 'cherie-core' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return ['art-cherie-elements'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_contact_us',
			[
				'label' => esc_html__( 'Heading', 'cherie-core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'cherie-core' ),
				'type' => Controls_Manager::REPEATER,
				/*'default' => [
					[
						'list_icon' => 'fa fa-map-marker',
						'list_content' => esc_html__( '<p>New York, United States</p><p>Pennsylvania Avenue</p>', 'cherie-core' ),
					],
					[
						'list_icon' => 'fa fa-mobile-phone',
						'list_content' => esc_html__( '<p>(91) 4325 659321</p><p>(91) 9853 654799</p>', 'cherie-core' ),
					],
					[
						'list_icon' => 'fa fa-envelope',
						'list_content' => esc_html__( '<p>info@sitedomain.com</p><p>theemail@example.com</p>', 'cherie-core' ),
					],
				],*/
				'fields' => [
					[
						'name' => 'list_custom_icons',
						'label' => esc_html__( 'Custom Icon', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::ICONS,
					],
                    [
                        'name' => 'list_custom_image',
                        'label' => esc_html__( 'Custom Image', 'cherie-core' ),
                        'default' => '',
                        'type' => Controls_Manager::MEDIA,
                    ],
					[
						'name' => 'list_service_title',
						'label' => esc_html__( 'Service title', 'cherie-core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__( 'Content', 'cherie-core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'cherie-core' ),
						'show_label' => false,
					],
				],
				'title_field' => '{{{list_service_title}}}',
			]
		);	

		$this->end_controls_section();




		/*$this->start_controls_section(
			'section_style_content',
			[
				'label' => esc_html__( 'Content', 'cherie-core' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'section_padding',
			[
				'label' => esc_html__( 'Padding', 'cherie-core' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'heading_title',
			[
				'label' => esc_html__( 'Title', 'cherie-core' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'title_bottom_space',
			[
				'label' => esc_html__( 'Spacing', 'cherie-core' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'cherie-core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-title' => 'color: {{VALUE}};',
				],
				'scheme' => '',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .art_contact_us-title',
				'scheme' => '',
			]
		);

		$this->add_responsive_control(
			'text_align',
			[
				'label' => esc_html__( 'Alignment', 'cherie-core' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'cherie-core' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'cherie-core' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'cherie-core' ),
						'icon' => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'cherie-core' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-title' => 'text-align: {{VALUE}};',
				],
			]
		);


		$this->add_control(
			'contact_icon_settings',
			[
				'label' => esc_html__( 'Icon', 'cherie' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'description_icon_color',
			[
				'label' => esc_html__( 'Icon color', 'cherie' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-content li i' => 'color: {{VALUE}};',
				],
				'scheme' => ''
			]
		);

		$this->add_responsive_control(
			'icon_font_size',
			[
				'label' => esc_html__( 'Size', 'cherie' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-content li i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
			'heading_description',
			[
				'label' => esc_html__( 'List', 'cherie' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Text color', 'cherie' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .art_contact_us-content li' => 'color: {{VALUE}};',
				],
				'scheme' => ''
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .art_contact_us li',
				'scheme' => '',
			]
		);
		$this->end_controls_section();
*/

	}

	protected function render( $instance = [] ) {
		$list = $this->get_settings_for_display( 'list' );

		?>

        <div class="art_service_menu">
            <div class="art_service_menu-content">
				<?php

				if ( $list ):?>

                    <ul class="art-service-menu-tabs art-no-list-style">
                        <?php $art_i = 1; ?>
                        <?php foreach ( $list as $item ): ?>
                            <li data-id="<?php echo $art_i; ?>" class="<?php echo ($art_i == 1) ? 'art-active':'art-no-active'; ?>">
                                <?php if($item['list_custom_image']['url'] != ''): ?>
                                    <img src="<?php echo $item['list_custom_image']['url']; ?>" alt="<?php esc_html_e( 'Service icon' , 'cherie-core' ) ?>">
                                <?php else: ?>
                                    <?php Icons_Manager::render_icon( $item['list_custom_icons'] ); ?>
                                <?php endif; ?>
                                <span class="art-first-cl"><?php echo esc_html($item['list_service_title']); ?></span>
                            </li>
	                        <?php $art_i++; ?>
                        <?php endforeach; ?>
                    </ul>

                    <div class="art-service-info">
	                    <?php $art_i = 1; ?>
                        <?php foreach ( $list as $item ): ?>
                            <div data-id="<?php echo $art_i; ?>" class="art-first-cl art-service-item <?php echo ($art_i == 1) ? 'art-display-block':'art-display-none'; ?>">
                                <?php echo $item['list_content']; ?>
                            </div>
	                        <?php $art_i++; ?>
                        <?php endforeach; ?>
                    </div>



				<?php endif; ?>
            </div>

        </div>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Contact_Us );
?>
