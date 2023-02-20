

<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ): ?>

    <?php if( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) || is_active_sidebar( 'footer-sidebar-3' ) || is_active_sidebar( 'footer-sidebar-4' ) ): ?>
        <footer class="art-main-footer art-second-bg">
            <div class="art-main-footer-container">

                <div class="row">

                    <div class="footer-widget-area art-footer-first-column">
                        <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) {
                            dynamic_sidebar( 'footer-sidebar-1' );
                        } ?>
                    </div>
                    <div class="footer-widget-area art-footer-second-column">
                        <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) {
                            dynamic_sidebar( 'footer-sidebar-2' );
                        } ?>
                    </div>
                    <div class="footer-widget-area art-footer-third-column">
                        <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) {
                            dynamic_sidebar( 'footer-sidebar-3' );
                        } ?>
                    </div>
                    <div class="footer-widget-area art-footer-fourth-column">
                        <?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) {
                            dynamic_sidebar( 'footer-sidebar-4' );
                        } ?>
                    </div>

                </div>

            </div>
        </footer>
    <?php endif; ?>

    <?php if(cherie_get_theme_mod( 'footer_bottom_line_text')): ?>
        <div class="art-footer-bottom-line" <?php if(cherie_get_theme_mod('footer_bottom_line_bg_color')){ echo 'style="background-color:'. cherie_get_theme_mod('footer_bottom_line_bg_color') .'"'; } ?>>
            <div class="container art-footer-bottom-content" style="font-size: <?php echo cherie_get_theme_mod( 'footer_bottom_line_size' ) . 'px;'; ?> padding: <?php echo cherie_get_theme_mod( 'footer_bottom_line_padding' ) . 'px 0;'; ?>">
                <?php echo cherie_get_theme_mod( 'footer_bottom_line_text'); ?>
            </div>
        </div>
    <?php endif; ?>

<?php else: ?>

    <?php elementor_theme_do_location( 'footer' ); ?>

<?php endif; ?>


</div>
</div>

<!-- Hamburger menu start -->
<?php get_template_part('template-parts/footer/content','mobile-menu'); ?>
<!-- Hamburger menu end -->

<?php
if( cherie_is_woocommerce_activated() ){
    if( is_shop() || is_product() || is_product_category() ) { get_template_part('template-parts/footer/content','cart-side'); }
}
?>



<?php wp_footer(); ?>
</body>
</html>