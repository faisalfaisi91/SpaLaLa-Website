<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Accordion extends Widget_Base {

	public function get_name() {
		return 'di-faqs';
	}

	public function get_title() {
		return esc_html__( 'Services Accordion', 'mola_core' );
	}

	public function get_icon() {
		return 'fa fa-question';
	}

	public function get_categories() {
		return array('art-cherie-elements');
	}

	protected function register_controls() {


		/* START */
		$this->start_controls_section(
			'section_services',
			[
				'label' => esc_html__( 'Services', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'service_list',
			[
				'label' => esc_html__( 'List', 'mola_core' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'service-name',
						'label' => esc_html__( 'Service name', 'mola_core' ),
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( 'Your service' , 'mola_core' ),
						'label_block' => true,
					],
					[
						'name' => 'service-price',
						'label' => esc_html__( 'Service price', 'mola_core' ),
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( '$49' , 'mola_core' ),
						'label_block' => true,
					],
					[
						'name' => 'service-description',
						'label' => esc_html__( 'Service description', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Description...' , 'mola_core' ),
						'show_label' => false,
					],

				],
				'title_field' => 'Item',
			]
		);

		$this->end_controls_section();
		/* END */





		/*$this->add_control(
			'review_button_link',
			[
				'label' => esc_html__( 'Button link', 'mola_core' ),
				'type' => Controls_Manager::URL,
				'default' => [
					'url' => '#contact',
				],
				'show_external' => false, // Show the 'open in new tab' button.
				'section' => 'section_partners',
			]
		);*/

	}

	protected function render( $instance = [] ) {

		// get our input from the widget settings.
		$faqs_list = $this->get_settings( 'service_list' );



		?>

		<div class="art-service-container">

			<?php if ( $faqs_list ): ?>


				<?php foreach ( $faqs_list as $item ): ?>

					<button class="accordion art-heading-seven">
                        <span class="service-name"><?php echo $item['service-name']; ?></span>
                        <span class="service-price"><?php echo $item['service-price']; ?></span>
                    </button>
					<div class="panel">

						<div class="panel-data">
                            <?php echo $item['service-description']; ?>
                        </div>

					</div>

				<?php endforeach; ?>



			<?php endif; ?>


		</div>


	<?php }

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Accordion );
