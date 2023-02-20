<div class="art-blog-sticky-container">
    <div class="container">

        <div class="row">

            <div class="art-content-left <?php echo ( is_active_sidebar( 'blog-widget-area' ) ) ? 'col-md-8': 'col-md-12'; ?>">
                <div class="theiaStickySidebar">

                    <?php while (have_posts()) : the_post(); ?>

                        <div <?php post_class('art-sticky-post-itself'); ?>>

                            <?php
                            $cherie_skicky_post_img = get_the_post_thumbnail($post->ID,'cherie_post_single');
                            if( $cherie_skicky_post_img ): ?>
                                <a class="art-sticky-post-img" href="<?php the_permalink(); ?>">
                                    <?php echo cherie_wp_kses($cherie_skicky_post_img); ?>
                                </a>
                            <?php endif; ?>

                            <div class="art-post-cat cat-date-font">
                                <?php $cherie_categories = get_the_category($post->ID); ?>

                                <?php if( !empty($cherie_categories)): ?>
                                    <span class="art-post-cat-itself"><?php echo esc_html( $cherie_categories[0]->name); ?></span>
                                <?php endif; ?>

                                <span class="art-post-published"><?php echo get_the_date(); ?></span>
                            </div>

                            <h2 class="art-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="art-post-excerpt">
                                <?php echo cherie_limit_excerpt(37); ?>
                            </div>

                            <div class="art-post-read-more">
                                <a href="<?php the_permalink(); ?>" class="art-button art-button-light"><?php echo esc_html__('Read Article', 'cherie'); ?></a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <div class="art-blog-pagination-wrapper">
                        <?php get_template_part('template-parts/pagination/pagination'); ?>
                    </div>

                </div>
            </div>

            <?php if ( is_active_sidebar( 'blog-widget-area' ) ): ?>
                <div class="art-content-right col-md-4">
                    <div class="theiaStickySidebar">

                        <div class="art-blog-widget-area">
                            <?php dynamic_sidebar( 'blog-widget-area' ); ?>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

        </div>

    </div>
</div>