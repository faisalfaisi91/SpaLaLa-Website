<?php $cherie_current_category = get_query_var( 'category_name' ); ?>

<?php if( $cherie_current_category ): ?>

    <?php $cherie_categories = get_categories( [
        'orderby' => 'name',
        'order'   => 'ASC'
    ] );
    $cherie_cat_count = count($cherie_categories);
    ?>

    <div class="art-blog-cats">
        <div class="container art-categories-wrapper">

            <?php if( $cherie_cat_count <= 4 ): ?>

                <ul class="art-categories art-no-list-style">
                    <li><a href="<?php echo get_post_type_archive_link('post'); ?>"><?php esc_html_e('All articles', 'cherie'); ?></a></li>

                    <?php
                    foreach( $cherie_categories as $category ) :

                        if($category->slug == $cherie_current_category) {
                            $cherie_active_category = ' class="current_item" ';
                        } else {
                            $cherie_active_category = '';
                        }

                        $category_link = sprintf(
                            '<li %4$s><a href="%1$s" alt="%2$s">%3$s</a></li>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_attr( $category->name ),
                            esc_html( $category->name ),
                            $cherie_active_category
                        );

                        echo cherie_wp_kses($category_link);

                    endforeach; ?>
                </ul>

            <?php elseif ( $cherie_cat_count >= 5 ): ?>
                <ul class="art-categories-dropdown art-no-list-style">
                    <li>
                        <span><?php echo get_category_by_slug($cherie_current_category)->name; ?></span>
                        <ul class="art-no-list-style">
                            <li><a href="<?php echo get_post_type_archive_link('post'); ?>"><?php esc_html_e('All articles', 'cherie'); ?></a></li>

                            <?php
                            foreach( $cherie_categories as $category ) {
                                $category_link = sprintf(
                                    '<li><a href="%1$s">%3$s</a></li>',
                                    esc_url( get_category_link( $category->term_id ) ),
                                    esc_attr( $category->name ),
                                    esc_html( $category->name )
                                );
                                echo cherie_wp_kses($category_link);
                            } ?>

                        </ul>
                    </li>
                </ul>
            <?php endif; ?>

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

                <a href="/" class="art-search-blog-button">
                    <i class="icon-cherie_search"></i>
                </a>

            </div>

        </div>
    </div>

<?php else: ?>

    <div class="art-blog-cats">
        <div class="container art-categories-wrapper">

            <?php $cherie_categories = get_categories( [
                'orderby' => 'name',
                'order'   => 'ASC'
            ] );

            $cherie_cat_count = count($cherie_categories);
            ?>

            <?php if( $cherie_cat_count <= 4 ): ?>

            <ul class="art-categories art-no-list-style">
                <li class="current_item"><a href="<?php echo get_post_type_archive_link('post'); ?>"><?php esc_html_e('All articles', 'cherie'); ?></a></li>
                <?php
                foreach( $cherie_categories as $category ) {
                    $category_link = sprintf(
                        '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                        esc_url( get_category_link( $category->term_id ) ),
                        esc_attr( $category->name ),
                        esc_html( $category->name )
                    );

                    echo cherie_wp_kses($category_link);

                } ?>
            </ul>

            <?php elseif ( $cherie_cat_count >= 5 ): ?>

                <ul class="art-categories-dropdown art-no-list-style">
                    <li>
                        <span><?php esc_html_e('All articles', 'cherie'); ?></span>
                        <ul class="art-no-list-style">
                            <?php
                            foreach( $cherie_categories as $category ) {
                                $category_link = sprintf(
                                    '<li><a href="%1$s">%3$s</a></li>',
                                    esc_url( get_category_link( $category->term_id ) ),
                                    esc_attr( $category->name ),
                                    esc_html( $category->name )
                                );

                                echo cherie_wp_kses($category_link);

                            } ?>
                        </ul>
                    </li>
                </ul>

            <?php endif; ?>

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

                <a href="/" class="art-search-blog-button">
                    <i class="icon-cherie_search"></i>
                </a>
            </div>

        </div>
    </div>

<?php endif; ?>