<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_Mention extends Widget_Base {

	public function get_name() {
		return 'art-mention';
	}

	public function get_title() {
		return __( 'Mention', 'cherie-core' );
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
			'section_contact_us',
			[
				'label' => __( 'Heading', 'cherie' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'list',
			[
				'label' => __( 'List', 'cherie' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_brand',
						'label' => __( 'Image', 'cherie' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'list_content',
						'label' => __( 'Content', 'cherie' ),
						'type' => Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'cherie' ),
						'show_label' => false,
					],
					[
						'name' => 'link_text',
						'label' => __( 'Link text', 'cherie' ),
						'type' => Controls_Manager::TEXT,
						'placeholder' => __( 'Type your title here', 'plugin-domain' ),
						'default' => __( 'Read Full Article', 'plugin-domain' ),
					],
					[
						'name' => 'list_link',
						'label' => __( 'Link', 'cherie' ),
						'type' => Controls_Manager::URL,
						'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
						'show_external' => true,
						'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						],
					],
				],
				'title_field' => 'Item',
			]
		);

		$this->end_controls_section();
		/* END */



        /* START TAB_STYLE */
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__( 'Style Settings', 'cherie' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'message_class',
            [
                'label' => __( 'Message Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );

        $this->add_control(
            'link_class',
            [
                'label' => __( 'Link Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );

        $this->add_control(
            'tabs_class',
            [
                'label' => __( 'Tabs Class', 'plugin-domain' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'placeholder' => '',
            ]
        );

        $this->end_controls_section();
        /* END */


	}

	protected function render( $instance = [] ) {

		$art_mention_id = uniqid('art-');
		?>

		<div class="art-mention">
			<div class="art-mention-content">
				<?php
				$settings = $this->get_settings_for_display();

				if ( $settings['list'] ):?>



                    <div class="art-mention-info">
						<?php $art_i = 1; ?>
						<?php foreach ( $settings['list'] as $item ): ?>

                            <div data-id="<?php echo $art_i; ?>" class="art-mention-item <?php echo ($art_i == 1) ? 'art-display-block':'art-display-none'; ?>">

                                <div class="art-text-title-style art-mention-content-data art-h2 <?php echo $settings['message_class']; ?>">
                                    <?php echo $item['list_content']; ?>
                                </div>

                                <?php if($item['list_link']['url']): ?>
                                    <?php
                                    $target = $item['list_link']['is_external'] ? ' target="_blank"' : '';
                                    $nofollow = $item['list_link']['nofollow'] ? ' rel="nofollow"' : '';
                                    ?>
                                    <div class="art-widget-button <?php echo $settings['link_class']; ?>">
                                        <a href="<?php echo $item['list_link']['url']; ?>" <?php echo $target . $nofollow; ?>><?php echo $item['link_text']; ?></a>
                                    </div>
                                <?php endif; ?>

                                <?php $art_i++; ?>

                            </div>

						<?php endforeach ;?>
                    </div>

					<ul class="art-mention-tabs art-no-list-style <?php echo $settings['tabs_class']; ?>">
						<?php $art_i = 1; ?>
						<?php foreach ( $settings['list'] as $item ): ?>
							<li data-id="<?php echo $art_i; ?>" class="<?php echo ($art_i == 1) ? 'art-active':'art-no-active'; ?>">
								<img src="<?php echo $item['list_brand']['url']; ?>" alt="Mention">
							</li>
							<?php $art_i++; ?>
						<?php endforeach; ?>
					</ul>

				<?php endif; ?>
			</div>

		</div>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_Mention );
?>
