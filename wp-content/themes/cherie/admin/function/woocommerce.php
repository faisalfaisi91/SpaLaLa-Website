<?php
/**
 * Check if WooCommerce is activated
 */
if (!function_exists('cherie_is_woocommerce_activated')) {
    function cherie_is_woocommerce_activated()
    {
        if (class_exists('woocommerce')) {
            return true;
        } else {
            return false;
        }
    }
}

function cherie_search_form($html)
{
    $cherie_search_placeholder = esc_attr__('Type keyword here…', 'cherie');
    $html = str_replace('placeholder="Search...', 'placeholder="' . $cherie_search_placeholder, $html);
    return $html;
}

add_filter('get_search_form', 'cherie_search_form');

/**
 * Create a woo img container hover style
 */
if (class_exists('WooCommerce')) {
    //Declare WooCommerce support
    add_action('after_setup_theme', 'cherie_woocommerce_support');
    function cherie_woocommerce_support()
    {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
}

function cherie_product_loop_title()
{
    echo '<h3 class="woocommerce-loop-product__title art-body-font">' . get_the_title() . '</h3>';
}

// Woo accordion
function cherie_product_accordion()
{
    $tabs = apply_filters('woocommerce_product_tabs', []);

    if (!empty($tabs)) : ?>

        <div class="accordion-product-container">
            <?php foreach ($tabs as $key => $tab): ?>

                <button class="accordion art-heading-seven">
                    <span class="service-name"><?php echo apply_filters('woocommerce_product_' . $key . '_tab_title', esc_html($tab['title']), $key); ?></span>
                </button>

                <div class="panel">

                    <div class="panel-data">
                        <?php call_user_func($tab['callback'], $key, $tab); ?>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>

    <?php endif;
}

// Change woocommerce_gallery_thumbnail
add_filter('woocommerce_get_image_size_gallery_thumbnail', function ($size) {
    return array(
        'width' => 120,
        'height' => 160,
        'crop' => 0,
    );
});

// Load More Pagination
add_action('woocommerce_after_shop_loop', 'cherie_woocommerce_load_more_pagination', 11);
function cherie_woocommerce_load_more_pagination()
{
    ?>

    <div class="container art-shop-pagination-wrapper">

        <div class="art-load-more-wrapper">
            <div class="art-button-container art-load-more-button-container">
                <a href="/"
                   class="art-button art-button-light art-button-load-more"><?php echo esc_html__('Load more', 'cherie'); ?></a>
            </div>
        </div>

        <div class="art-loader-wrapper">
            <div class="art-loader">
                <div class="art-loader-dots">
                    <div class="art-loader-dot"></div>
                    <div class="art-loader-dot"></div>
                    <div class="art-loader-dot"></div>
                </div>
            </div>
        </div>

    </div>

    <?php
}

// change the number of WooCommerce products displayed per page
add_filter('loop_shop_per_page', 'cherie_loop_shop_per_page', 20);
function cherie_loop_shop_per_page($cols)
{
    $cols = 14;
    return $cols;
}

// Display Shop Categories on WooCommerce Archive Page
function cherie_show_shop_categories()
{ ?>

    <?php
    $categories = get_terms([
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
        'orderby' => 'name',
        'order' => 'ASC'
    ]);
    $categories = wp_list_filter($categories, ['parent' => 0]);
    $categories_count = count($categories);
    ?>

    <div class="art-shop-cats<?php if ($categories_count >= 6) {
        echo ' art-shop-cats-compact';
    } ?>">

        <?php $cherie_current = get_query_var('product_cat'); // The name of the taxonomy
        ?>
        <?php if ($cherie_current == ''): ?>

            <?php
            if ($categories_count <= 5): // 5
                ?>

                <ul class="categories">
                    <li class="current_item no_link"><a
                                href="<?php echo get_post_type_archive_link('product'); ?>"><?php esc_html_e('All products', 'cherie'); ?></a>
                    </li>
                    <?php
                    foreach ($categories as $category):
                        $category_link = sprintf(
                            '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                            esc_url(get_term_link($category->term_id)),
                            esc_attr($category->name),
                            esc_html($category->name)
                        );

                        echo cherie_wp_kses($category_link);
                    endforeach;
                    ?>
                </ul>

            <?php
            elseif ($categories_count >= 6): // 6
                ?>

                <ul class="art-categories-dropdown art-no-list-style">
                    <li>
                        <span><?php esc_html_e('All products', 'cherie'); ?></span>
                        <ul class="art-no-list-style">
                            <?php
                            foreach ($categories as $category):
                                $category_link = sprintf(
                                    '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                                    esc_url(get_term_link($category->term_id)),
                                    esc_attr($category->name),
                                    esc_html($category->name)
                                );

                                echo cherie_wp_kses($category_link);
                            endforeach;
                            ?>

                        </ul>
                    </li>
                </ul>

            <?php
            endif;
            ?>


        <?php else: ?>

            <?php
            $categories = get_terms([
                'taxonomy' => 'product_cat',
                'hide_empty' => true,
                'orderby' => 'name',
                'order' => 'ASC'
            ]);

            $categories = wp_list_filter($categories, ['parent' => 0]);
            $categories_count = count($categories);

            if ($categories_count <= 5):
                ?>

                <ul class="categories">
                    <li class="no_link"><a
                                href="<?php echo get_post_type_archive_link('product'); ?>"><?php esc_html_e('All products', 'cherie'); ?></a>
                    </li>
                    <?php

                    foreach ($categories as $category):

                        if ($category->slug == $cherie_current) {
                            $cherie_active_category = ' class="current_item" ';
                        } else {
                            $cherie_active_category = '';
                        }

                        $category_link = sprintf(
                            '<li %4$s><a href="%1$s" alt="%2$s">%3$s</a></li>',
                            esc_url(get_term_link($category->term_id)),
                            esc_attr($category->name),
                            esc_html($category->name),
                            $cherie_active_category
                        );

                        echo cherie_wp_kses($category_link);

                    endforeach;

                    ?>

                </ul>

            <?php
            elseif ($categories_count >= 6):

                foreach ($categories as $category):
                    if ($category->slug == $cherie_current) {
                        $cherie_active_category = $category->name;
                        break;
                    }
                endforeach;
                ?>

                <ul class="art-categories-dropdown art-no-list-style">
                    <li>
                        <span><?php echo esc_html($cherie_active_category); ?></span>
                        <ul class="art-no-list-style">
                            <li>
                                <a href="<?php echo get_post_type_archive_link('product'); ?>"><?php esc_html_e('All products', 'cherie'); ?></a>
                            </li>
                            <?php
                            foreach ($categories as $category):
                                $category_link = sprintf(
                                    '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                                    esc_url(get_term_link($category->term_id)),
                                    esc_attr($category->name),
                                    esc_html($category->name)
                                );

                                echo cherie_wp_kses($category_link);
                            endforeach;
                            ?>

                        </ul>
                    </li>
                </ul>

            <?php
            endif;
            ?>


        <?php endif; ?>

    </div>

    <?php
}

