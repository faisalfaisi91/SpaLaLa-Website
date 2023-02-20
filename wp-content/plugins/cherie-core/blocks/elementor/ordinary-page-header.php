<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Ordinary_Page_Header extends Widget_Base {

	public function get_name() {
		return 'art-ordinary-page-header';
	}

	public function get_title() {
		return __( 'Ordinary Page Header', 'mola_core' );
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
			'section_hero_header',
			[
				'label' => __( 'Settings', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'page_title',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Your Title', 'plugin-domain' ),
				'placeholder' => __( 'Type page title here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'page_description',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => __( 'Your description', 'plugin-domain' ),
				'placeholder' => __( 'Type page description here', 'plugin-domain' ),
			]
		);


		$this->end_controls_section();
		/* END */




		/* START TAB_STYLE */
		$this->start_controls_section(
			'section_style_content',
			[
				'label' => esc_html__( 'Background image', 'mola_core' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'hero_bg_image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => '',
				],
			]
		);

		$this->add_control(
			'text_align',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'plugin-domain' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'plugin-domain' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'plugin-domain' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);


		$this->add_responsive_control(
			'padding_top',
			[
				'label' => __( 'Padding Top', 'plugin-domain' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 160,
				],
                'mobile_default' => [
                    'size' => 91,
                    'unit' => 'px',
                ],
				'selectors' => [
					'{{WRAPPER}} .art-ordinary-page-header' => 'padding-top: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_responsive_control(
			'padding_bottom',
			[
				'label' => __( 'Padding Bottom', 'plugin-domain' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 132,
				],
                'mobile_default' => [
                    'size' => 55,
                    'unit' => 'px',
                ],
				'selectors' => [
					'{{WRAPPER}} .art-ordinary-page-header' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_section();
		/* END TAB_STYLE */

	}

	protected function render( $instance = [] ) {
		$settings = $this->get_settings_for_display();
		?>

		<div class="art-ordinary-page-header" <?php echo ( $settings['hero_bg_image']['url'] )? 'style="background-image:url('. $settings['hero_bg_image']['url'] .')"' : '';  ?>>

			<div class="container">

				<div class="art-ordinary-page-data" style="<?php echo 'text-align:' . $settings['text_align'];?>">

					<h1 class="art-page-header-title"><?php echo $settings['page_title']; ?></h1>

                    <?php if($settings['page_description']): ?>
                        <div class="art-page-header-description">
                            <?php echo $settings['page_description']; ?>
                        </div>
                    <?php endif; ?>

				</div>

			</div>

		</div>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Ordinary_Page_Header );
?>
