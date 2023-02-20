<?php

// Woocommerce Archive

/*
 * Hook: woocommerce_before_main_content
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_single_product', 'woocommerce_breadcrumb', 20);
if (function_exists('cherie_woo_side_cart'))
    add_action('woocommerce_before_single_product', 'cherie_show_shop_cart', 25);

/*
 * Hook: woocommerce_before_shop_loop
 */

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
add_action('woocommerce_before_shop_loop', 'cherie_show_shop_categories', 20);
add_action('woocommerce_before_shop_loop', function () {
    echo '<div class="art-before-shop-loop">';
}, 19);
add_action('woocommerce_before_shop_loop', function () {
    echo '<div class="art-ordering-cart">';
}, 29);
if (function_exists('cherie_woo_side_cart'))
    add_action('woocommerce_before_shop_loop', 'cherie_show_shop_cart', 31);
add_action('woocommerce_before_shop_loop', function () {
    echo '</div>';
}, 32);
add_action('woocommerce_before_shop_loop', function () {
    echo '</div>';
}, 33);

/*
 * Hook: woocommerce_before_main_content
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

/*
 * Hook: woocommerce_after_main_content
 */
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/*
 * Hook: woocommerce_after_shop_loop_item_title
 */
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);


// Woocommerce Archive END

/*
 * Hook: woocommerce_before_shop_loop_item
 */
add_action('woocommerce_before_shop_loop_item', function () {
    echo '<div class="art-product-image">';
}, 11);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_rating', 12);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_thumbnail', 13);
add_action('woocommerce_before_shop_loop_item', function () {
    echo '</div>';
}, 14);

/*
 * Hook: woocommerce_before_shop_loop_item_title
 */
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

/*
 * Hook: woocommerce_shop_loop_item_title
 */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'cherie_product_loop_title', 10);

/*
 * Hook: woocommerce_after_shop_loop_item
 */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


// Woocommerce Single

/*
 * Hook: woocommerce_before_single_product_summary
 */

/*
 * Hook: woocommerce_output_product_data_tabs
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('woocommerce_single_product_summary', 'cherie_product_accordion', 31);
