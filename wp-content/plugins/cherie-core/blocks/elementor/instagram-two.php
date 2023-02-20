<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Widget_Woo_starshop_instagram_two extends Widget_Base {

	public function get_name() {
		return 'instagram-two';
	}

	public function get_title() {
		return esc_html__( 'Instagram 2', 'mola_core' );
	}

	public function get_icon() {
		return 'fa fa-instagram';
	}

	public function get_keywords() {
		return [ 'woocommerce', 'shop', 'store', 'product', 'archive' ];
	}

	public function get_categories() {
		return [
			'art-cherie-elements',
		];
	}

	public function get_instagram_limit_posts() {
		$insta_limit = array(
			2 => 2,
			4 => 4,
			6 => 6,
		);


		return $insta_limit;
	}



	protected function register_controls() {

		$this->add_control(
			'art_section_instagram',
			[
				'label' => esc_html__( 'Instagram', 'mola_core' ),
				'type' => Controls_Manager::SECTION,
			]
		);


		$this->add_control(
			'art_insta_shortcode',
			[
				'label'   => esc_html__( 'Your shortcode', 'mola_core' ),
				'type'    => Controls_Manager::TEXT,
				'default' => '',
				'section' => 'art_section_instagram',
				'description' => '',
			]
		);


	}

	protected function render( $instance = [] ) {
		$settings = $this->get_settings_for_display();

		?>

		<div class="art-insta-widget-wrapper">
			<?php echo do_shortcode($settings['art_insta_shortcode']); ?>
		</div>

		<?php
	}

	public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register( new Widget_Woo_starshop_instagram_two );
?>
