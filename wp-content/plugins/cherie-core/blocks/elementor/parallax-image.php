<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Parallax_Image extends Widget_Base {

    public function get_name() {
        return 'art-parallax-image';
    }

    public function get_title() {
        return esc_html__( 'Parallax Image', 'mola_core' );
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

        

        $this->add_responsive_control(
            'padding_top',
            [
                'label' => __( 'Padding Bottom', 'plugin-domain' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                ],
                'desktop_default' => [
                    'size' => 600,
                    'unit' => 'px',
                ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'selectors' => [
                    '{{WRAPPER}} .art-parallax-image-wrapper' => 'padding-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();
        /* END TAB_STYLE */


    }

    protected function render() {
        $all_settings = $this->get_settings_for_display();
        ?>


        <div class="art-parallax-image-wrapper jarallax art-jarallax-block" data-jarallax data-speed="0.2" <?php echo ( $all_settings['hero_bg_image']['url'] )? 'style="background-image:url('. $all_settings['hero_bg_image']['url'] .')"' : '';  ?> ></div>





        <?php

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Parallax_Image );
?>
