<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Slider_Info extends Widget_Base {

	public function get_name() {
		return 'art-slider-info';
	}

	public function get_title() {
		return esc_html__( 'Slider Info', 'mola_core' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_keywords() {
		return [ 'image', 'photo', 'visual', 'carousel', 'slider' ];
	}

	public function get_categories() {
		return ['art-cherie-elements'];
	}

	protected function register_controls() {


		/* START */
		$this->start_controls_section(
			'section_slider_info',
			[
				'label' => esc_html__( 'Slides', 'mola_core' ),
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
						'name' => 'slider_image',
						'label' => esc_html__( 'Choose Image', 'mola_core' ),
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'type' => Controls_Manager::MEDIA,
					]
				],
				'title_field' => 'Slide',
			]
		);

		$this->end_controls_section();
		/* END */


	}

	protected function render() {
		$settings = $this->get_settings_for_display();
	?>


		<div class="art-slider-info-wrapper">

			<div class="swiper-container-slider-info">
				<div class="swiper-wrapper">

					<?php foreach ( $settings['list'] as $slide ): ?>
					<div class="swiper-slide">
						<img src="<?php echo $slide['slider_image']['url']; ?>" alt="Slide info">
					</div>
					<?php endforeach; ?>

				</div>

                <!-- Add Arrows -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>

			</div>

		</div>


	<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Slider_Info );
?>
