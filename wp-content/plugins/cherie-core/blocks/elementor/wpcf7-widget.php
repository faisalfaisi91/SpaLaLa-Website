<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_wpcf7 extends Widget_Base {

    public function get_name() {
        return 'art-wpcf7';
    }

    public function get_title() {
        return esc_html__( 'Shortcode', 'mola_core' );
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
                'label' => esc_html__( 'Shortcode', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'widget_shortcode',
            [
                'label' => __( 'Your shortcode', 'plugin-domain' ),
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

        <div class="art-shortcode-widget">
            <?php echo do_shortcode($settings['widget_shortcode']); ?>
        </div>
        
    <?php }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_wpcf7 );
?>
