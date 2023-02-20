<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @removed woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>

<div class="art-woo-container-wrapper">
    <div class="art-woo-content-mask"></div>

    <header class="woocommerce-products-header">
        <div class="container">

            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h1 class="art-h2"><?php woocommerce_page_title(); ?></h1>
            <?php endif; ?>

            <?php
            /**
             * Hook: woocommerce_archive_description.
             *
             * @hooked woocommerce_taxonomy_archive_description - 10
             * @hooked woocommerce_product_archive_description - 10
             */
            do_action( 'woocommerce_archive_description' );
            ?>

        </div>
    </header>

    <div class="art-woo-archive-container">
        <div class="container">

            <?php
            if ( woocommerce_product_loop() ) {
                ?>

                <?php
                /**
                 * Hook: woocommerce_before_shop_loop.
                 *
                 * @hooked woocommerce_output_all_notices - 10
                 * @hooked woocommerce_result_count - 20
                 * @hooked - 19
                 * @hooked cherie_show_shop_categories - 20
                 * @hooked woocommerce_catalog_ordering - 30
                 * @hooked cherie_show_shop_cart - 31
                 * @hooked - 32
                 */
                do_action( 'woocommerce_before_shop_loop' );
                ?>

                <div class="art-woo-main-archive woocommerce">
                    <?php
                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );

                        }
                    }

                    woocommerce_product_loop_end();

                    ?>

                </div><!-- /. art-woo-main-archive -->

                <?php

                /**
                 * Hook: woocommerce_after_shop_loop.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
                do_action( 'woocommerce_after_shop_loop' );
            } else {
                /**
                 * Hook: woocommerce_no_products_found.
                 *
                 * @hooked wc_no_products_found - 10
                 */
                do_action( 'woocommerce_no_products_found' );
            }
            ?>

        </div><!-- /.container -->
    </div>

    <?php

    /**
     * Hook: woocommerce_after_main_content.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action( 'woocommerce_after_main_content' );

    /**
     * Hook: woocommerce_sidebar.
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    do_action( 'woocommerce_sidebar' );
    ?>

    <div class="art-shop-subscribe-area">
        <div class="container">
            <?php if ( is_active_sidebar( 'subscribe-widget-area' ) ) {
                dynamic_sidebar( 'subscribe-widget-area' );
            } ?>
        </div>
    </div>

</div><!-- /. art-woo-container-wrapper -->