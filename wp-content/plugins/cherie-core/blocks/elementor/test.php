<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Test extends Widget_Base {

	public function get_name() {
		return 'art-test';
	}

	public function get_title() {
		return esc_html__( 'TEST', 'mola_core' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return ['art-cherie-elements'];
	}

	protected function register_controls() {


		/** Section Service 1 **/

		$this->start_controls_section(
			'section_services',
			[
				'label' => esc_html__( 'Services', 'mola_core' ),
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
						'name' => 'list_service_icon',
						'label' => esc_html__( 'Custom Icons', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::ICONS,
					],
					[
						'name' => 'list_service_title',
						'label' => esc_html__( 'Service title', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_desc',
						'label' => esc_html__( 'Description', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => '',
						'show_label' => true,
					],
					[
						'name' => 'hr1',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_subtitle_1',
						'label' => esc_html__( 'Service subtitle #1', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'hr11',
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
						'name' => 'hr1',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_subtitle_2',
						'label' => esc_html__( 'Service subtitle #2', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'hr11',
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
						'name' => 'hr2',
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
						'name' => 'hr3',
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
						'name' => 'hr4',
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
						'name' => 'hr5',
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
						'name' => 'hr5',
						'type' => Controls_Manager::DIVIDER
					],


					[
						'name' => 'service_bg_color',
						'label' => __( 'Background Color', 'plugin-domain' ),
						'type' => Controls_Manager::COLOR,
						'scheme' => '',
					],
					[
						'name' => 'service_add_image',
						'label' => __( 'Choose Image', 'plugin-domain' ),
						'type' => Controls_Manager::MEDIA,
					]


				],
				'title_field' => '{{{list_service_title}}}',
			]
		);


		$this->end_controls_section();

		/** END Section Service 1 **/



	}

	protected function render( $instance = [] ) {
		?>


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
		<style>
			html, body {
				height: 100%;
			}
			.navbar-brand > .navbar-item {
				font-size: 20px;
				font-weight: bold;
			}
			.navbar-menu .navbar-item {
				font-size: 14px;
				transition: background-color .26s, color .26s;
			}
			.navbar-menu .navbar-item.active {
				background-color: #222;
				color: red;
			}
			.page {
				height: 700px;
				padding: 80px 0;
				width: 100%;
			}
			.page:nth-child(odd) { background-color: #ddd; }
			.page:nth-child(even) { background-color: #fff; }
		</style>







		<nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
			<div class="container">
				<div class="navbar-brand">
					<a title="VanillaJS ScrollSpy" class="navbar-item">VanillaJS ScrollSpy</a>

					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>

				<div id="navbar" class="navbar-menu navbar-scroll">
					<div class="navbar-start">
						<a href="#home" title="Home" class="navbar-item active">Home</a>
						<a href="#portfolio" title="Portfolio" class="navbar-item">Portfolio</a>
						<a href="#about" title="About" class="navbar-item">About</a>
						<a href="#contact" title="Contact" class="navbar-item">Contact</a>
					</div>
				</div>

			</div>
		</nav>

		<section id="home" class="page">
			<div class="container">
				<h2 class="title">Home</h2>
			</div>
		</section>

		<section id="portfolio" class="page">
			<div class="container">
				<h2 class="title">Portfolio</h2>
			</div>
		</section>

		<section id="about" class="page">
			<div class="container">
				<h2 class="title">About</h2>
			</div>
		</section>

		<section id="contact" class="page">
			<div class="container">
				<h2 class="title">Contact</h2>
			</div>
		</section>



		<?php
	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Test );
?>
