<div class="art-theme-blog art-blog-sticky-wrapper art-load-more-pagination">

    <?php $cherie_current_category = get_query_var( 'category_name' ); ?>

    <?php get_template_part( 'template-parts/blog-archive/blog-cat-part' ); ?>

    <div class="art-blog-sticky-container">
        <div class="container">

            <div class="row">

                <div class="art-content-left col-md-6">
                    <div class="theiaStickySidebar">

                        <?php
                        $posts_query = new WP_Query( [
                            'post__in' => get_option( 'sticky_posts' )
                        ] );

                        $post_top_id = null;
                        if( !$posts_query->have_posts() ) {

                            $posts_query = new WP_Query( [
                                'posts_per_page' => 1,
                                'order' => 'DESC'
                            ] );
                        }
                        ?>

                        <?php if ($posts_query->have_posts()) : while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

                            <div class="art-sticky-post-itself">

                                <?php
                                $cherie_skicky_post_img = get_the_post_thumbnail($post->ID,'cherie_post_single');
                                if( $cherie_skicky_post_img ): ?>
                                    <a class="art-sticky-post-img" href="<?php the_permalink(); ?>">
                                        <?php echo cherie_wp_kses($cherie_skicky_post_img); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="art-post-cat cat-date-font">
                                    <?php $categories = get_the_category($post->ID); ?>

                                    <?php if( !empty($categories)): ?>
                                        <span class="art-post-cat-itself"><?php echo esc_html( $categories[0]->name); ?></span>
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

                        <?php endwhile; else: ?>

                        <?php endif; wp_reset_query(); ?>

                    </div>
                </div>

                <div class="art-content-right col-md-6">
                    <div class="theiaStickySidebar">

                        <div class="art-sticky-posts art-all-posts-itself row">

                            <?php
                            $paged_posts = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                            $posts_query = new WP_Query( [
                                'post_type' => 'post',
                                'post__not_in' => [ get_option( 'sticky_posts' ), $post_top_id ],
                                'category_name' => $cherie_current_category,
                                'paged' => $paged_posts
                            ] );
                            ?>

                            <?php if ($posts_query->have_posts()) : while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

                                <div <?php post_class('art-blog-post-item col-lg-6'); ?>>

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

                            <?php endwhile; else: ?>
                                <?php get_template_part('template-parts/blog-archive/not-found'); ?>
                            <?php endif; wp_reset_query(); ?>

                        </div>

                        <div class="art-blog-pagination-wrapper">
                            <?php get_template_part('template-parts/pagination/pagination'); ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="art-archive-blog-bottom-area">
        <div class="container">
            <?php if ( is_active_sidebar( 'subscribe-widget-area' ) ) {
                dynamic_sidebar( 'subscribe-widget-area' );
            } ?>
        </div>
    </div>

</div>