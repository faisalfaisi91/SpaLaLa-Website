<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Team_And_Partner extends Widget_Base {

    public function get_name() {
        return 'art-team-partner';
    }

    public function get_title() {
        return __( 'Team and Partner', 'mola_core' );
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
            'section_team',
            [
                'label' => __( 'Team', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'team_icon',
            [
                'label' => esc_html__( 'Custom Icons', 'mola_core' ),
                'type' => Controls_Manager::ICONS,
            ]
        );

        $this->add_control(
            'team_title',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Follow Us', 'plugin-domain' ),
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'team_description',
            [
                'label' => __( 'Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __( 'Don’t miss promotions, follow us for the latest news', 'plugin-domain' ),
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );


        $this->end_controls_section();
        /* END */



        /* START */
        $this->start_controls_section(
            'section_team_button',
            [
                'label' => __( 'Team Button', 'mola_core' ),
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



        /* START */
        $this->start_controls_section(
            'section_partner',
            [
                'label' => __( 'Partner', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'partner_icon',
            [
                'label' => esc_html__( 'Custom Icons', 'mola_core' ),
                'type' => Controls_Manager::ICONS,
            ]
        );

        $this->add_control(
            'partner_title',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'We don’t keep our beauty secrets', 'plugin-domain' ),
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'partner_description',
            [
                'label' => __( 'Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __( 'Subscribe now and thank us later', 'plugin-domain' ),
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );


        $this->end_controls_section();
        /* END */



        /* START */
        $this->start_controls_section(
            'section_partner_button',
            [
                'label' => __( 'Partner Button', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'button_text_partner',
            [
                'label' => __( 'Button text', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Tell Me More', 'plugin-domain' ),
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        /*===============================================================================*/

        $this->add_control(
            'user_custom_link_partner',
            [
                'label' => __( 'Custom link', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'widget_link_partner',
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
            'custom_page_id_partner',
            [
                'label' => __( 'Page link', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'page_id_to_link_partner',
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
            'usage_settings_partner',
            [
                'label' => __( 'Usage', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'user_choice_partner',
            [
                'label' => esc_html__( 'What are you going to use?', 'mola_core' ),
                'type' => Controls_Manager::SELECT2,
                'options' => [
                    'page_link_partner' => 'Page link',
                    'custom_link_partner' => 'Custom link',
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
                'label' => esc_html__( 'Left side', 'mola_core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'text_align',
            [
                'label' => __( 'Alignment', 'plugin-domain' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'plugin-domain' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'plugin-domain' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'plugin-domain' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
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


        $this->end_controls_section();
        /* END */


        /* START */
        $this->start_controls_section(
            'section_style_content_two',
            [
                'label' => esc_html__( 'Right side', 'mola_core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'text_align_2',
            [
                'label' => __( 'Alignment', 'plugin-domain' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'plugin-domain' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'plugin-domain' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'plugin-domain' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
            ]
        );

        $this->add_control(
            'button_style_2',
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

        $this->end_controls_section();
        /* END */

    }

    protected function render( $instance = [] ) {
        $all_settings = $this->get_settings_for_display();
        ?>

        <div class="art-team-partner-widget">

            <div class="art-team-side">
                <div class="art-icon"><?php Icons_Manager::render_icon( $all_settings['team_icon'] ); ?></div>
                <h5 class="art-follow-title"><?php echo $all_settings['team_title'];?></h5>
                <div class="art-follow-description"><?php echo $all_settings['team_description'];?></div>

                <?php switch ($all_settings['user_choice']):
                    case 'page_link':

                        ?>

                        <div class="art-widget-button">
                            <a href="<?php echo get_permalink( $all_settings['page_id_to_link'] ); ?>" class="art-button art-button-light"><?php echo $all_settings['button_text']; ?></a>
                        </div>

                        <?php

                        break;

                    case 'custom_link':

                        if($all_settings['widget_link']):

                            $target = $all_settings['widget_link']['is_external'] ? ' target="_blank"' : '';
                            $nofollow = $all_settings['widget_link']['nofollow'] ? ' rel="nofollow"' : '';
                            ?>
                            <div class="art-widget-button">
                                <a href="<?php echo $all_settings['widget_link']['url']; ?>" <?php echo $target . $nofollow; ?> class="art-button art-button-light"><?php echo $all_settings['button_text']; ?></a>
                            </div>

                        <?php endif;
                        break;
                endswitch; ?>

            </div>

            <div class="art-partner-side">
                <div class="art-icon"><?php Icons_Manager::render_icon( $all_settings['partner_icon'] ); ?></div>
                <h5 class="art-subscribe-title"><?php echo $all_settings['partner_title'];?></h5>
                <div class="art-subscribe-description"><?php echo $all_settings['partner_description'];?></div>

                <?php switch ($all_settings['user_choice_partner']):
                    case 'page_link_partner':

                        ?>

                        <div class="art-widget-button">
                            <a href="<?php echo get_permalink( $all_settings['page_id_to_link_partner'] ); ?>" class="art-button art-button-light"><?php echo $all_settings['button_text_partner']; ?></a>
                        </div>

                        <?php

                        break;

                    case 'custom_link_partner':

                        if($all_settings['widget_link_partner']):

                            $target = $all_settings['widget_link_partner']['is_external'] ? ' target="_blank"' : '';
                            $nofollow = $all_settings['widget_link_partner']['nofollow'] ? ' rel="nofollow"' : '';
                            ?>
                            <div class="art-widget-button">
                                <a href="<?php echo $all_settings['widget_link_partner']['url']; ?>" <?php echo $target . $nofollow; ?> class="art-button art-button-light"><?php echo $all_settings['button_text_partner']; ?></a>
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
Plugin::instance()->widgets_manager->register( new Widget_Art_Team_And_Partner );
?>