// Display Shop Cart
function cherie_show_shop_cart()
{
    ?>

    <?php if (class_exists('WooCommerce')): ?>
    <div class="s-header__basket-wr woocommerce">
        <?php
        global $woocommerce;
        ?>

        <a class="basket-btn basket-btn_fixed-xs art-open-cart-side" href="/">

            <?php if ($woocommerce->cart->get_cart_contents_count() != 0): ?>
                <?php if (cherie_get_theme_mod('cherie_shop_cart_full_icon')): ?>
                    <img src="<?php echo esc_url(cherie_get_theme_mod('cherie_shop_cart_full_icon')); ?>"
                         alt="<?php esc_attr_e('Shop cart', 'cherie') ?>">
                <?php else: ?>
                    <img src="<?php echo CHERIE_THEME_URL . '/assets/css/images/shopping-cart-full.svg'; ?>"
                         alt="<?php esc_attr_e('Blog comment icon', 'cherie') ?>">
                <?php endif; ?>

                <span class="art-basket-counter basket-btn__counter art-second-cl"><?php echo esc_attr($woocommerce->cart->get_cart_contents_count()); ?></span>
            <?php else: ?>

                <?php if (cherie_get_theme_mod('cherie_shop_cart_icon')): ?>
                    <img src="<?php echo esc_url(cherie_get_theme_mod('cherie_shop_cart_icon')); ?>"
                         alt="<?php esc_attr_e('Shop cart', 'cherie') ?>">
                <?php else: ?>
                    <img src="<?php echo CHERIE_THEME_URL . '/assets/css/images/shopping-cart.svg'; ?>"
                         alt="<?php esc_attr_e('Blog comment icon', 'cherie') ?>">
                <?php endif; ?>

            <?php endif; ?>

        </a>

    </div>
<?php endif; ?>

    <?php
}

/**
 * Add plus and minus buttons to WooCommerce quantity inputs
 */
