<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Contact_Info_Vertical extends Widget_Base {

    public function get_name() {
        return 'contact-info-vertical';
    }

    public function get_title() {
        return __( 'Contact Info Vertical', 'cherie-core' );
    }

    public function get_icon() {
        return 'eicon-info-box';
    }

    public function get_categories() {
        return ['art-cherie-elements'];
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
                        'name' => 'list_custom_icons',
                        'label' => esc_html__( 'Custom Icons', 'cherie-core' ),
                        'default' => '',
                        'type' => Controls_Manager::ICONS,
                    ],
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'cherie-core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_content',
                        'label' => esc_html__( 'Content', 'cherie-core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'cherie-core' ),
                        'show_label' => false,
                    ],
                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        $this->end_controls_section();
        /* END */



    }

    protected function render( $instance = [] ) {
        $settings = $this->get_settings_for_display();

        if( $settings['list'] ):
            ?>

            <div class="art-contact-info-widget art-vertical">
                <?php foreach ($settings['list'] as $item):?>
                    <div class="col-12 art-item">
                        <div class="art-icon"><?php Icons_Manager::render_icon( $item['list_custom_icons'] ); ?></div>
                        <h6 class="art-title"><?php echo $item['list_service_title'];?></h6>
                        <div class="art-description art-body-two-font"><?php echo $item['list_content']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php
        endif;

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Contact_Info_Vertical );
?>
