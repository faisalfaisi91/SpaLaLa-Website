<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Dark_button extends Widget_Base {

	public function get_name() {
		return 'art-dark-button';
	}

	public function get_title() {
		return esc_html__( 'Dark Button', 'cherie-core' );
	}

	public function get_icon() {
		return 'eicon-info-box';
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
			'section_data',
			[
				'label' => __( 'Settings', 'cherie' ),
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
            'boxzilla_options',
            [
                'label' => __( 'Boxzilla popap', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'boxzilla_id',
            [
                'label' => __( 'Boxzilla ID', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'booked_plugin_page_id',
            [
                'label' => __( 'Page link', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'page_id_to_link',
            [
                'label' => esc_html__( 'Page', 'cherie' ),
                'type' => Controls_Manager::SELECT2,
                'options' => $this->get_all_pages(),
                'multiple' => false,
                'description' => __( 'Leave empty if you are going to use your custom link', 'plugin-domain' ),
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'more_options_first_button',
            [
                'label' => __( 'Default popap', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'image_popap_left',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'title_popap_right',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Book Appointment',
            ]
        );

        $this->add_control(
            'description_popap_right',
            [
                'label' => __( 'Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => 'Leave your contacts and we will get back to you asap. We are here to help you.',
            ]
        );

        $this->add_control(
            'shortcode_popap_right',
            [
                'label' => __( 'Shortcode', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'more_options_second_popap',
            [
                'label' => __( 'Default popap #2', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'title_second_popap',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Book Appointment',
            ]
        );

        $this->add_control(
            'description_second_popap',
            [
                'label' => __( 'Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => 'Leave your contacts and we will get back to you asap. We are here to help you.',
            ]
        );

        $this->add_control(
            'shortcode_second_popap',
            [
                'label' => __( 'Shortcode', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'booked_plugin_custom_link',
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
            'more_options_gift_cart',
            [
                'label' => __( 'Gift Cart', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'settings_second_gift_cart_title',
            [
                'label' => __( 'Gift Cart Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
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
                'label' => esc_html__( 'What are you going to use?', 'cherie' ),
                'type' => Controls_Manager::SELECT2,
                'options' => [
                        'boxzilla' => 'Boxzilla ID',
                        'page_link' => 'Page link',
                        'default_popap' => 'Default popap',
                        'default_popap_2' => 'Default popap #2',
                        'custom_link' => 'Custom link',
                        'gift_cart' => 'Gift Cart',
                ],
                'multiple' => false,
                'default' => 'custom_link'
            ]
        );

		$this->end_controls_section();
		/* END */


		/* START */
		$this->start_controls_section(
			'section_style_content',
			[
				'label' => esc_html__( 'settings', 'cherie' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);


        $this->add_responsive_control(
            'content_align',
            [
                'label' => __( 'Alignment', 'plugin-name' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'plugin-name' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'plugin-name' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'plugin-name' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'prefix_class' => 'content-align-%s',
            ]
        );

		$this->end_controls_section();
		/* END */
	}

	protected function render() {

		$all_settings = $this->get_settings_for_display();
		?>

        <?php switch ($all_settings['user_choice']):
            case 'boxzilla':
                ?>

                <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                    <a href="javascript:Boxzilla.show(<?php echo $all_settings['boxzilla_id']; ?>);" class="art-button art-button-dark">
                        <?php echo $all_settings['button_text']; ?>
                    </a>
                </div>

                <?php
                break;
            case 'page_link':

                ?>

                <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                    <a href="<?php echo get_permalink( $all_settings['page_id_to_link'] ); ?>" class="art-button art-button-dark"><?php echo $all_settings['button_text']; ?></a>
                </div>

                <?php

                break;
            case 'default_popap':

                if( $all_settings['shortcode_popap_right'] ):
                    $art_uniqid = uniqid();
                    ?>

                    <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                        <a href="#art-default-popap-<?php echo $art_uniqid; ?>" class="art-button art-button-dark open-team-popup-link"><?php echo $all_settings['button_text']; ?></a>
                    </div>

                    <div id="art-default-popap-<?php echo $art_uniqid; ?>" class="zoom-anim-dialog art-default-popap-one mfp-hide">
                        <div class="art-hero-left">
                            <img src="<?php echo $all_settings['image_popap_left']['url']; ?>" alt="Slide">
                        </div>
                        <div class="art-hero-right">
                            <h4 class="hero-right-title"><?php echo $all_settings['title_popap_right']; ?></h4>
                            <div class="hero-right-description"><?php echo $all_settings['description_popap_right']; ?></div>
                            <div class="hero-right-form">
                                <?php echo do_shortcode($all_settings['shortcode_popap_right']); ?>
                            </div>
                        </div>
                    </div>

                <?php
                endif;

                break;
            case 'default_popap_2':

                if( $all_settings['shortcode_second_popap'] ):
                    $art_uniqid = uniqid();
                    ?>

                    <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                        <a href="#art-default-popap-<?php echo $art_uniqid; ?>" class="art-button art-button-dark open-team-popup-link"><?php echo $all_settings['button_text']; ?></a>
                    </div>

                    <div id="art-default-popap-<?php echo $art_uniqid; ?>" class="zoom-anim-dialog art-default-popap-two mfp-hide">

                        <h4 class="art-form-title"><?php echo $all_settings['title_second_popap']; ?></h4>
                        <div class="art-form-description"><?php echo $all_settings['description_second_popap']; ?></div>
                        <div class="art-form-wrapper">
                            <?php echo do_shortcode($all_settings['shortcode_second_popap']); ?>
                        </div>

                    </div>

                <?php
                endif;

                break;
            case 'custom_link':

                if($all_settings['widget_link']):
                    $target = $all_settings['widget_link']['is_external'] ? ' target="_blank"' : '';
                    $nofollow = $all_settings['widget_link']['nofollow'] ? ' rel="nofollow"' : '';
                    ?>
                    <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                        <a href="<?php echo $all_settings['widget_link']['url']; ?>" <?php echo $target . $nofollow; ?> class="art-button art-button-dark"><?php echo $all_settings['button_text']; ?></a>
                    </div>
                    <?php
                endif;

                break;
            case 'gift_cart':

                if($all_settings['settings_second_gift_cart_title']):
                    $product = get_page_by_title( $all_settings['settings_second_gift_cart_title'], OBJECT, 'product' );
                    ?>
                    <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                        <a href="<?php echo get_permalink( $product->ID ) ?>" class="art-button art-button-dark"><?php echo $all_settings['button_text']; ?></a>
                    </div>
                <?php
                endif;

                break;
        endswitch; ?>



		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Dark_button );
?>
