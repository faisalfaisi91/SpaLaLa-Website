<div class="art-theme-blog art-blog-sticky-wrapper art-blog-typical">

    <?php if (have_posts()) : ?>

        <div class="art-blog-default-top container">
            <div class="art-h2 art-archive-title">
                <?php echo get_the_archive_title(); ?>
            </div>
        </div><!-- /.art-blog-default-top -->

        <?php get_template_part( 'template-parts/blog-archive/typical-posts-list' ); ?>

    <?php else: ?>

        <div class="art-blog-default-top container">
            <p class="art-body-three-font">
                <?php esc_html_e('Nothing Found', 'cherie'); ?>
            </p>
        </div><!-- /.art-blog-default-top -->

        <div class="container">

            <div class="row art-search-again-wrapper">
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="art-button art-button-light art-search-blog-button"><?php esc_html_e('search again', 'cherie'); ?></a>
            </div>

            <div class="art-search-blog">

                <div class="art-overlay">
                    <span class="art-overlay-close" title="<?php esc_attr_e('Close Overlay', 'cherie'); ?>">
                        <img src="<?php echo CHERIE_THEME_URL . '/assets/css/images/close-big.svg'; ?>" alt="<?php esc_attr_e( 'Close', 'cherie' ); ?>">
                    </span>

                    <div class="art-overlay-wrapper">
                        <form role="search" method="get" action="<?php echo site_url(); ?>" >
                            <input class="art-blog-search-input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e( 'Search', 'cherie' ); ?>" >
                        </form>
                    </div>
                </div>

            </div>

        </div>

    <?php endif; wp_reset_query(); ?>

</div>