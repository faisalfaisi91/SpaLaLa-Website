<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Widget_Company_Team extends Widget_Base {

	public function get_name() {
		return 'team';
	}

	public function get_title() {
		return esc_html__( 'Team', 'mola_core' );
	}

	public function get_icon() {
		return 'eicon-products';
	}

	public function get_keywords() {
		return [ 'woocommerce', 'shop', 'store', 'product', 'archive' ];
	}

	public function get_categories() {
		return [
			'art-cherie-elements',
		];
	}



	protected function register_controls() {

		/* START */
		$this->start_controls_section(
			'section_team',
			[
				'label' => __( 'Team', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'list',
			[
				'label' => __( 'List', 'mola_core' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'member_image',
						'label' => __( 'Image', 'mola_core' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'member_name',
						'label' => __( 'Name', 'mola_core' ),
						'type' => Controls_Manager::TEXT,
						'placeholder' => __( 'Name', 'plugin-domain' ),
						'default' => __( 'Bob', 'plugin-domain' ),
					],
					[
						'name' => 'member_position',
						'label' => __( 'Position', 'mola_core' ),
						'type' => Controls_Manager::TEXT,
						'placeholder' => __( 'Position', 'plugin-domain' ),
						'default' => __( 'Designer', 'plugin-domain' ),
					],
					[
						'name' => 'member_description',
						'label' => __( 'Description', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'placeholder' => __( 'Description', 'plugin-domain' ),
						'default' => '',
					]
				],
				'title_field' => 'Item',
			]
		);

		$this->end_controls_section();
		/* END */


	}

	protected function render( $instance = [] ) {
		$settings = $this->get_settings_for_display();
		?>


		<div class="art-widget-team">


			<div class="art-all-members">


				<?php $art_i = 1; ?>
				<?php foreach ( $settings['list'] as $member ): ?>
                <?php $art_team_uniqid = uniqid(); ?>

					<div class="art-team-member col-sm-6 col-lg-3">

						<div class="art-team-wrap">

							<a href="#art-team-member-<?php echo $art_team_uniqid; ?>-popup-<?php echo $art_i; ?>" class="open-team-popup-link">
								<img src="<?php echo $member['member_image']['url']; ?>" alt="Team Member">
							</a>

							<a href="#art-team-member-<?php echo $art_team_uniqid; ?>-popup-<?php echo $art_i; ?>" class="open-team-popup-link art-member-title">
								<span class="art-heading-seven"><?php echo $member['member_name']; ?></span>
							</a>

							<span class="art-body-three-font art-member-position"><?php echo $member['member_position']; ?></span>
						</div>

						<div id="art-team-member-<?php echo $art_team_uniqid; ?>-popup-<?php echo $art_i; ?>" class="zoom-anim-dialog art-team-popap mfp-hide">
							<div class="art-team-widget-popup">

								<div class="art-team-popup-container">
									<div class="art-team-popup-left">
										<img src="<?php echo $member['member_image']['url']; ?>" alt="Team Member">
									</div>
									<div class="art-team-popup-right">
										<div class="member-popup-title art-h2"><?php echo $member['member_name']; ?></div>
										<span class="member-popup-position art-heading-seven"><?php echo $member['member_position']; ?></span>
										<div class="art-popup-member-description">
											<?php echo $member['member_description']; ?>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>

					<?php $art_i++; ?>
				<?php endforeach; ?>

			</div>

		</div>

	<?php }

	public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register( new Widget_Company_Team );
?>
