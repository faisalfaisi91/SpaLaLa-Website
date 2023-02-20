<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Full_Page_Services extends Widget_Base {

	public function get_name() {
		return 'art-full-page-services';
	}

	public function get_title() {
		return esc_html__( 'Full Page Services', 'mola_core' );
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


	    /** Section Service 1 **/

		$this->start_controls_section(
			'section_services',
			[
				'label' => esc_html__( 'Services', 'mola_core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);



		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'mola_core' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_service_icon',
						'label' => esc_html__( 'Custom Icons', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::ICONS,
					],
					[
						'name' => 'list_service_title',
						'label' => esc_html__( 'Service title', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_desc',
						'label' => esc_html__( 'Description', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => '',
						'show_label' => true,
					],
					[
						'name' => 'hr1',
						'type' => Controls_Manager::DIVIDER
					],
					[
						'name' => 'list_service_subtitle_1',
						'label' => esc_html__( 'Service subtitle #1', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'hr11',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_1',
						'label' => esc_html__( 'Service title #1', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_1',
						'label' => esc_html__( 'Service price #1', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_1',
						'label' => esc_html__( 'Content #1', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr2',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_2',
						'label' => esc_html__( 'Service title #2', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_2',
						'label' => esc_html__( 'Service price #2', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_2',
						'label' => esc_html__( 'Content #2', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr3',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_3',
						'label' => esc_html__( 'Service title #3', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_3',
						'label' => esc_html__( 'Service price #3', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_3',
						'label' => esc_html__( 'Content #3', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr4',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_4',
						'label' => esc_html__( 'Service title #4', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_4',
						'label' => esc_html__( 'Service price #4', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_4',
						'label' => esc_html__( 'Content #4', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr5',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_5',
						'label' => esc_html__( 'Service title #5', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_5',
						'label' => esc_html__( 'Service price #5', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_5',
						'label' => esc_html__( 'Content #5', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr6',
						'type' => Controls_Manager::DIVIDER
					],

					[
						'name' => 'list_service_title_6',
						'label' => esc_html__( 'Service title #6', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_price_6',
						'label' => esc_html__( 'Service price #6', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'list_service_content_6',
						'label' => esc_html__( 'Content #6', 'mola_core' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'mola_core' ),
						'show_label' => false,
					],
					[
						'name' => 'hr1',
						'type' => Controls_Manager::DIVIDER
					],

                    [
                        'name' => 'list_service_title_7',
                        'label' => esc_html__( 'Service title #7', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_7',
                        'label' => esc_html__( 'Service price #7', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_7',
                        'label' => esc_html__( 'Content #7', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr2',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_8',
                        'label' => esc_html__( 'Service title #8', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_8',
                        'label' => esc_html__( 'Service price #8', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_8',
                        'label' => esc_html__( 'Content #8', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr3',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_9',
                        'label' => esc_html__( 'Service title #9', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_9',
                        'label' => esc_html__( 'Service price #9', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_9',
                        'label' => esc_html__( 'Content #9', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr4',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_10',
                        'label' => esc_html__( 'Service title #10', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_10',
                        'label' => esc_html__( 'Service price #10', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_10',
                        'label' => esc_html__( 'Content #10', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr5',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_11',
                        'label' => esc_html__( 'Service title #11', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_11',
                        'label' => esc_html__( 'Service price #11', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_11',
                        'label' => esc_html__( 'Content #11', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_12',
                        'label' => esc_html__( 'Service title #12', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_12',
                        'label' => esc_html__( 'Service price #12', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_12',
                        'label' => esc_html__( 'Content #12', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr5',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_13',
                        'label' => esc_html__( 'Service title #13', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_13',
                        'label' => esc_html__( 'Service price #13', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_13',
                        'label' => esc_html__( 'Content #13', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_14',
                        'label' => esc_html__( 'Service title #14', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_14',
                        'label' => esc_html__( 'Service price #14', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_14',
                        'label' => esc_html__( 'Content #14', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_15',
                        'label' => esc_html__( 'Service title #15', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_15',
                        'label' => esc_html__( 'Service price #15', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_15',
                        'label' => esc_html__( 'Content #15', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

                    [
                        'name' => 'list_service_title_16',
                        'label' => esc_html__( 'Service title #16', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_16',
                        'label' => esc_html__( 'Service price #16', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_16',
                        'label' => esc_html__( 'Content #16', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],

					[
						'name' => 'list_service_subtitle_2',
						'label' => esc_html__( 'Service subtitle #2', 'mola_core' ),
						'default' => '',
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'hr11',
						'type' => Controls_Manager::DIVIDER
					],


                    [
                        'name' => 'list_service_title_17',
                        'label' => esc_html__( 'Service title #17', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_17',
                        'label' => esc_html__( 'Service price #17', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_17',
                        'label' => esc_html__( 'Content #17', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_18',
                        'label' => esc_html__( 'Service title #18', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_18',
                        'label' => esc_html__( 'Service price #18', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_18',
                        'label' => esc_html__( 'Content #18', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_19',
                        'label' => esc_html__( 'Service title #19', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_19',
                        'label' => esc_html__( 'Service price #19', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_19',
                        'label' => esc_html__( 'Content #19', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_20',
                        'label' => esc_html__( 'Service title #20', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_20',
                        'label' => esc_html__( 'Service price #20', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_20',
                        'label' => esc_html__( 'Content #20', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_21',
                        'label' => esc_html__( 'Service title #21', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_21',
                        'label' => esc_html__( 'Service price #21', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_21',
                        'label' => esc_html__( 'Content #21', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_22',
                        'label' => esc_html__( 'Service title #22', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_22',
                        'label' => esc_html__( 'Service price #22', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_22',
                        'label' => esc_html__( 'Content #22', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_23',
                        'label' => esc_html__( 'Service title #23', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_23',
                        'label' => esc_html__( 'Service price #23', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_23',
                        'label' => esc_html__( 'Content #23', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_24',
                        'label' => esc_html__( 'Service title #24', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_24',
                        'label' => esc_html__( 'Service price #24', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_24',
                        'label' => esc_html__( 'Content #24', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_25',
                        'label' => esc_html__( 'Service title #25', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_25',
                        'label' => esc_html__( 'Service price #25', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_25',
                        'label' => esc_html__( 'Content #25', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_26',
                        'label' => esc_html__( 'Service title #26', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_26',
                        'label' => esc_html__( 'Service price #26', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_26',
                        'label' => esc_html__( 'Content #26', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_27',
                        'label' => esc_html__( 'Service title #27', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_27',
                        'label' => esc_html__( 'Service price #27', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_27',
                        'label' => esc_html__( 'Content #27', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_28',
                        'label' => esc_html__( 'Service title #28', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_28',
                        'label' => esc_html__( 'Service price #28', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_28',
                        'label' => esc_html__( 'Content #28', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_29',
                        'label' => esc_html__( 'Service title #29', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_29',
                        'label' => esc_html__( 'Service price #29', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_29',
                        'label' => esc_html__( 'Content #29', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_30',
                        'label' => esc_html__( 'Service title #30', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_30',
                        'label' => esc_html__( 'Service price #30', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_30',
                        'label' => esc_html__( 'Content #30', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_31',
                        'label' => esc_html__( 'Service title #31', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_31',
                        'label' => esc_html__( 'Service price #31', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_31',
                        'label' => esc_html__( 'Content #31', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_32',
                        'label' => esc_html__( 'Service title #32', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_32',
                        'label' => esc_html__( 'Service price #32', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_32',
                        'label' => esc_html__( 'Content #32', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_subtitle_3',
                        'label' => esc_html__( 'Service subtitle #3', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'hr11',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_33',
                        'label' => esc_html__( 'Service title #33', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_33',
                        'label' => esc_html__( 'Service price #33', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_33',
                        'label' => esc_html__( 'Content #33', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_34',
                        'label' => esc_html__( 'Service title #34', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_34',
                        'label' => esc_html__( 'Service price #34', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_34',
                        'label' => esc_html__( 'Content #34', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_35',
                        'label' => esc_html__( 'Service title #35', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_35',
                        'label' => esc_html__( 'Service price #35', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_35',
                        'label' => esc_html__( 'Content #35', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_36',
                        'label' => esc_html__( 'Service title #36', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_36',
                        'label' => esc_html__( 'Service price #36', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_36',
                        'label' => esc_html__( 'Content #36', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_37',
                        'label' => esc_html__( 'Service title #37', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_37',
                        'label' => esc_html__( 'Service price #37', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_37',
                        'label' => esc_html__( 'Content #37', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_38',
                        'label' => esc_html__( 'Service title #38', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_38',
                        'label' => esc_html__( 'Service price #38', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_38',
                        'label' => esc_html__( 'Content #38', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_39',
                        'label' => esc_html__( 'Service title #39', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_39',
                        'label' => esc_html__( 'Service price #39', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_39',
                        'label' => esc_html__( 'Content #39', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_40',
                        'label' => esc_html__( 'Service title #40', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_40',
                        'label' => esc_html__( 'Service price #40', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_40',
                        'label' => esc_html__( 'Content #40', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_41',
                        'label' => esc_html__( 'Service title #41', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_41',
                        'label' => esc_html__( 'Service price #41', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_41',
                        'label' => esc_html__( 'Content #41', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_42',
                        'label' => esc_html__( 'Service title #42', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_42',
                        'label' => esc_html__( 'Service price #42', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_42',
                        'label' => esc_html__( 'Content #42', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_43',
                        'label' => esc_html__( 'Service title #43', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_43',
                        'label' => esc_html__( 'Service price #43', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_43',
                        'label' => esc_html__( 'Content #43', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_44',
                        'label' => esc_html__( 'Service title #44', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_44',
                        'label' => esc_html__( 'Service price #44', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_44',
                        'label' => esc_html__( 'Content #44', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_45',
                        'label' => esc_html__( 'Service title #45', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_45',
                        'label' => esc_html__( 'Service price #45', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_45',
                        'label' => esc_html__( 'Content #45', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_46',
                        'label' => esc_html__( 'Service title #46', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_46',
                        'label' => esc_html__( 'Service price #46', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_46',
                        'label' => esc_html__( 'Content #46', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_47',
                        'label' => esc_html__( 'Service title #47', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_47',
                        'label' => esc_html__( 'Service price #47', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_47',
                        'label' => esc_html__( 'Content #47', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_48',
                        'label' => esc_html__( 'Service title #48', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_48',
                        'label' => esc_html__( 'Service price #48', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_48',
                        'label' => esc_html__( 'Content #48', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_subtitle_4',
                        'label' => esc_html__( 'Service subtitle #4', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'hr11',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_49',
                        'label' => esc_html__( 'Service title #49', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_49',
                        'label' => esc_html__( 'Service price #49', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_49',
                        'label' => esc_html__( 'Content #49', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_50',
                        'label' => esc_html__( 'Service title #50', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_50',
                        'label' => esc_html__( 'Service price #50', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_50',
                        'label' => esc_html__( 'Content #50', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_51',
                        'label' => esc_html__( 'Service title #51', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_51',
                        'label' => esc_html__( 'Service price #51', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_51',
                        'label' => esc_html__( 'Content #51', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_52',
                        'label' => esc_html__( 'Service title #52', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_52',
                        'label' => esc_html__( 'Service price #52', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_52',
                        'label' => esc_html__( 'Content #52', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_53',
                        'label' => esc_html__( 'Service title #53', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_53',
                        'label' => esc_html__( 'Service price #53', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_53',
                        'label' => esc_html__( 'Content #53', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_54',
                        'label' => esc_html__( 'Service title #54', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_54',
                        'label' => esc_html__( 'Service price #54', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_54',
                        'label' => esc_html__( 'Content #54', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_55',
                        'label' => esc_html__( 'Service title #55', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_55',
                        'label' => esc_html__( 'Service price #55', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_55',
                        'label' => esc_html__( 'Content #55', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_56',
                        'label' => esc_html__( 'Service title #56', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_56',
                        'label' => esc_html__( 'Service price #56', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_56',
                        'label' => esc_html__( 'Content #56', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_57',
                        'label' => esc_html__( 'Service title #57', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_57',
                        'label' => esc_html__( 'Service price #57', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_57',
                        'label' => esc_html__( 'Content #57', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_58',
                        'label' => esc_html__( 'Service title #58', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_58',
                        'label' => esc_html__( 'Service price #58', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_58',
                        'label' => esc_html__( 'Content #58', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_59',
                        'label' => esc_html__( 'Service title #59', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_59',
                        'label' => esc_html__( 'Service price #59', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_59',
                        'label' => esc_html__( 'Content #59', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_60',
                        'label' => esc_html__( 'Service title #60', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_60',
                        'label' => esc_html__( 'Service price #60', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_60',
                        'label' => esc_html__( 'Content #60', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_61',
                        'label' => esc_html__( 'Service title #61', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_61',
                        'label' => esc_html__( 'Service price #61', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_61',
                        'label' => esc_html__( 'Content #61', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_62',
                        'label' => esc_html__( 'Service title #62', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_62',
                        'label' => esc_html__( 'Service price #62', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_62',
                        'label' => esc_html__( 'Content #62', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_63',
                        'label' => esc_html__( 'Service title #63', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_63',
                        'label' => esc_html__( 'Service price #63', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_63',
                        'label' => esc_html__( 'Content #63', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


                    [
                        'name' => 'list_service_title_64',
                        'label' => esc_html__( 'Service title #64', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_price_64',
                        'label' => esc_html__( 'Service price #64', 'mola_core' ),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'list_service_content_64',
                        'label' => esc_html__( 'Content #64', 'mola_core' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'List Content' , 'mola_core' ),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr6',
                        'type' => Controls_Manager::DIVIDER
                    ],


					[
						'name' => 'service_bg_color',
						'label' => __( 'Background Color', 'plugin-domain' ),
						'type' => Controls_Manager::COLOR,
						'scheme' => [
							'type' => Core\Schemes\Color::get_type(),
							'value' => Core\Schemes\Color::COLOR_1,
						],
					],
					[
                        'name' => 'service_add_image',
						'label' => __( 'Choose Image', 'plugin-domain' ),
						'type' => Controls_Manager::MEDIA,
					]


				],
				'title_field' => '{{{list_service_title}}}',
			]
		);


		$this->end_controls_section();

		/** END Section Service 1 **/



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


        $this->end_controls_section();
        /* END */

	}

	protected function render( $instance = [] ) {
        $all_settings = $this->get_settings_for_display();
		$list = $all_settings['list'];

		?>

		<div class="art-full-page-services">

			<div class="art-full-page-services-wrapper">


				<div id="scroll-spy" class="art-services-tabs-left">
					<div class="theiaStickySidebar">

						<?php if ( $list ): ?>

							<ul class="art-service-full-page-tabs art-no-list-style">
								<?php $art_i = 1; ?>
								<?php foreach ( $list as $item ): ?>

                                        <li>
                                            <a href="#service<?php echo $art_i; ?>">
                                            <?php Icons_Manager::render_icon( $item['list_service_icon'] ); ?>
                                            <span class="art-first-cl"><?php echo esc_html($item['list_service_title']); ?></span>
                                            </a>
                                        </li>

									<?php $art_i++; ?>
								<?php endforeach; ?>
							</ul>

						<?php endif; ?>

					</div>
				</div>



				<div class="art-services-tabs-center">
					<div class="theiaStickySidebar scroll-spy-sections">


						<?php $art_i = 1; ?>
						<?php foreach ( $list as $item ): ?>

                            <div id="service<?php echo $art_i; ?>" class="art-first-cl art-service-wrapper" <?php if($item['service_bg_color']){ echo 'style="background-color:'. $item['service_bg_color'] .'"';} ?>>

                                <div class="art-service-data"><!-- service container -->

                                    <div class="art-service-head">
                                        <h2 class="service-head-title"><?php echo $item['list_service_title']; ?></h2>
                                        <div class="art-head-desc">
			                                <?php echo $item['list_service_desc']; ?>
                                        </div>

                                    </div>


                                    <h5 class="art-tabs-subtitle"><?php echo $item['list_service_subtitle_1']; ?></h5>

                                    <div class="art-service-block">

		                                <?php for($j = 1; $j <= 16; $j++): ?>

			                                <?php if($item['list_service_title_' . $j]): ?>
                                                <div class="art-service-item">
                                                    <div class="art-service-top">
                                                        <span class="service-data-title art-heading-seven"><?php echo $item['list_service_title_' . $j] ?></span>
                                                        <span class="service-data-price art-body-three-font"><?php echo $item['list_service_price_' . $j] ?></span>
                                                    </div>
                                                    <div class="art-service-bottom art-body-three-font">
						                                <?php echo $item['list_service_content_' . $j] ?>
                                                    </div>
                                                </div>
			                                <?php endif; ?>
		                                <?php endfor; ?>

                                    </div>


                                    <h5 class="art-tabs-subtitle"><?php echo $item['list_service_subtitle_2']; ?></h5>

                                    <div class="art-service-block art-second-service-block">

		                                <?php for($j = 17; $j <= 32; $j++): ?>

			                                <?php if($item['list_service_title_' . $j]): ?>
                                                <div class="art-service-item">
                                                    <div class="art-service-top">
                                                        <span class="service-data-title art-heading-seven"><?php echo $item['list_service_title_' . $j] ?></span>
                                                        <span class="service-data-price art-body-three-font"><?php echo $item['list_service_price_' . $j] ?></span>
                                                    </div>
                                                    <div class="art-service-bottom art-body-three-font">
						                                <?php echo $item['list_service_content_' . $j] ?>
                                                    </div>
                                                </div>
			                                <?php endif; ?>
		                                <?php endfor; ?>

                                    </div>


                                    <h5 class="art-tabs-subtitle"><?php echo $item['list_service_subtitle_3']; ?></h5>

                                    <div class="art-service-block art-second-service-block">

                                        <?php for($j = 33; $j <= 48; $j++): ?>

                                            <?php if($item['list_service_title_' . $j]): ?>
                                                <div class="art-service-item">
                                                    <div class="art-service-top">
                                                        <span class="service-data-title art-heading-seven"><?php echo $item['list_service_title_' . $j] ?></span>
                                                        <span class="service-data-price art-body-three-font"><?php echo $item['list_service_price_' . $j] ?></span>
                                                    </div>
                                                    <div class="art-service-bottom art-body-three-font">
                                                        <?php echo $item['list_service_content_' . $j] ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endfor; ?>

                                    </div>


                                    <h5 class="art-tabs-subtitle"><?php echo $item['list_service_subtitle_4']; ?></h5>

                                    <div class="art-service-block art-second-service-block">

                                        <?php for($j = 49; $j <= 64; $j++): ?>

                                            <?php if($item['list_service_title_' . $j]): ?>
                                                <div class="art-service-item">
                                                    <div class="art-service-top">
                                                        <span class="service-data-title art-heading-seven"><?php echo $item['list_service_title_' . $j] ?></span>
                                                        <span class="service-data-price art-body-three-font"><?php echo $item['list_service_price_' . $j] ?></span>
                                                    </div>
                                                    <div class="art-service-bottom art-body-three-font">
                                                        <?php echo $item['list_service_content_' . $j] ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endfor; ?>

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


                                <?php if( $item['service_add_image']['url'] ): ?>
                                    <div data-jarallax data-speed="0.2" class="jarallax art-jarallax-block">
                                        <img class="jarallax-img" src="<?php echo $item['service_add_image']['url']; ?>" alt="service image">
                                    </div>
                                <?php endif; ?>


                            </div>

							<?php $art_i++; ?>
						<?php endforeach; ?>


					</div>
				</div>




			</div>


		</div>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Full_Page_Services );
?>
