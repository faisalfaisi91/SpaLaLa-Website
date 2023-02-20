<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Awards extends Widget_Base {

    public function get_name() {
        return 'awards';
    }

    public function get_title() {
        return esc_html__( 'Awards', 'mola_core' );
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
                'label' => esc_html__( 'Items', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'widget_title',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Words from our happy clients', 'plugin-domain' ),
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_title',
                        'label' => esc_html__( 'Title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_text',
                        'label' => esc_html__( 'Text', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ]
                ],
                'title_field' => 'Item',
            ]
        );

        $this->end_controls_section();
        /* END */


    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>


        <div class="art-awards-wrapper">

            <div class="row">

                <?php foreach ( $settings['list'] as $slide ): ?>
                    <div class="col-md-4 art-awards-item">
                        <h3 class="art-item-title"><?php echo $slide['list_title']; ?></h3>
                        <p class="art-item-text"><?php echo $slide['list_text']; ?></p>
                    </div>
                <?php endforeach; ?>

            </div>


        </div>


        <?php

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Awards );
?>
