<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_info_block extends Widget_Base {

	public function get_name() {
		return 'info-block';
	}

	public function get_title() {
		return esc_html__( 'Info Block', 'mola_core' );
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

    public function get_all_pages() {
        $all_pages = [];
        $pages = get_pages();

        if( $pages ){
            foreach( $pages as $page ){
                $all_pages[$page->ID] = $page->post_title;
            }
        }

        return $all_pages;
    }

	protected function register_controls() {


		/* START */
		$this->start_controls_section(
			'section_side_one',
			[
				'label' => esc_html__( 'Side 1', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);


		$this->end_controls_section();
		/* END */


		/* START */
		$this->start_controls_section(
			'section_side_two',
			[
				'label' => __( 'Side 2', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'widget_title',
			[
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Default title', 'plugin-domain' ),
				'placeholder' => __( 'Type your title here', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'widget_description',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => __( 'Default description', 'plugin-domain' ),
				'placeholder' => __( 'Type your description here', 'plugin-domain' ),
			]
		);


		$this->end_controls_section();
		/* END */




        /* START */
        $this->start_controls_section(
            'section_button_settings',
            [
                'label' => __( 'Button settings', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button text', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Learn More', 'plugin-domain' ),
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'user_custom_link',
            [
                'label' => __( 'Custom link', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'widget_link',
            [
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
        );

        /*===============================================================================*/

        $this->add_control(
            'custom_page_id',
            [
                'label' => __( 'Page link', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'page_id_to_link',
            [
                'label' => esc_html__( 'Page', 'mola_core' ),
                'type' => Controls_Manager::SELECT2,
                'options' => $this->get_all_pages(),
                'multiple' => false,
                'description' => __( 'Leave empty if you are going to use your custom link', 'plugin-domain' ),
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'usage_settings',
            [
                'label' => __( 'Usage', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'user_choice',
            [
                'label' => esc_html__( 'What are you going to use?', 'mola_core' ),
                'type' => Controls_Manager::SELECT2,
                'options' => [
                    'page_link' => 'Page link',
                    'custom_link' => 'Custom link',
                ],
                'multiple' => false,
                'default' => 'custom_link'
            ]
        );

        $this->end_controls_section();
        /* END */




		/* TAB_STYLE */
		$this->start_controls_section(
			'section_style_content',
			[
				'label' => esc_html__( 'Style', 'mola_core' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'do_reverse',
			[
				'label' => __( 'Reverse', 'plugin-domain' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'Left', 'your-plugin' ),
				'label_off' => __( 'Right', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


		$this->add_control(
			'section_color',
			[
				'label' => esc_html__( 'Background Color', 'mola_core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#F5E1D3',
				'selectors' => [
					'{{WRAPPER}} .art-info-block-wrapper' => 'background-color: {{VALUE}};',
				],
			]
		);


        $this->add_control(
            'img_class',
            [
                'label' => __( 'Image Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );

        $this->add_control(
            'title_class',
            [
                'label' => __( 'Title Class', 'plugin-domain' ),
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

        $this->add_control(
            'button_class',
            [
                'label' => __( 'Button Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );


		$this->end_controls_section();
		/* TAB_STYLE END */

	}

	protected function render() {

		$all_settings = $this->get_settings_for_display();
		?>



		<div class="art-info-block-wrapper<?php echo ( 'yes' !== $all_settings['do_reverse'] ) ? ' art-do-reverse' : ''; ?>">


			<div class="art-info-block-one <?php echo $all_settings['img_class']; ?>">
				<img src="<?php echo $all_settings['image']['url']; ?>" alt="">
			</div>


			<div class="art-info-block-two">
				<?php if($all_settings['widget_title']): ?>
					<h2 class="art-widget-title <?php echo $all_settings['title_class']; ?>"><?php echo $all_settings['widget_title']; ?></h2>
				<?php endif; ?>

				<?php if($all_settings['widget_description']): ?>
					<div class="art-section-data art-body-font <?php echo $all_settings['text_class']; ?>"><?php echo $all_settings['widget_description']; ?></div>
				<?php endif; ?>


                <?php switch ($all_settings['user_choice']):
                    case 'page_link':

                        ?>

                        <div class="art-widget-button <?php echo $all_settings['button_class']; ?>">
                            <a href="<?php echo get_permalink( $all_settings['page_id_to_link'] ); ?>" class="art-button art-button-light"><?php echo $all_settings['button_text']; ?></a>
                        </div>

                        <?php

                        break;

                    case 'custom_link':

                        if($all_settings['widget_link']):

                            $target = $all_settings['widget_link']['is_external'] ? ' target="_blank"' : '';
                            $nofollow = $all_settings['widget_link']['nofollow'] ? ' rel="nofollow"' : '';
                            ?>
                            <div class="art-widget-button <?php echo $all_settings['button_class']; ?>">
                                <a href="<?php echo $all_settings['widget_link']['url']; ?>" <?php echo $target . $nofollow; ?> class="art-button art-button-light"><?php echo $all_settings['button_text']; ?></a>
                            </div>

                        <?php endif;
                        break;
                endswitch; ?>

			</div>

		</div>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_info_block );
?>
