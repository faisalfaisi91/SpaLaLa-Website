<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Testimonials_Images extends Widget_Base {

    public function get_name() {
        return 'testimonials-images';
    }

    public function get_title() {
        return esc_html__( 'Testimonials Images', 'cherie-core' );
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
                'label' => esc_html__( 'Slides', 'mola_core' ),
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
                        'name' => 'slider_image',
                        'label' => esc_html__( 'Choose Image', 'mola_core' ),
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'testimonial_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'authors_name',
                        'label' => esc_html__( 'Name', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ]
                ],
                'title_field' => 'Slide',
            ]
        );

        $this->end_controls_section();
        /* END */


    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>


        <div class="art-testimonial-images-wrapper">

            <div class="art-left-side">

                <div class="swiper-container-testimonial-image">
                    <div class="swiper-wrapper">

                    <?php foreach ( $settings['list'] as $slide ): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $slide['slider_image']['url']; ?>" alt="Slide">
                        </div>
                    <?php endforeach; ?>

                    </div>
                </div>

            </div>

            <div class="art-right-side">
                <div class="art-right-side-data">

                    <?php if($settings['widget_title']): ?>
                        <div class="art-testimonial-title art-h9"><?php echo $settings['widget_title']; ?></div>
                    <?php endif; ?>

                    <div class="swiper-container-testimonial-text">
                        <div class="swiper-wrapper">

                            <?php foreach ( $settings['list'] as $slide ): ?>
                                <div class="swiper-slide testimonial-item">
                                    <div class="art-testimonial-data art-h5"><?php echo $slide['testimonial_content']; ?></div>
                                    <div class="art-testimonial-name art-body-three-font"><?php echo $slide['authors_name']; ?></div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                </div>
            </div> <!-- /.art-right-side -->



        </div>


        <?php

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Testimonials_Images );
?>