function cherie_add_script_to_footer()
{
    if (!is_admin()) { ?>
        <script>
            jQuery(document).ready(function ($) {
                let art_input_number = $("input.input-text.qty.text");
                art_input_number.each(function () {
                    var hours = $.trim($(this).val());
                    if (!hours) {
                        $(this).val(0);
                    }
                });
                art_input_number.change(function () {

                    if ($(this).val() === '') {
                        $(this).val(0);
                    }
                });

                $(document).on('click', '.plus', function (e) { // replace '.quantity' with document (without single quote)
                    $input = $(this).prev('input.qty');
                    var val = parseInt($input.val());
                    var step = $input.attr('step');
                    step = 'undefined' !== typeof (step) ? parseInt(step) : 1;
                    $input.val(val + step).change();
                });
                $(document).on('click', '.minus',  // replace '.quantity' with document (without single quote)
                    function (e) {
                        $input = $(this).next('input.qty');
                        var val = parseInt($input.val());
                        var step = $input.attr('step');
                        step = 'undefined' !== typeof (step) ? parseInt(step) : 1;
                        if (val > 0) {
                            $input.val(val - step).change();
                        }
                    });
            });
        </script>
    <?php }
}

add_action('wp_footer', 'cherie_add_script_to_footer');

/**
 * To change add to cart text on single product page
 */
add_filter('woocommerce_product_single_add_to_cart_text', 'cherie_custom_single_add_to_cart_text');
function cherie_custom_single_add_to_cart_text()
{
    return esc_html__('Add to bag', 'cherie');
}

// Add WooCommerce 'Shop' location rule value for ACF
// https://www.advancedcustomfields.com/resources/custom-location-rules/
add_filter('acf/location/rule_values/page_type', 'cherie_acf_location_rules_values_woo_shop');

function cherie_acf_location_rules_values_woo_shop($choices)
{
    $choices['woo-shop-page'] = 'WooCommerce Shop Page';
    return $choices;
}

// Add WooCommerce 'Shop' location rule match
add_filter('acf/location/rule_match/page_type', 'cherie_acf_location_rules_match_woo_shop', 10, 3);
function cherie_acf_location_rules_match_woo_shop($match, $rule, $options)
{
    if (is_admin() && $rule['value'] == 'woo-shop-page' && isset($options['post_id'])) {
        $post_id = $options['post_id'];
        $woo_shop_id = get_option('woocommerce_shop_page_id');

        if ($rule['operator'] == "==") {
            $match = $post_id == $woo_shop_id;
        } elseif ($rule['operator'] == "!=") {
            $match = $post_id != $woo_shop_id;
        }
    }

    return $match;
}

/**
 * Delete a word 'Shipping' from WooCommerce cart page
 */
add_filter('woocommerce_shipping_package_name', 'cherie_shipping_package_name');
function cherie_shipping_package_name($name)
{
    return '';
}

/**
 * Change text on the button
 */
function woocommerce_button_proceed_to_checkout()
{ ?>
    <a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
       class="art-checkout alt wc-forward art-button art-button-dark">
        <?php esc_html_e('Checkout', 'cherie'); ?>
    </a>
    <?php
}

/**
 * Delete labels on Checkout page
 */
add_filter('woocommerce_checkout_fields', 'cherie_wc_checkout_fields_no_label');

// Our hooked in function - $fields is passed via the filter!
// Action: remove label from $fields
function cherie_wc_checkout_fields_no_label($fields)
{
    // loop by category
    foreach ($fields as $category => $value) {
        // loop by fields
        foreach ($fields[$category] as $field => $property) {
            // remove label property
            unset($fields[$category][$field]['label']);
        }
    }
    return $fields;
}

/**
 * Set placeholders on Checkout page
 */
add_filter('woocommerce_default_address_fields', 'cherie_override_default_address_checkout_fields', 20, 1);
function cherie_override_default_address_checkout_fields($address_fields)
{
    $address_fields['first_name']['placeholder'] = esc_html__('First Name *', 'cherie');
    $address_fields['last_name']['placeholder'] = esc_html__('Last Name *', 'cherie');
    $address_fields['company']['placeholder'] = esc_html__('Company Name', 'cherie');
    $address_fields['address_1']['placeholder'] = esc_html__('Street Address *', 'cherie');
    $address_fields['state']['placeholder'] = esc_html__('Country / Region *', 'cherie');
    $address_fields['postcode']['placeholder'] = esc_html__('Zip *', 'cherie');
    $address_fields['city']['placeholder'] = esc_html__('Town / City *', 'cherie');
    return $address_fields;
}

add_filter('woocommerce_checkout_fields', 'cherie_override_billing_checkout_fields', 20, 1);
function cherie_override_billing_checkout_fields($fields)
{
    $fields['billing']['billing_phone']['placeholder'] = esc_html__('Phone *', 'cherie');
    $fields['billing']['billing_email']['placeholder'] = esc_html__('Email Address *', 'cherie');
    return $fields;
}


/**
 * Change number or products per row
 */

require(CHERIE_THEME_PATH . '/admin/function/woocommerce-hooks.php');
