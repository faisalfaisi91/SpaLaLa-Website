<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Follow_And_Subscribe extends Widget_Base {

	public function get_name() {
		return 'art-follow-subscribe';
	}

	public function get_title() {
		return __( 'Follow and Subscribe', 'mola_core' );
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
			'section_follow_us',
			[
				'label' => __( 'Follow Us', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'follow_title',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Follow Us', 'plugin-domain' ),
				'placeholder' => __( 'Type your title here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'follow_description',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Don’t miss promotions, follow us for the latest news', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'mola_core' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'social_icon',
						'label' => __( 'Icon', 'text-domain' ),
						'type' => Controls_Manager::ICONS,
						'default' => ''
					],
					[
						'name' => 'social_link',
						'label' => __( 'Link', 'plugin-domain' ),
						'type' => Controls_Manager::URL,
						'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
						'show_external' => true,
						'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						],
					]
				],
				'title_field' => 'Item',
			]
		);


		$this->end_controls_section();
		/* END */


		/* START */
		$this->start_controls_section(
			'section_subscribe',
			[
				'label' => __( 'Subscribe', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'subscribe_title',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'We don’t keep our beauty secrets', 'plugin-domain' ),
				'placeholder' => __( 'Type your title here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'subscribe_description',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Subscribe now and thank us later', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'subscribe_shortcode',
			[
				'label' => __( 'Shortcode', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => __( 'Type your shortcode here', 'plugin-domain' ),
			]
		);


		$this->end_controls_section();
		/* END */


	}

	protected function render( $instance = [] ) {
		$settings = $this->get_settings_for_display();
		?>

		<div class="art-follow-subscribe-widget">

			<div class="art-follow-side">
				<h5 class="art-follow-title"><?php echo $settings['follow_title'];?></h5>
				<p class="art-follow-description"><?php echo $settings['follow_description'];?></p>

				<div class="art-follow-social-icons">
					<?php foreach ( $settings['list'] as $item ): ?>
						<?php if($item['social_link']['url']): ?>
							<?php
							$target = $item['social_link']['is_external'] ? ' target="_blank"' : '';
							$nofollow = $item['social_link']['nofollow'] ? ' rel="nofollow"' : '';
							?>
							<a href="<?php echo $item['social_link']['url']; ?>" <?php echo $target . $nofollow; ?>><i class="<?php echo $item['social_icon']['value']; ?>"></i></a>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>

			</div>

			<div class="art-subscribe-side">
				<h5 class="art-subscribe-title"><?php echo $settings['subscribe_title'];?></h5>
				<p class="art-subscribe-description"><?php echo $settings['subscribe_description'];?></p>
				<?php echo do_shortcode($settings['subscribe_shortcode']); ?>
			</div>

		</div>


		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Follow_And_Subscribe );
?>
