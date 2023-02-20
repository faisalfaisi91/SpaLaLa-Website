<div class="art-theme-blog art-blog-sticky-wrapper art-blog-typical art-load-more-pagination">

    <?php if (have_posts()) : ?>

    <?php get_template_part( 'template-parts/blog-archive/typical-posts-list' ); ?>

    <?php else: ?>

        <div class="art-blog-default-top container">
            <p class="art-body-three-font"><?php esc_html_e('Nothing Found', 'cherie'); ?></p>
        </div><!-- /.art-blog-default-top -->

    <?php endif; wp_reset_query(); ?>

    <div class="art-archive-blog-bottom-area">
        <div class="container">
            <?php if ( is_active_sidebar( 'subscribe-widget-area' ) ) {
                dynamic_sidebar( 'subscribe-widget-area' );
            } ?>
        </div>
    </div>

</div>