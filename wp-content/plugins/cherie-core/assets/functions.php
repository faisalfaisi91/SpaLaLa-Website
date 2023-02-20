<?php


function cherie_do_shortcode($shortcode) {
    return do_shortcode($shortcode);
}




/*
 * Cart Side for WooCommerce
 */

function cherie_woo_side_cart(){
    global $woocommerce;

    //$art_cart_count = count(WC()->cart->get_cart());
    $art_cart_count = $woocommerce->cart->get_cart_contents_count();

    ?>

    <?php if( $art_cart_count > 0 ): ?>

        <div class="art-woo-side-cart-flex">
        <form class="woocommerce-cart-form art-side-cart" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
            <?php do_action( 'woocommerce_before_cart_table' ); ?>

            <div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                <div class="art-cart-side-header">
                    <div class="art-cart-side-left">
                        <span class="art-h6"><?php echo esc_html__('Your Bag', 'cherie-core'); ?></span>
                        <span><?php  echo $art_cart_count . ' ' . esc_html__('items', 'cherie-core'); ?></span>
                    </div>

                    <i class="icon-cherie_close art-cart-side-close"></i>
                </div>

                <?php
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <div class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">


                            <div class="product-thumbnail">
                                <?php
                                $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                if ( ! $product_permalink ) {
                                    echo $thumbnail; // PHPCS: XSS ok.
                                } else {
                                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                }
                                ?>
                            </div>

                            <div class="product-data">

                                <div class="product-name art-heading-eight" data-title="<?php esc_attr_e( 'Product', 'cherie-core' ); ?>">
                                    <?php
                                    if ( ! $product_permalink ) {
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                    } else {
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                    }

                                    do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                    // Meta data.
                                    echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                    // Backorder notification.
                                    if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'cherie-core' ) . '</p>', $product_id ) );
                                    }
                                    ?>
                                </div>

                                <div class="product-price art-body-three-font" data-title="<?php esc_attr_e( 'Price', 'cherie-core' ); ?>">
                                    <?php
                                    echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?>
                                </div>

                                <div class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'cherie-core' ); ?>">

                                    <div class="art-quantity-title art-body-three-font">
                                        <span><?php esc_html_e('Quantity', 'cherie-core'); ?></span>
                                        <span><?php echo $cart_item['quantity']; ?></span>
                                    </div>

                                </div>

                                <div class="product-remove">
                                    <?php
                                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="icon-cherie_close"></i></a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_html__( 'Remove this item', 'cherie-core' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ),
                                        $cart_item_key
                                    );
                                    ?>
                                </div>

                            </div>


                        </div>
                        <?php
                    }
                }

                ?>


            </div>

            <?php do_action( 'woocommerce_after_cart_table' ); ?>
        </form>

        <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

        <div class="cart-collaterals">

            <div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

                <div class="art-cart-totals-top">
                    <span class="art-heading-seven"><?php esc_html_e('Subtotal', 'cherie-core'); ?></span>
                    <span class="art-side-cart-total-price art-body-two-font"><?php wc_cart_totals_order_total_html(); ?></span>
                </div>

                <div class="art-cart-totals-bottom wc-proceed-to-checkout">

                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="art-button art-button-light"><?php esc_html_e('View Bag', 'cherie-core'); ?></a>

                    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button art-button art-button-dark alt wc-forward">
                        <?php esc_html_e( 'Checkout', 'cherie-core' ); ?>
                    </a>
                </div>


            </div>

        </div>
    </div>


    <?php else: ?>

        <div class="art-cart-side-header">
            <div class="art-cart-side-left">
                <span class="art-h6"><?php echo esc_html__('Your Bag', 'cherie-core'); ?></span>
            </div>

            <i class="icon-cherie_close art-cart-side-close"></i>
        </div>

        <div class="art-cart-side-empty">
            <div class="cart-side-empty-data">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="13" r="7.5" stroke="black"/>
                    <path d="M11.4386 12.9678C11.4556 12.7047 11.6739 12.5 11.9376 12.5H36.0624C36.3261 12.5 36.5444 12.7047 36.5614 12.9678L38.4324 41.9678C38.451 42.256 38.2222 42.5 37.9334 42.5H10.0666C9.77779 42.5 9.54904 42.256 9.56763 41.9678L11.4386 12.9678Z" fill="#F6EBE7" stroke="black"/>
                    <rect x="16" y="18" width="2" height="2" fill="black"/>
                    <rect x="30" y="18" width="2" height="2" fill="black"/>
                    <rect x="19" y="29" width="10" height="1" fill="black"/>
                </svg>
                <span class="art-cart-side-empty-title art-h6"><?php esc_html_e('Your Bag is Empty', 'cherie-core') ?></span>
            </div>

        </div>

    <?php endif; ?>




