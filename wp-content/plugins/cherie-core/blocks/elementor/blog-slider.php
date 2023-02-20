<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Widget_Woo_starshop_posts_slider extends Widget_Base {

	public function get_name() {
		return 'woo-star-posts-slider';
	}

	public function get_title() {
		return esc_html__( 'Posts Slider', 'cherie-core' );
	}

	public function get_icon() {
		return 'fa fa-newspaper-o';
	}

	public function get_keywords() {
		return [ 'woocommerce', 'shop', 'store', 'product', 'archive' ];
	}

	public function get_categories() {
		return [
			'art-cherie-elements',
		];
	}

	public function get_select_categories() {
		$select_categories = [];
		$categories = get_categories( [
			'hide_empty' =>  0,
			'taxonomy'     => 'category',
			'type'         => 'post',
		] );
		if( $categories ){
			foreach( $categories as $cat ){
				$select_categories[$cat->term_id] = $cat->name;
			}
		}
		return $select_categories;
	}



	public function get_order_posts() {
		$order_posts = [
			'' => 'No order',
			'ASC' => 'ASC',
			'DESC ' => 'DESC',
			//'' => ''
		];


		return $order_posts;
	}

	protected function register_controls() {

		$this->add_control(
			'section_art_posts',
			[
				'label' => esc_html__( 'Posts', 'cherie-core' ),
				'type' => Controls_Manager::SECTION,
			]
		);


		$this->add_control(
			'show_cats',
			[
				'label' => esc_html__( 'Show Categories', 'cherie-core' ),
				'type' => Controls_Manager::SELECT2,
				'options' => $this->get_select_categories(),
				'multiple' => true,
				'section' => 'section_art_posts',
				'description' => esc_html__( 'Leave empty to show all categories.', 'cherie-core' ),
			]
		);


		$this->add_control(
			'order',
			[
				'label' => esc_html__( 'Order', 'cherie-core' ),
				'type' => Controls_Manager::SELECT,
				'options' => $this->get_order_posts(),
				'multiple' => false,
				'section' => 'section_art_posts',
				'description' => '',
			]
		);

		$this->add_control(
			'posts_count',
			[
				'label'   => esc_html__( 'Number of Posts', 'cherie-core' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 4,
				'section' => 'section_art_posts',
				'description' => esc_html__( 'Specify the Number of Posts.', 'cherie-core' ),
			]
		);



	}

	protected function render( $instance = [] ) {

		// get our input from the widget settings.

		$settings = $this->get_settings_for_display();
		$posts_count = ! empty( $settings['posts_count'] ) ? (int)$settings['posts_count'] : 4;
		$show_cats = $this->get_settings( 'show_cats' );
		$order = $this->get_settings( 'order' );

		?>

		<div class="art-blog-posts art-blog-posts-slider">

			<div class="swiper-container-blog art-blog-posts-container">

				<div class="swiper-wrapper">


					<?php

					$args  = array(
						'post_type'   => 'post',
						'category__in'   => $show_cats,
						'numberposts' => $posts_count,
						'order'       => $order
					);
					$posts = get_posts( $args );



					foreach ( $posts as $post ) { setup_postdata( $post );

						?>

						<div class="swiper-slide art-blog-post-item">

							<div class="art-post-image">
								<a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($post->ID,'full'); ?></a>
							</div>

                            <div class="art-post-cat cat-date-font">
                                <?php $categories = get_the_category($post->ID); ?>

                                <?php if( !empty($categories)): ?>
                                    <span class="art-post-cat-itself"><?php echo $categories[0]->name; ?></span>
                                <?php endif; ?>

                                <span class="art-post-published"><?php echo mysql2date('F j, Y', $post->post_date, false) ?></span>

                            </div>

							<div class="art-post-data">
								<h3 class="art-post-title art-heading-seven"><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h3>
							</div>

						</div>


					<?php } wp_reset_postdata(); ?>


				</div><!-- swiper-wrapper -->

				<!-- Add Scrollbar -->
				<div class="swiper-scrollbar"></div>

				<!-- Add Arrows -->
                <div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>

			</div><!-- swiper-container-blog -->




		</div>

	<?php }

	public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register( new Widget_Woo_starshop_posts_slider );
?>
