<div class="art-blog-default-wrapper art-load-more-pagination art-blog-search-result">

    <?php if (have_posts()) : ?>
        <div class="art-blog-default-top container">
            <div class="art-h2 art-search-result-title">
                <?php echo get_search_query(); ?>
            </div>
            <p class="art-body-three-font">
                <?php global $wp_query;
                echo esc_html( $wp_query->found_posts ) . esc_html__(' Results', 'cherie'); ?>
            </p>
        </div><!-- /.art-blog-default-top -->

        <div class="art-blog-posts-default">
            <div class="container">

                <div class="row art-all-posts-itself">

                    <?php while (have_posts()) : the_post(); ?>

                        <div <?php post_class('art-blog-post-item col-sm-6 col-lg-3'); ?>>

                            <?php
                            $cherie_post_archive_img = get_the_post_thumbnail($post->ID,'large');
                            if($cherie_post_archive_img): ?>
                                <div class="art-post-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo cherie_wp_kses($cherie_post_archive_img); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="art-post-cat cat-date-font">
                                <?php $categories = get_the_category($post->ID); ?>

                                <?php if( !empty($categories)): ?>
                                    <span class="art-post-cat-itself"><?php echo esc_html( $categories[0]->name); ?></span>
                                <?php endif; ?>

                                <span class="art-post-published"><?php echo get_the_date(); ?></span>
                            </div>

                            <div class="art-post-data">
                                <h2 class="art-post-title art-heading-seven">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>

                        </div>

                    <?php endwhile; ?>

                </div>

            </div>

            <div class="container art-blog-pagination-wrapper">

                <div class="art-load-more-wrapper">
                    <div class="art-button-container art-load-more-button-container">
                        <a href="/" class="art-button art-button-light art-button-load-more"><?php echo esc_html__('Load more', 'cherie'); ?></a>
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

                <?php get_template_part('template-parts/pagination/pagination'); ?>
            </div>

        </div>

    <?php else: ?>

        <div class="art-blog-default-top container">

            <div class="art-h2 art-search-result-title">
                <?php echo get_search_query(); ?>
            </div>
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