    <div class="art-theme-blog art-blog-default-wrapper art-load-more-pagination">
        <div class="art-blog-default-top art-second-bg">

            <?php
            $cherie_current_category = get_query_var( 'category_name' );

            $posts_query = new WP_Query( [
                'post__in' => get_option( 'sticky_posts' ),
                'category_name' => $cherie_current_category,
            ] );
            ?>

            <?php
            $post_top_id = null;

            if( !$posts_query->have_posts() ) {

                $posts_query = new WP_Query( [
                    'category_name' => $cherie_current_category,
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                ] );

            }
            ?>

            <?php if ($posts_query->have_posts()) : while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

                <?php $post_top_id = $post->ID; ?>

                <div class="art-blog-post-sticky-item container">

                    <div class="row">

                        <?php
                        $cherie_sticky_classes = 'offset-lg-3 col-lg-6 art-sticky-post-no-image';

                        $cherie_post_img = cherie_get_theme_mod('art_blog_post_sticky',true, $post->ID);
                        if($cherie_post_img): ?>

                            <?php $cherie_sticky_classes = 'col-md-6'; ?>
                            <div class="art-blog-post-sticky-left col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $cherie_post_img ) ?>" alt="<?php esc_attr_e( 'Post Image', 'cherie' ); ?>">
                                </a>
                            </div>

                        <?php endif; ?>

                        <div class="art-blog-post-sticky-right <?php echo esc_attr($cherie_sticky_classes); ?>">

                            <div class="art-post-sticky-right-data">

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

                        </div>

                    </div>

                </div>

            <?php endwhile; else: ?>

            <?php endif; wp_reset_query(); ?>

        </div><!-- /.art-blog-default-top -->

        <?php get_template_part( 'template-parts/blog-archive/blog-cat-part' ); ?>

        <div class="art-blog-posts-default">

            <div class="container">

                <div class="row art-all-posts-itself">

                    <?php
                    $paged_posts = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $posts_query = new WP_Query( [
                        'post__not_in' => [ get_option( 'sticky_posts' ), $post_top_id ],
                        'category_name' => $cherie_current_category,
                        'paged' => $paged_posts,
                    ] );
                    ?>

                    <?php if ($posts_query->have_posts()) : while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

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

                    <?php endwhile; else: ?>
                        <?php get_template_part('template-parts/blog-archive/not-found'); ?>
                    <?php endif; wp_reset_query(); ?>

                </div>
            </div>

            <div class="container art-blog-pagination-wrapper">

                <div class="art-button-container art-load-more-button-container">
                    <a href="#load-more" class="art-button art-button-light art-button-load-more"><?echo esc_html__('Load more', 'cherie'); ?></a>
                </div>

                <?php get_template_part('template-parts/pagination/pagination'); ?>
            </div>

        </div>

    </div>