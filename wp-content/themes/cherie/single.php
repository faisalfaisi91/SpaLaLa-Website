<?php get_header(); ?>

<div class="art-theme-blog art-blog-single-wrapper art-load-more-pagination">

    <article <?php post_class(); ?> >

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
            $cherie_single_post_class = '';
            $cherie_single_post_img = get_the_post_thumbnail_url($post->ID,'cherie_post_single');

            if( !$cherie_single_post_img ) {
                $cherie_single_post_class = 'art-single-post-no-image';
            }
        ?>

            <div class="art-single-blog-top art-second-bg <?php echo esc_attr($cherie_single_post_class);?>">

                <?php if( $cherie_single_post_img ): ?>
                    <div class="art-single-post-left">
                        <div class="art-blog-top-image" style="background-image:url(<?php echo esc_url($cherie_single_post_img); ?>)"></div>
                    </div>
                <?php endif; ?>

                <div class="art-single-post-right">
                    <div class="art-single-post-right-data">

                        <div class="art-post-cat cat-date-font">
			                <?php $cherie_categories = get_the_category($post->ID); ?>

                            <?php if( !empty($cherie_categories)): ?>
                                <span class="art-post-cat-itself"><?php echo esc_html( $cherie_categories[0]->name); ?></span>
                            <?php endif; ?>

                            <span class="art-post-published"><?php echo get_the_date(); ?></span>
                        </div>

                        <h1 class="art-post-title art-h2">
			                <?php the_title(); ?>
                        </h1>

                        <div class="art-single-post-author art-body-three-font">
			                <?php echo esc_html__('By', 'cherie') . ' ' . get_the_author(); ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="art-post-content-wrapper">

                <div class="container">

                    <div class="row">
                        <div class="story art-post-the-content offset-lg-1 col-12 col-lg-10">
		                    <?php the_content(); ?>
                        </div>
                    </div>

                    <?php wp_link_pages(array(
                        'before' => '<div class="art-post-pagination"><p class="art-post-pages-wrapper">' . esc_html__('Post Pages:', 'cherie') . '</p>',
                        'after'	=> '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>'
                    )); ?>

	                <?php if(get_the_tags()) : ?>
                        <div class="art-single-post-tags">
                            <h6><?php esc_html_e('Tags', 'cherie'); ?></h6>
                            <span class="art-post-tags">
                                <?php the_tags('', '');  ?>
                            </span>
                        </div>
	                <?php endif; ?>

                    <?php if( in_array( 'elementor/elementor.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ): ?>
                        <div class="art-single-blog-share">
                            <h6><?php esc_html_e('Share', 'cherie') ?></h6>
                            <?php echo cherie_social_sharing_buttons(); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <?php

                //Previus post
                $cherie_prev_post = get_previous_post();
                if($cherie_prev_post) {
                    $cherie_prev_title = get_the_title( $cherie_prev_post->ID);
                    $cherie_prev_thumbnail = get_the_post_thumbnail( $cherie_prev_post->ID, 'thumbnail');

                    if($cherie_prev_thumbnail) {
                        $cherie_prev_thumbnail = '<div class="nav-image">' . $cherie_prev_thumbnail . '</div>';
                    } else {
                        $cherie_prev_thumbnail = '';
                    }
                }

                //Next post
                $cherie_next_post = get_next_post();
                if($cherie_next_post) {
                    $cherie_next_title = get_the_title( $cherie_next_post->ID);
                    $cherie_next_thumbnail = get_the_post_thumbnail( $cherie_next_post->ID, 'thumbnail');

                    if($cherie_next_thumbnail) {
                        $cherie_next_thumbnail = '<div class="nav-image">' . $cherie_next_thumbnail . '</div>';
                    } else {
                        $cherie_next_thumbnail= '';
                    }
                }

                $cherie_args = '';

                if( $cherie_prev_post && $cherie_next_post ) {
                    $cherie_args = [
                        'prev_text'  => '<div class="post-nav-prev">'.$cherie_prev_thumbnail.'<div class="nav-data"><span class="art-nav-direction art-h9-css-light">'. esc_html__('previous article', 'cherie') .'</span><span class="art-heading-seven">'.$cherie_prev_title.'</span></div></div>',
                        'next_text'  => '<div class="post-nav-next"><div class="nav-data"><span class="art-nav-direction art-h9-css-light">'. esc_html__('next article', 'cherie') .'</span><span class="art-heading-seven">'.$cherie_next_title.'</span></div>'.$cherie_next_thumbnail.'</div>',
                    ];
                } elseif ( $cherie_prev_post ) {
                    $cherie_args = [
                        'prev_text'  => '<div class="post-nav-prev">'.$cherie_prev_thumbnail.'<div class="nav-data"><span class="art-nav-direction art-h9-css-light">'. esc_html__('previous article', 'cherie') .'</span><span class="art-heading-seven">'.$cherie_prev_title.'</span></div></div>'
                    ];
                } elseif ($cherie_next_post){
                    $cherie_args = [
                        'next_text'  => '<div class="post-nav-next"><div class="nav-data"><span class="art-nav-direction art-h9-css-light">'. esc_html__('next article', 'cherie') .'</span><span class="art-heading-seven">'.$cherie_next_title.'</span></div>'.$cherie_next_thumbnail.'</div>',
                    ];
                }

                ?>

                <?php if( $cherie_args != '' ): ?>
                    <div class="art-single-navigation">
                        <div class="container">
                            <?php the_post_navigation( $cherie_args ); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="container">

                    <?php $cherie_related_posts = cherie_get_related_posts( $post->ID, 4 ); ?>

                    <?php if ($cherie_related_posts->have_posts()) : ?>

                        <div class="art-single-related-posts">
                            <h2 class="art-related-posts-title art-h5"><?php esc_html_e('Related posts', 'cherie') ?></h2>

                            <div class="row">

                                <?php while ($cherie_related_posts->have_posts()) : $cherie_related_posts->the_post(); ?>

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
                                            <?php $cherie_categories = get_the_category($post->ID); ?>

                                            <?php if( !empty($cherie_categories)): ?>
                                                <span class="art-post-cat-itself"><?php echo esc_html( $cherie_categories[0]->name); ?></span>
                                            <?php endif; ?>

                                            <span class="art-post-published"><?php echo get_the_date(); ?></span>
                                        </div>

                                        <div class="art-post-data">
                                            <h3 class="art-post-title art-heading-seven">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                        </div>

                                    </div>

                                <?php endwhile; ?>

                            </div>

                        </div>

                    <?php endif; wp_reset_query(); ?>

                    <div class="row art-single-post-comments">

                        <div class="offset-md-2 col-12 col-md-8">
	                        <?php if (comments_open() || get_comments_number()) : ?>
		                        <?php comments_template(); ?>
	                        <?php endif; ?>
                        </div>

                    </div>

                </div>

            </div>

        <?php endwhile; else: ?>

        <?php endif; wp_reset_query(); ?>

    </article>

</div>

<?php get_footer(); ?>