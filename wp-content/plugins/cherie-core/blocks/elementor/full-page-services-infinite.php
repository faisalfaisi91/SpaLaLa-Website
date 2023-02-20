<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Full_Page_Services_Infinite extends Widget_Base {

    public function get_name() {
        return 'full-page-services-infinite';
    }

    public function get_title() {
        return esc_html__( 'Full Page Services Infinite', 'mola_core' );
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

        /******************** Service 1 ********************/
        $this->start_controls_section(
            'section_services',
            [
                'label' => esc_html__( 'Service #1', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_1',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_1',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_1',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_1',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_1',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );


        // services 1 1
        $this->add_control(
            'service_subtitle_1_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_1_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 1 2
        $this->add_control(
            'service_subtitle_1_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_1_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 1 3
        $this->add_control(
            'service_subtitle_1_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_1_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 1 4
        $this->add_control(
            'service_subtitle_1_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_1_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );



        $this->end_controls_section();
        /******************** end Service 1 ********************/


        /******************** Service 2 ********************/
        $this->start_controls_section(
            'section_services_2',
            [
                'label' => esc_html__( 'Service #2', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_2',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_2',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_2',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_2',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_2',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 2 1
        $this->add_control(
            'service_subtitle_2_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_2_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 2 2
        $this->add_control(
            'service_subtitle_2_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_2_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 2 3
        $this->add_control(
            'service_subtitle_2_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_2_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 2 4
        $this->add_control(
            'service_subtitle_2_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_2_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 2 ********************/


        /******************** Service 3 ********************/
        $this->start_controls_section(
            'section_services_3',
            [
                'label' => esc_html__( 'Service #3', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_3',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_3',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_3',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_3',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_3',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 3 1
        $this->add_control(
            'service_subtitle_3_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_3_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 3 2
        $this->add_control(
            'service_subtitle_3_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_3_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 3 3
        $this->add_control(
            'service_subtitle_3_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_3_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 3 4
        $this->add_control(
            'service_subtitle_3_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_3_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 3 ********************/


        /******************** Service 4 ********************/
        $this->start_controls_section(
            'section_services_4',
            [
                'label' => esc_html__( 'Service #4', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_4',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_4',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_4',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_4',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_4',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 4 1
        $this->add_control(
            'service_subtitle_4_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_4_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 4 2
        $this->add_control(
            'service_subtitle_4_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_4_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 4 3
        $this->add_control(
            'service_subtitle_4_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_4_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 4 4
        $this->add_control(
            'service_subtitle_4_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_4_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 4 ********************/


        /******************** Service 5 ********************/
        $this->start_controls_section(
            'section_services_5',
            [
                'label' => esc_html__( 'Service #5', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_5',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_5',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_5',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_5',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_5',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 5 1
        $this->add_control(
            'service_subtitle_5_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_5_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 5 2
        $this->add_control(
            'service_subtitle_5_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_5_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 5 3
        $this->add_control(
            'service_subtitle_5_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_5_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 5 4
        $this->add_control(
            'service_subtitle_5_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_5_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 5 ********************/



        /******************** Service 6 ********************/
        $this->start_controls_section(
            'section_services_6',
            [
                'label' => esc_html__( 'Service #6', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_6',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_6',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_6',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_6',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_6',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 6 1
        $this->add_control(
            'service_subtitle_6_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_6_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 6 2
        $this->add_control(
            'service_subtitle_6_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_6_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 6 3
        $this->add_control(
            'service_subtitle_6_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_6_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 6 4
        $this->add_control(
            'service_subtitle_6_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_6_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 6 ********************/


        /******************** Service 7 ********************/
        $this->start_controls_section(
            'section_services_7',
            [
                'label' => esc_html__( 'Service #7', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_7',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_7',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_7',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_7',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_7',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 7 1
        $this->add_control(
            'service_subtitle_7_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_7_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 7 2
        $this->add_control(
            'service_subtitle_7_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_7_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 7 3
        $this->add_control(
            'service_subtitle_7_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_7_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 7 4
        $this->add_control(
            'service_subtitle_7_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_7_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 7 ********************/


        /******************** Service 8 ********************/
        $this->start_controls_section(
            'section_services_8',
            [
                'label' => esc_html__( 'Service #8', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_8',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_8',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_8',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_8',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_8',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 8 1
        $this->add_control(
            'service_subtitle_8_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_8_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 8 2
        $this->add_control(
            'service_subtitle_8_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_8_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 8 3
        $this->add_control(
            'service_subtitle_8_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_8_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 8 4
        $this->add_control(
            'service_subtitle_8_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_8_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 8 ********************/



        /******************** Service 9 ********************/
        $this->start_controls_section(
            'section_services_9',
            [
                'label' => esc_html__( 'Service #9', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_9',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_9',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_9',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_9',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_9',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 9 1
        $this->add_control(
            'service_subtitle_9_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_9_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 9 2
        $this->add_control(
            'service_subtitle_9_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_9_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 9 3
        $this->add_control(
            'service_subtitle_9_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_9_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 9 4
        $this->add_control(
            'service_subtitle_9_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_9_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 9 ********************/


        /******************** Service 10 ********************/
        $this->start_controls_section(
            'section_services_10',
            [
                'label' => esc_html__( 'Service #10', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_10',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_10',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_10',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_10',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_10',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 10 1
        $this->add_control(
            'service_subtitle_10_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_10_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 10 2
        $this->add_control(
            'service_subtitle_10_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_10_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 10 3
        $this->add_control(
            'service_subtitle_10_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_10_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 10 4
        $this->add_control(
            'service_subtitle_10_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_10_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 10 ********************/


        /******************** Service 11 ********************/
        $this->start_controls_section(
            'section_services_11',
            [
                'label' => esc_html__( 'Service #11', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_11',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_11',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_11',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_11',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_11',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 11 1
        $this->add_control(
            'service_subtitle_11_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_11_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 11 2
        $this->add_control(
            'service_subtitle_11_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_11_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 11 3
        $this->add_control(
            'service_subtitle_11_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_11_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 11 4
        $this->add_control(
            'service_subtitle_11_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_11_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 11 ********************/



        /******************** Service 12 ********************/
        $this->start_controls_section(
            'section_services_12',
            [
                'label' => esc_html__( 'Service #12', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_12',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_12',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_12',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_12',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_12',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 12 1
        $this->add_control(
            'service_subtitle_12_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_12_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 12 2
        $this->add_control(
            'service_subtitle_12_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_12_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 12 3
        $this->add_control(
            'service_subtitle_12_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_12_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 12 4
        $this->add_control(
            'service_subtitle_12_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_12_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 12 ********************/


        /******************** Service 13 ********************/
        $this->start_controls_section(
            'section_services_13',
            [
                'label' => esc_html__( 'Service #13', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_13',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_13',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_13',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_13',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_13',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 13 1
        $this->add_control(
            'service_subtitle_13_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_13_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 13 2
        $this->add_control(
            'service_subtitle_13_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_13_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 13 3
        $this->add_control(
            'service_subtitle_13_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_13_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 13 4
        $this->add_control(
            'service_subtitle_13_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_13_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 13 ********************/


        /******************** Service 14 ********************/
        $this->start_controls_section(
            'section_services_14',
            [
                'label' => esc_html__( 'Service #14', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_14',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_14',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_14',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_14',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_14',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 14 1
        $this->add_control(
            'service_subtitle_14_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_14_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 14 2
        $this->add_control(
            'service_subtitle_14_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_14_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 14 3
        $this->add_control(
            'service_subtitle_14_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_14_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 14 4
        $this->add_control(
            'service_subtitle_14_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_14_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 14 ********************/


        /******************** Service 15 ********************/
        $this->start_controls_section(
            'section_services_15',
            [
                'label' => esc_html__( 'Service #15', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon_15',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => Controls_Manager::ICONS,
                'default' => [],
            ]
        );

        $this->add_control(
            'service_title_15',
            [
                'label' => __( 'Service Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_description_15',
            [
                'label' => __( 'Service Description', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '',
                'placeholder' => __( 'Type your description here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'service_section_color_15',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Core\Schemes\Color::get_type(),
                    'value' => Core\Schemes\Color::COLOR_1,
                ],
            ]
        );

        $this->add_control(
            'service_section_bg_img_15',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        // services 15 1
        $this->add_control(
            'service_subtitle_15_1',
            [
                'label' => __( 'Service SubTitle 1', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_15_1',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 15 2
        $this->add_control(
            'service_subtitle_15_2',
            [
                'label' => __( 'Service SubTitle 2', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_15_2',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 15 3
        $this->add_control(
            'service_subtitle_15_3',
            [
                'label' => __( 'Service SubTitle 3', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_15_3',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );

        // services 15 4
        $this->add_control(
            'service_subtitle_15_4',
            [
                'label' => __( 'Service SubTitle 4', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'placeholder' => __( 'Type your title here', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'list_15_4',
            [
                'label' => esc_html__( 'List', 'mola_core' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_service_title',
                        'label' => esc_html__( 'Service title', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price',
                        'label' => esc_html__( 'Service price', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content',
                        'label' => esc_html__( 'Content', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],

                ],
                'title_field' => '{{{list_service_title}}}',
            ]
        );


        $this->end_controls_section();
        /******************** end Service 15 ********************/



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
                'default' => esc_html__( 'Book Appointment' , 'mola_core' ),
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
            'booked_plugin',
            [
                'label' => __( 'Booked plugin', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'booked_wp_shortcode',
            [
                'label' => __( 'Shortcode', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'description' => __( 'Leave empty if you are not going to use Booked plugin', 'plugin-domain' ),
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
                    'booked' => 'Booked plugin',
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


        $this->end_controls_section();
        /* END */

    }

    protected function render( $instance = [] ) {
        $all_settings = $this->get_settings_for_display();
        ?>

        <div class="art-full-page-services">

            <div class="art-full-page-services-wrapper">


                <div id="scroll-spy" class="art-services-tabs-left">
                    <div class="theiaStickySidebar">

                        <?php for($t = 1; $t <= 15; $t++): ?>
                            <?php if($all_settings['service_title_' . $t]): ?>
                                <ul class="art-service-full-page-tabs art-no-list-style">
                                    <li>
                                        <a href="#service<?php echo $t; ?>">
                                            <?php Icons_Manager::render_icon( $all_settings['service_icon_' . $t] ); ?>
                                            <span class="art-first-cl"><?php echo esc_html($all_settings['service_title_' . $t]); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                         <?php endfor; ?>


                    </div>
                </div>



                <div class="art-services-tabs-center">
                    <div class="theiaStickySidebar scroll-spy-sections">


                         <?php for($i = 1; $i <= 15; $i++): ?>

                             <?php if($all_settings['service_title_' . $i]): ?>
                                <div id="service<?php echo $i; ?>" class="art-first-cl art-service-wrapper" <?php if($all_settings['service_section_color_' . $i]){ echo 'style="background-color:'. $all_settings['service_section_color_' . $i] .'"';} ?>>

                                <div class="art-service-data"><!-- service container -->

                                    <div class="art-service-head">
                                        <h2 class="service-head-title"><?php echo $all_settings['service_title_' . $i]; ?></h2>
                                        <div class="art-head-desc">
                                            <?php echo $all_settings['service_description_' . $i]; ?>
                                        </div>

                                    </div>


                                    <?php for($j = 1; $j <= 4; $j++): ?>

                                    <?php if($all_settings['service_subtitle_'.$i.'_'. $j]): ?>
                                        <h5 class="art-tabs-subtitle"><?php echo $all_settings['service_subtitle_'.$i.'_'. $j]; ?></h5>
                                    <?php endif; ?>

                                        <div class="art-service-block">

                                            <?php foreach ($all_settings['list_'.$i.'_'. $j] as $item): ?>

                                                <?php if($item['list_service_title']): ?>
                                                    <div class="art-service-item">
                                                        <div class="art-service-top">
                                                            <span class="service-data-title art-heading-seven"><?php echo $item['list_service_title'] ?></span>
                                                            <span class="service-data-price art-body-three-font"><?php echo $item['list_service_price'] ?></span>
                                                        </div>
                                                        <div class="art-service-bottom art-body-three-font">
                                                            <?php echo $item['list_service_content'] ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                            <?php endforeach; ?>

                                        </div>

                                    <?php endfor; ?>

                                    <?php switch ($all_settings['user_choice']):
                                        case 'boxzilla':
                                            ?>

                                            <?php if($all_settings['boxzilla_id']): ?>
                                            <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                                                <a href="javascript:Boxzilla.show(<?php echo $all_settings['boxzilla_id']; ?>);" class="art-button <?php echo $all_settings['button_style']; ?>">
                                                    <?php echo $all_settings['button_text']; ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                            <?php
                                            break;
                                        case 'booked':

                                            if( $all_settings['booked_wp_shortcode'] ):
                                                $art_uniqid = uniqid();
                                                ?>

                                                <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                                                    <a href="#art-booked-popap-<?php echo $art_uniqid; ?>" class="art-button <?php echo $all_settings['button_style']; ?> open-team-popup-link"><?php echo $all_settings['button_text']; ?></a>
                                                </div>

                                                <div id="art-booked-popap-<?php echo $art_uniqid; ?>" class="zoom-anim-dialog art-popap-booked mfp-hide">
                                                    <?php echo do_shortcode( $all_settings['booked_wp_shortcode'] ); ?>
                                                </div>

                                            <?php
                                            endif;

                                            break;
                                        case 'page_link':

                                            ?>

                                            <?php if($all_settings['page_id_to_link']): ?>
                                            <div class="art-widget-button art--aliment-<?php echo $all_settings['content_align']; ?> art--aliment-tablet-<?php echo $all_settings['content_align_tablet']; ?> art--aliment-mobile-<?php echo $all_settings['content_align_mobile']; ?>">
                                                <a href="<?php echo get_permalink( $all_settings['page_id_to_link'] ); ?>" class="art-button <?php echo $all_settings['button_style']; ?>"><?php echo $all_settings['button_text']; ?></a>
                                            </div>
                                        <?php endif; ?>

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


                                <?php if( $all_settings['service_section_bg_img_'  . $i]['url'] ): ?>
                                    <div data-jarallax data-speed="0.2" class="jarallax art-jarallax-block">
                                        <img class="jarallax-img" src="<?php echo $all_settings['service_section_bg_img_'  . $i]['url']; ?>" alt="service image">
                                    </div>
                                <?php endif; ?>


                            </div>
                            <?php endif; ?>

                        <?php endfor; ?>


                    </div>
                </div>




            </div>


        </div>

        <?php

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Full_Page_Services_Infinite );
?>