<?php
}






/**
 * Add Needed Post Types
 */
function cherie_init_post_types() {
    if (function_exists('cherie_get_post_types')) {
        foreach (cherie_get_post_types() as $type => $options) {
            cherie_add_post_type($type, $options['config'], $options['singular'], $options['multiple']);
        }
    }
}
add_action('init', 'cherie_init_post_types');

/**
 * Add Needed Taxonomies
 */
function cherie_init_taxonomies() {
    if (function_exists('cherie_get_taxonomies')) {
        foreach (cherie_get_taxonomies() as $type => $options) {
            cherie_add_taxonomy($type, $options['for'], $options['config'], $options['singular'], $options['multiple']);
        }
    }
}
add_action('init', 'cherie_init_taxonomies');


/**
 * Register Post Type Wrapper
 * @param string $name
 * @param array $config
 * @param string $singular
 * @param string $multiple
 */
function cherie_add_post_type($name, $config, $singular = 'Entry', $multiple = 'Entries') {
    if (!isset($config['labels'])) {
        $config['labels'] = array(
            'name' => $multiple,
            'singular_name' => $singular,
            'not_found'=> 'No ' . $multiple . ' Found',
            'not_found_in_trash'=> 'No ' . $multiple . ' found in Trash',
            'edit_item' => 'Edit ', $singular,
            'search_items' => 'Search ' . $multiple,
            'view_item' => 'View ', $singular,
            'new_item' => 'New ' . $singular,
            'add_new' => 'Add New',
            'add_new_item' => 'Add New ' . $singular,
        );
    }

    register_post_type($name, $config);
}

/**
 * Register taxonomy wrapper
 * @param string $name
 * @param mixed $object_type
 * @param array $config
 * @param string $singular
 * @param string $multiple
 */
function cherie_add_taxonomy($name, $object_type, $config, $singular = 'Entry', $multiple = 'Entries') {

    if (!isset($config['labels'])) {
        $config['labels'] = array(
            'name' => $multiple,
            'singular_name' => $singular,
            'search_items' =>  'Search ' . $multiple,
            'all_items' => 'All ' . $multiple,
            'parent_item' => 'Parent ' . $singular,
            'parent_item_colon' => 'Parent ' . $singular . ':',
            'edit_item' => 'Edit ' . $singular,
            'update_item' => 'Update ' . $singular,
            'add_new_item' => 'Add New ' . $singular,
            'new_item_name' => 'New ' . $singular . ' Name',
            'menu_name' => $singular,
        );
    }

    register_taxonomy($name, $object_type, $config);
}

/**
 * Sets up a custom post type to attach image to.  This allows us to have
 * individual galleries for different uploaders.
 */

if ( ! function_exists( 'optionsframework_mlu_init' ) ) {
    function optionsframework_mlu_init () {
        register_post_type( 'optionsframework', array(
            'labels' => array(
                'name' => __( 'Theme Options Media', 'cherie-core' ),
            ),
            'show_ui' => false,
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => false,
            'supports' => array( 'title', 'editor' ),
            'query_var' => false,
            'can_export' => true,
            'show_in_nav_menus' => false,
            'public' => false
        ) );
    }
}


/**
 * Add post types that are used in the theme
 *
 * @return array
 */
function cherie_get_post_types() {
    return [

        'Career' => [
            'config' => [
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => false,
                'show_in_rest' => true,
                'supports'=> [
                    'title',
                    'editor',
                    'thumbnail',
                ],
            ],
            'singular' => 'Career',
            'multiple' => 'Career',
            'columns'    => [
                'first_image',
            ]
        ],

        'Courses' => [
            'config' => [
                'public' => true,
                'menu_position' => 21,
                'has_archive'   => false,
                'show_in_rest' => true,
                'supports'=> [
                    'title',
                    'editor',
                    'thumbnail',
                ],
            ],
            'singular' => 'Courses',
            'multiple' => 'Courses',
            'columns'    => [
                'first_image',
            ]
        ],

    ];
}



/**
 * Add taxonomies that are used in theme
 *
 * @return array
 */
function cherie_get_taxonomies() {
    return [
        /*'goods-category'    => [
            'for'        => ['goods'],
            'config'    => [
                'sort'        => true,
                'args'        => ['orderby' => 'term_order'],
                'hierarchical' => true,
            ],
            'singular'    => 'Category',
            'multiple'    => 'Categories',
        ],*/
    ];
}



