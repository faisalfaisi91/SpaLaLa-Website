<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Widget_Woo_starshop_products_slider extends Widget_Base {

	public function get_name() {
		return 'woo-star-products-slider';
	}

	public function get_title() {
		return esc_html__( 'Woo Products Slider', 'mola_core' );
	}

	public function get_icon() {
		return 'eicon-products';
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
		$select_categories = array();
		$categories = get_categories( array(
			'hide_empty' =>  0,
			'taxonomy'   =>  'product_cat' // mention taxonomy here.
		) );
		if( $categories ){
			foreach( $categories as $cat ){
				//$select_categories[$cat->term_id] = $cat->name;
				$select_categories[$cat->name] = $cat->name;
			}
		}
		return $select_categories;
	}


	public function show_my_products() {
		$show_my_products = array(
			'' => '',
			'featured' => esc_html__( 'Featured products', 'mola_core' )
		);


		return $show_my_products;
	}

	public function get_orderby_products() {
		$orderby_products = array(
			'' => 'No order',
			'comment_count' => esc_html__( 'The most commented', 'mola_core' ),
			'regular_price' => esc_html__( 'By regular price', 'mola_core' ),
			'sale_price' => esc_html__( 'By sale price', 'mola_core' ),
		);


		return $orderby_products;
	}

	public function get_order_products() {
		$order_products = array(
			'' => 'No order',
			'ASC' => 'ASC',
			'DESC ' => 'DESC',
			//'' => ''
		);


		return $order_products;
	}

	protected function register_controls() {

		$this->add_control(
			'section_art_products',
			[
				'label' => esc_html__( 'Products', 'mola_core' ),
				'type' => Controls_Manager::SECTION,
			]
		);

		/*$this->add_control(
			'show_my_products',
			[
				'label' => esc_html__( 'Show', 'mola_core' ),
				'type' => Controls_Manager::SELECT,
				'options' => $this->show_my_products(),
				'multiple' => false,
				'section' => 'section_art_products',
				'description' => '',
			]
		);*/

		/*$this->add_control(
			'show_cats',
			[
				'label' => esc_html__( 'Show Categories', 'mola_core' ),
				'type' => Controls_Manager::SELECT2,
				'options' => $this->get_select_categories(),
				'multiple' => true,
				'section' => 'section_art_products',
				'description' => esc_html__( 'Leave empty to show all categories.', 'mola_core' ),
			]
		);*/

		$this->add_control(
			'orderby',
			[
				'label' => esc_html__( 'Order by', 'mola_core' ),
				'type' => Controls_Manager::SELECT,
				'options' => $this->get_orderby_products(),
				'multiple' => false,
				'section' => 'section_art_products',
				'description' => esc_html__( 'Leave empty if you do not want to sort products.', 'mola_core' ),
			]
		);

		$this->add_control(
			'order',
			[
				'label' => esc_html__( 'Order', 'mola_core' ),
				'type' => Controls_Manager::SELECT,
				'options' => $this->get_order_products(),
				'multiple' => false,
				'section' => 'section_art_products',
				'description' => '',
			]
		);

		$this->add_control(
			'posts_count',
			[
				'label'   => esc_html__( 'Number of Products', 'mola_core' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 4,
				'section' => 'section_art_products',
				'description' => esc_html__( 'Specify the Number of Posts.', 'mola_core' ),
			]
		);


		$this->add_control(
			'product_cols_width',
			[
				'label' => esc_html__( 'Columns number', 'mola_core' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 4,
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 4,
					]
				],
				'size_units' => [ 'px' ],
				'section' => 'section_art_products',
			]
		);


	}

	protected function render( $instance = [] ) {

		// get our input from the widget settings.

		$settings = $this->get_settings();
		$posts_count = ! empty( $settings['posts_count'] ) ? (int)$settings['posts_count'] : 4;

		$show_cats = $this->get_settings( 'show_cats' );
		//$show_my_products = $this->get_settings( 'show_my_products' );
		$orderby = $this->get_settings( 'orderby' );
		$order = $this->get_settings( 'order' );

		$product_cols_width = $this->get_settings( 'product_cols_width' );
		$product_cols_width = ! empty( $product_cols_width['size'] ) ? $product_cols_width['size'] : '';
		$product_cols_width_class = '';



		$art_tax_query = [];


		//if( $show_cats ) {
		if( false ) {

			$art_tax_query = array(
				array(
					'taxonomy' => 'product_cat',
					'field'    => 'name',
					'terms'    => $show_cats
				)
			);
		}




		//var_dump($show_my_products);
		?>

		<div class="art-woo-products-slider woocommerce">

			<div class="swiper-container art-swiper-container">

				<ul class="products art-no-list-style art-products-widget-slider swiper-wrapper">


                    <?php
                    global $post, $product, $woocommerce_loop;

                    $order_meta_key = '';

                    switch ( $orderby ) {
                        case 'regular_price':
                            $orderby = 'meta_value_num';
                            $order_meta_key = '_regular_price';
                            break;
                        case 'sale_price':
                            $orderby = 'meta_value_num';
                            $order_meta_key = '_sale_price';
                            break;
                    }

                    $args  = array(
                        'post_type'   => 'product',
                        'numberposts' => $posts_count,
                        //'tax_query'   => $art_tax_query,
                        'orderby'     => $orderby,
                        'meta_key'    => $order_meta_key,
                        'order'       => $order
                    );
                    $posts = get_posts( $args );



                    foreach ( $posts as $post ) { setup_postdata( $post ); ?>

                        <li class="swiper-slide">
                            <?php
                            /**
                             * Hook: woocommerce_before_shop_loop_item.
                             *
                             * @hooked woocommerce_template_loop_product_link_open - 10
                             */
                            do_action( 'woocommerce_before_shop_loop_item' );

                            /**
                             * Hook: woocommerce_before_shop_loop_item_title.
                             *
                             * @hooked woocommerce_show_product_loop_sale_flash - 10
                             * @hooked woocommerce_template_loop_product_thumbnail - 10
                             */
                            do_action( 'woocommerce_before_shop_loop_item_title' );

                            /**
                             * Hook: woocommerce_shop_loop_item_title.
                             *
                             * @hooked woocommerce_template_loop_product_title - 10
                             */
                            do_action( 'woocommerce_shop_loop_item_title' );

                            /**
                             * Hook: woocommerce_after_shop_loop_item_title.
                             *
                             * @hooked woocommerce_template_loop_rating - 5
                             * @hooked woocommerce_template_loop_price - 10
                             */
                            do_action( 'woocommerce_after_shop_loop_item_title' );

                            /**
                             * Hook: woocommerce_after_shop_loop_item.
                             *
                             * @hooked woocommerce_template_loop_product_link_close - 5
                             * @hooked woocommerce_template_loop_add_to_cart - 10
                             */
                            do_action( 'woocommerce_after_shop_loop_item' );
                            ?>
                        </li>

                    <?php } wp_reset_postdata(); ?>


				</ul>


                <!-- Add Scrollbar -->
                <div class="swiper-scrollbar"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

			</div>

		</div>

	<?php }

	public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register( new Widget_Woo_starshop_products_slider );
?>
