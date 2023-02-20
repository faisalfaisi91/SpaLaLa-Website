<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Map_Contacts extends Widget_Base {

    public function get_name() {
        return 'art-my-map-contacts';
    }

    public function get_title() {
        return __( 'Map and Contacts', 'cherie-core' );
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
            'contact_section',
            [
                'label' => __( 'Contact', 'cherie-core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'List', 'cherie-core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [

                    [
                        'name' => 'list_service_city',
                        'label' => esc_html__( 'City', 'cherie-core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER
                    ],
                    [
                        'name' => 'list_service_title_1',
                        'label' => esc_html__( 'Service title', 'cherie-core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_content_1',
                        'label' => esc_html__( 'Content', 'cherie-core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'cherie-core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER
                    ],
                    [
                        'name' => 'list_service_title_2',
                        'label' => esc_html__( 'Service title', 'cherie-core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_content_2',
                        'label' => esc_html__( 'Content', 'cherie-core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER
                    ],
                    [
                        'name' => 'list_service_title_3',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_content_3',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                ],
                'title_field' => '{{{list_service_city}}}',
            ]
        );

        $this->end_controls_section();
        /* END */





        /* START */
        $this->start_controls_section(
            'section_data',
            [
                'label' => __( 'Button Settings', 'mola_core' ),
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
                'label' => esc_html__( 'Page', 'mola_core' ),
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
                    'boxzilla' => 'Boxzilla ID',
                    'page_link' => 'Page link',
                    'default_popap' => 'Default popap',
                    'default_popap_2' => 'Default popap #2',
                    'custom_link' => 'Custom link',
                ],
                'multiple' => false,
                'default' => 'custom_link'
            ]
        );

        /*===============================================================================*/



        $this->end_controls_section();
        /* END */


        /* START */
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__( 'settings', 'mola_core' ),
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



        $this->add_control(
            'button_style',
            [
                'label' => __( 'Button Style', 'plugin-domain' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'art-button-light',
                'options' => [
                    'art-button-light'  => __( 'Button Style #1', 'plugin-domain' ),
                    'art-button-two-light'  => __( 'Button Style #2', 'plugin-domain' ),
                    'art-button-three-light'  => __( 'Button Style #3', 'plugin-domain' )
                ]
            ]
        );


        $this->add_control(
            'more_options_map_google',
            [
                'label' => __( 'Google map', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'google_map_address',
            [
                'label' => __( 'Address', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        $this->add_control(
            'google_map_zoom',
            [
                'label' => esc_html__( 'Zoom', 'plugin-domain' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 20,
                    ]
                ],
                'size_units' => [ 'px' ],
            ]
        );


        $this->add_control(
            'more_options_map',
            [
                'label' => __( 'Map options', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'access_token',
            [
                'label' => __( 'accessToken', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        $this->add_control(
            'mapbox_style',
            [
                'label' => __( 'Mapbox Style Link', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );


        $this->end_controls_section();
        /* END */



    }

    protected function render( $instance = [] ) {
        $all_settings = $this->get_settings_for_display();
        $list_count = count($all_settings['list']);

        $section_class = ( $list_count == 1 ) ? 'art-simple-contacts': '';


        $google_map_address = null;
        if($all_settings['google_map_address']) {
            $google_map_address = $all_settings['google_map_address'];
        }

        if( $all_settings['list'] ):
            ?>

            <?php if($google_map_address === null): ?>
                <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
                <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
            <?php endif; ?>

            <div class="art-map-contacts">

                <div class="art-map-contacts-row">

                    <div class="art-container-left col-md-6">
                        <?php if($google_map_address !== null): ?>
                            <?php
                            printf(
                                '<div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=%1$s&amp;t=m&amp;z=%2$d&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s"></iframe></div>',
                                rawurlencode( $google_map_address ),
                                absint( $all_settings['google_map_zoom']['size'] ),
                                esc_attr( $google_map_address )
                            );
                            ?>
                        <?php else: ?>
                            <div id='map' class="art-my-map-widget" style='width: 100%;'></div>
                        <?php endif; ?>
                    </div>

                    <div class="art-container-right col-md-6<?php echo ' ' . $section_class; ?>">

                        <?php if($list_count > 1): ?>
                            <ul class="art-contact-menu-two-tabs art-no-list-style">
                                <?php $art_i = 1; ?>
                                <?php foreach ( $all_settings['list'] as $item ): ?>
                                    <li data-id="<?php echo $art_i; ?>" class="art-body-three-font art-first-cl <?php echo ($art_i == 1) ? 'art-active':'art-no-active'; ?>">
                                        <span class="art-first-cl"><?php echo $item['list_service_city']; ?></span>
                                    </li>
                                    <?php $art_i++; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="art-contact-info-wrapper">

                            <?php $art_i = 1; ?>
                            <?php foreach ($all_settings['list'] as $item):?>
                                <div data-id="<?php echo $art_i; ?>" class="art-contact-info-data <?php echo ($art_i == 1) ? 'art-display-block':'art-display-none'; ?>">

                                    <div class="art-contact-info-widget">

                                        <?php for($j = 1; $j <= 3; $j++): ?>

                                            <div class="art-contact-item-itself">
                                                <h6 class="art-title"><?php echo $item['list_service_title_' . $j];?></h6>
                                                <div class="art-description art-body-two-font"><?php echo $item['list_content_' . $j]; ?></div>
                                            </div>

                                        <?php endfor; ?>
                                        <?php $art_i++; ?>

                                    </div>

                                </div>
                            <?php endforeach; ?>

                        </div>


                        <?php switch ($all_settings['user_choice']):
                            case 'boxzilla':
                                ?>

                                <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                                    <a href="javascript:Boxzilla.show(<?php echo $all_settings['boxzilla_id']; ?>);" class="art-button <?php echo $all_settings['button_style']; ?>">
                                        <?php echo $all_settings['button_text']; ?>
                                    </a>
                                </div>

                                <?php
                                break;
                            case 'page_link':

                                ?>

                                <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                                    <a href="<?php echo get_permalink( $all_settings['page_id_to_link'] ); ?>" class="art-button <?php echo $all_settings['button_style']; ?>"><?php echo $all_settings['button_text']; ?></a>
                                </div>

                                <?php

                                break;
                            case 'default_popap':

                                if( $all_settings['shortcode_popap_right'] ):
                                    $art_uniqid = uniqid();
                                    ?>

                                    <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                                        <a href="#art-default-popap-<?php echo $art_uniqid; ?>" class="art-button <?php echo $all_settings['button_style']; ?> open-team-popup-link"><?php echo $all_settings['button_text']; ?></a>
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
                                        <a href="#art-default-popap-<?php echo $art_uniqid; ?>" class="art-button <?php echo $all_settings['button_style']; ?> open-team-popup-link"><?php echo $all_settings['button_text']; ?></a>
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
                                        <a href="<?php echo $all_settings['widget_link']['url']; ?>" <?php echo $target . $nofollow; ?> class="art-button <?php echo $all_settings['button_style']; ?>"><?php echo $all_settings['button_text']; ?></a>
                                    </div>
                                <?php
                                endif;

                                break;
                        endswitch; ?>


                    </div>

                </div>

            </div>


            <?php if($google_map_address === null): ?>
                <script>
                    mapboxgl.accessToken = '<?php echo $all_settings['access_token'] ?>';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: '<?php echo $all_settings['mapbox_style'] ?>'
                    });

                    map.scrollZoom.disable();
                    map.addControl(new mapboxgl.NavigationControl());
                </script>
            <?php endif; ?>

        <?php
        endif;

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Map_Contacts );
?>
