<?php
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function cherie_pingback_header() {
    if ( is_singular() && pings_open() ) {
        echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'cherie_pingback_header' );

if (!function_exists('cherie_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cherie_setup()
    {
        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on khaki, use a find and replace
        * to change 'cherie' to the name of your theme in all the template files.
        */
        load_theme_textdomain('cherie', get_template_directory() . '/languages');


        register_nav_menus	([
            'general-menu'	                => esc_html__('Main Menu', 'cherie'),
            'mobile-menu'	                => esc_html__('Mobile Menu', 'cherie'),
        ]);

        add_editor_style();
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        add_theme_support( 'post-formats', [ 'video', 'gallery', 'audio', 'image', 'quote', 'link' ] );
        add_post_type_support( 'post', 'post-formats' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

         add_image_size('cherie_post_single', 1366, 1366, true);

    }
endif;
add_action('after_setup_theme', 'cherie_setup');

// Fixed Select2 conflict with Advanced Custom Fields
add_filter( 'acf/settings/select2_version', function( $version ) {
    return 4;
});

add_filter( 'avatar_defaults', 'cherie_new_gravatar' );
function cherie_new_gravatar ($avatar_defaults) {

	$cherie_gravatar = CHERIE_THEME_URL . '/assets/css/images/avatar.svg';
	$avatar_defaults[$cherie_gravatar] = "Default Gravatar";
	return $avatar_defaults;
}

function cherie_social_sharing_buttons($content = '') {
	global $post;

    // Get current page URL
    $crunchifyURL = urlencode(get_permalink());

    // Get current page title
    $crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

    // Get Post Thumbnail for pinterest
    $crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

    // Construct sharing URL without using any script
    $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;

    // Based on popular demand added Pinterest too

    if( $crunchifyThumbnail ==! false )
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;

    // Add sharing button at the end of page/page content
    $content .= '<!-- Implement your own superfast social sharing buttons without any JavaScript loading. No plugin required. Detailed steps here: https://crunchify.com/?p=7526 -->';
    $content .= '<div class="art-social-share-buttons">';
    $content .= '<a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
    $content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';

    if( $crunchifyThumbnail ==! false )
        $content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>';
    $content .= '</div>';

    return $content;
};

/**
 * Comment callback function
 * @param object $comment
 * @param array $args
 * @param int $depth
 */
function cherie_theme_comments($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">

	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>

	<div class="comment-wrapper">

		<div class="comment-author vcard">

            <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>

        </div>

		<?php
		if ($comment->comment_approved == '0') : ?>
			<em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'cherie'); ?></em>
			<br>
		<?php endif; ?>

		<div class="comment-itself">

			<div class="comment-meta">
				<div class="info-meta">
					<div class="info-meta-top">
						<?php printf( "<span class='author art-heading-seven'>".esc_html__('%s','cherie')."</span>", get_comment_author_link() );?>
					</div>
					<span class="comment-date art-body-five-font">
						<?php printf( esc_html__('%1$s %2$s','cherie'), date('F j, Y'),esc_html__('at ', 'cherie') . get_comment_time() ); ?><?php edit_comment_link( esc_html__( '(Edit)','cherie' ), '  ', '' ); ?>
					</span>
				</div>

			</div>

			<div class="comment-text story">
				<?php comment_text(); ?>
			</div>

			<div class="reply">
				<?php comment_reply_link(
					array_merge(
						$args,
						array(
							'reply_text' => 'reply',
							'add_below' => $add_below,
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
						)
					)
				); ?>
			</div>

		</div>

	</div>

	<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>

	<?php
}


/**
 * Wrapper for wp_kses
 */

function cherie_wp_kses($cherie_string){
	$allowed_tags = [
        'option' => [
            'selected' => [],
            'value' => [],
            'class' => [],
        ],
		'img' => [
			'src' => [],
			'alt' => [],
			'width' => [],
			'height' => [],
			'class' => [],
		],
		'a' => [
			'href' => [],
			'title' => [],
			'class' => [],
		],
		'span' => [
			'class' => [],
		],
		'div' => [
			'class' => [],
			'id' => [],
		],
		'h1' => [
			'class' => [],
			'id' => [],
		],
		'h2' => [
			'class' => [],
			'id' => [],
		],
		'h3' => [
			'class' => [],
			'id' => [],
		],
		'h4' => [
			'class' => [],
			'id' => [],
		],
		'h5' => [
			'class' => [],
			'id' => [],
		],
		'h6' => [
			'class' => [],
			'id' => [],
		],
		'p' => [
			'class' => [],
			'id' => [],
		],
		'strong' => [
			'class' => [],
			'id' => [],
		],
		'i' => [
			'class' => [],
			'id' => [],
		],
		'del' => [
			'class' => [],
			'id' =>[],
		],
		'ul' => [
			'class' => [],
			'id' => [],
		],
		'li' => [
			'class' => [],
			'id' => [],
		],
		'ol' => [
			'class' => [],
			'id' => [],
		],
		'input' => [
			'class' => [],
			'id' => [],
			'type' => [],
			'style' => [],
			'name' => [],
			'value' => [],
		],
	];
	if (function_exists('wp_kses')) {
		return wp_kses($cherie_string,$allowed_tags);
	}
}

function cherie_page_links() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = [
		'format' => '?paged=%#%',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => false,
		'type' => 'plain',
		'prev_next' => false,
		'next_text' => '<i class="icon-cherie_arrow"></i>',
		'prev_text' => '<i class="icon-cherie-short-arrow-left"></i>'
	];

	if( $wp_rewrite->using_permalinks() ) {
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( ['s'], get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	}

	if( !empty($wp_query->query_vars['s']) ) {
		$pagination['add_args'] = [ 's' => get_query_var( 's' ) ];
	}
	echo paginate_links($pagination);
}



/**
 * Get related posts of post
 * @since 1.0.0
 */
function cherie_get_related_posts( $post_id, $related_count, $args = [] ) {
	$terms = get_the_terms( $post_id, 'category' );

	if ( empty( $terms ) ) {
		$terms = [];
	}

	$term_list = wp_list_pluck( $terms, 'slug' );

	return new WP_Query( [
        'post_type'      => 'post',
        'posts_per_page' => $related_count,
        'post_status'    => 'publish',
        'post__not_in'   => [ $post_id ],
        'orderby'        => 'rand',
        'tax_query'      => [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $term_list
            ]
        ]
    ] );
}

/**
 * Get related posts of post
 * @since 1.0.0
 */
function cherie_get_related_career_posts( $post_id, $related_count, $args = [] ) {

    $related_args = [
        'post_type'      => 'career',
        'posts_per_page' => $related_count,
        'post_status'    => 'publish',
        'post__not_in'   => [ $post_id ],
        'orderby'        => 'rand',
    ];

    return new WP_Query( $related_args );
}

/*
 * Check if exist next page to show the pagination
 * */
function cherie_show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}

/*
 * Custom Trim Excerpt
 */
function cherie_trim_excerpt( $text = '' ) {
    $cherie_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = apply_filters( 'the_content', $text );

        $excerpt_length = apply_filters( 'excerpt_length', 55 );
        $text = wp_trim_words( $text, $excerpt_length, ' ' );
    }
    return apply_filters( 'cherie_trim_excerpt', $text, $cherie_excerpt );
}
add_filter('get_the_excerpt', 'cherie_trim_excerpt');

/*
 * Custom Excerpt length
 */
function cherie_limit_excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).' ...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $patterns = "/\[[\/]?vc_[^\]]*\]/";
    $replacements = "";

    $excerpt = preg_replace( $patterns, $replacements, $excerpt);
    return $excerpt;
}

//Unreal construction to passed/hide "Theme Checker Plugin" recommendation about Header nad Background
if('Theme Checke' == 'Hide') {
    add_theme_support( 'custom-header');
    add_theme_support( 'custom-background');
}

/**
 * Check if it's a blog page
 * @global object $post
 * @return boolean
 */
function cherie_is_blog () {
    global  $post;
    $posttype = get_post_type($post);
    return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ($posttype == 'post')) ? true : false ;
}

/**
 * cherie_menu_fallback
 */

if (!function_exists('cherie_menu_fallback')) {
    function cherie_menu_fallback(){

        if(current_user_can( 'administrator' )) {
            echo '<span class="no-menu">' . esc_html__('Please register navigation from', 'cherie') . ' ' .
                '<a class="select-mobile-menu" href="'. esc_url(admin_url()) . '"nav-menus.php?action=locations" target="_blank">'. esc_html__( 'Appearance > Menus', 'cherie' ) .'</a></span>';
        }
    }
}

/**
 * Register Elementor Locations
 */
function cherie_register_elementor_locations( $elementor_theme_manager ) {

    $elementor_theme_manager->register_location( 'header' );
    $elementor_theme_manager->register_location( 'footer' );

}
add_action( 'elementor/theme/register_locations', 'cherie_register_elementor_locations' );


/**
 * Get Save Web Fonts
 * @return array
 */
function cherie_get_safe_webfonts() {
    return [
        'Arial'				=> 'Arial',
        'Verdana'			=> 'Verdana, Geneva',
        'Trebuchet'			=> 'Trebuchet',
        'Georgia'			=> 'Georgia',
        'Times New Roman'   => 'Times New Roman',
        'Tahoma'			=> 'Tahoma, Geneva',
        'Palatino'			=> 'Palatino',
        'Helvetica'			=> 'Helvetica',
        'Gill Sans'			=> 'Gill Sans',
    ];
}

/**====================================================================
==  Return Text
====================================================================*/
if (!function_exists('cherie_return_text')) {
    function cherie_return_text($content, $wpautop = false)
    {
        if ($wpautop == 'true') {
            $content = wpautop(preg_replace('/<\/?p\>/', "\n", $content) . "\n");
        }
        return $content;
    }
}

/**====================================================================
==  Demo Install Setting
====================================================================*/
if(!function_exists('cherie_demo_import')) {
    function cherie_demo_import()
    {
        return array(
            array(
                'import_file_name'              => esc_html__('Beauty', 'cherie'),
                'categories'                    => array(),
                'import_file_url'               => 'https://firstsight.design/cherie/demo-install/beauty/demo-content.xml',
                'import_widget_file_url'        => 'https://firstsight.design/cherie/demo-install/beauty/widgets.wie',
                'import_customizer_file_url'    => 'https://firstsight.design/cherie/demo-install/beauty/customizer.dat',
                'import_preview_image_url'      => 'https://firstsight.design/cherie/demo-install/beauty/Beauty.jpg',
                'import_notice'                 =>  esc_html__('Click on the Import Demo Data button and wait a bit. Installing demo content may take more than 10 minutes in some cases.', 'cherie'),
                'preview_url'                   => 'https://firstsight.design/cherie/beauty/'
            ),
            array(
                'import_file_name'              => esc_html__('Nail', 'cherie'),
                'categories'                    => array(),
                'import_file_url'               => 'https://firstsight.design/cherie/demo-install/nail/demo-content.xml',
                'import_widget_file_url'        => 'https://firstsight.design/cherie/demo-install/nail/widgets.wie',
                'import_customizer_file_url'    => 'https://firstsight.design/cherie/demo-install/nail/customizer.dat',
                'import_preview_image_url'      => 'https://firstsight.design/cherie/demo-install/nail/Nail.jpg',
                'import_notice'                 =>  esc_html__('Click on the Import Demo Data button and wait a bit. Installing demo content may take more than 10 minutes in some cases.', 'cherie'),
                'preview_url'                   => 'https://firstsight.design/cherie/nail/'
            ),
            array(
                'import_file_name'              => esc_html__('Hair', 'cherie'),
                'categories'                    => array(),
                'import_file_url'               => 'https://firstsight.design/cherie/demo-install/hair/demo-content.xml',
                'import_widget_file_url'        => 'https://firstsight.design/cherie/demo-install/hair/widgets.wie',
                'import_customizer_file_url'    => 'https://firstsight.design/cherie/demo-install/hair/customizer.dat',
                'import_preview_image_url'      => 'https://firstsight.design/cherie/demo-install/hair/Hair.jpg',
                'import_notice'                 =>  esc_html__('Click on the Import Demo Data button and wait a bit. Installing demo content may take more than 10 minutes in some cases.', 'cherie'),
                'preview_url'                   => 'https://firstsight.design/cherie/hair/'
            ),
            array(
                'import_file_name'              => esc_html__('Spa', 'cherie'),
                'categories'                    => array(),
                'import_file_url'               => 'https://firstsight.design/cherie/demo-install/spa/demo-content.xml',
                'import_widget_file_url'        => 'https://firstsight.design/cherie/demo-install/spa/widgets.wie',
                'import_customizer_file_url'    => 'https://firstsight.design/cherie/demo-install/spa/customizer.dat',
                'import_preview_image_url'      => 'https://firstsight.design/cherie/demo-install/spa/Spa.jpg',
                'import_notice'                 =>  esc_html__('Click on the Import Demo Data button and wait a bit. Installing demo content may take more than 10 minutes in some cases.', 'cherie'),
                'preview_url'                   => 'https://firstsight.design/cherie/spa/'
            ),
        );

    }
}
add_filter('pt-ocdi/import_files', 'cherie_demo_import');

if(!function_exists('cherie_after_demo_import')) {

    function cherie_after_demo_import() {

        $general_menu           = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        $mobile_menu            = get_term_by( 'name', 'Mobile Menu', 'nav_menu' );

        set_theme_mod( 'nav_menu_locations', array(
                'general-menu'      => $general_menu->term_id,
                'mobile-menu'    => $mobile_menu->term_id,
            )
        );

        $front_page_id = get_page_by_title( 'Homepage' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        $shop_page_id  = get_page_by_title( 'Carefully Selected Beauty Products' );
        $checkout_page_id  = get_page_by_title( 'Checkout' );
        $cart_page_id  = get_page_by_title( 'Shopping Bag' );


        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );
        update_option( 'woocommerce_shop_page_id', $shop_page_id->ID );
        update_option( 'woocommerce_checkout_page_id', $checkout_page_id->ID );
        update_option( 'woocommerce_cart_page_id', $cart_page_id->ID );

        // Elementor Settings
        update_option( 'elementor_scheme_color', '' );
        update_option( 'elementor_scheme_typography', '' );
        update_option( 'elementor_scheme_color-picker', '' );
        update_option( '_elementor_scheme_last_updated', 1592404824 );

        $default_Kits = get_posts( array(
            'numberposts' => -1,
            'post_type'   => 'elementor_library',
        ) );

        foreach ( $default_Kits as $item ) {
            if( $item->post_title == 'Default Kit' ) {

                update_post_meta($item->ID, '_elementor_page_settings', array (
                    'body_typography_font_size' =>
                        array (
                            'unit' => 'px',
                            'size' => '25',
                            'sizes' =>
                                array (
                                ),
                        ),
                    'default_generic_fonts' => 'Sans-serif',
                    'container_width' =>
                        array (
                            'unit' => 'px',
                            'size' => '1170',
                        ),
                    'space_between_widgets' =>
                        array (
                            'unit' => 'px',
                            'size' => '20',
                        ),
                    'global_image_lightbox' => 'yes',
                    'viewport_md' => '',
                    'viewport_lg' => '',
                    'system_colors' =>
                        array (
                            0 =>
                                array (
                                    '_id' => 'primary',
                                    'title' => 'Primary',
                                    'color' => '#000000',
                                ),
                            1 =>
                                array (
                                    '_id' => 'secondary',
                                    'title' => 'Secondary',
                                    'color' => '#54595F',
                                ),
                            2 =>
                                array (
                                    '_id' => 'text',
                                    'title' => 'Text',
                                    'color' => '#000000',
                                ),
                            3 =>
                                array (
                                    '_id' => 'accent',
                                    'title' => 'Accent',
                                    'color' => '#61CE70',
                                ),
                        ),
                    'custom_colors' =>
                        array (
                            0 =>
                                array (
                                    '_id' => '6041b1d9',
                                    'title' => 'Saved Color #1',
                                    'color' => '#6EC1E4',
                                ),
                            1 =>
                                array (
                                    '_id' => '629feb1',
                                    'title' => 'Saved Color #3',
                                    'color' => '#7A7A7A',
                                ),
                            2 =>
                                array (
                                    '_id' => '51720a83',
                                    'title' => 'Saved Color #5',
                                    'color' => '#4054B2',
                                ),
                            3 =>
                                array (
                                    '_id' => '3cd038d6',
                                    'title' => 'Saved Color #6',
                                    'color' => '#23A455',
                                ),
                            4 =>
                                array (
                                    '_id' => '7378c9a5',
                                    'title' => 'Saved Color #7',
                                    'color' => '#000',
                                ),
                            5 =>
                                array (
                                    '_id' => '30df8d8',
                                    'title' => 'Saved Color #8',
                                    'color' => '#FFF',
                                ),
                        ),
                    'system_typography' =>
                        array (
                            0 =>
                                array (
                                    '_id' => 'primary',
                                    'title' => 'Primary Headline',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => '',
                                    'typography_font_weight' => '',
                                ),
                            1 =>
                                array (
                                    '_id' => 'secondary',
                                    'title' => 'Secondary Headline',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'EB Garamond',
                                    'typography_font_weight' => '400',
                                ),
                            2 =>
                                array (
                                    '_id' => 'text',
                                    'title' => 'Body Text',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => '',
                                    'typography_font_weight' => '',
                                ),
                            3 =>
                                array (
                                    '_id' => 'accent',
                                    'title' => 'Accent Text',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => '',
                                    'typography_font_weight' => '',
                                ),
                        ),
                ) );
            }
        }

        update_option( '_elementor_css', '' );

        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
        $wp_rewrite->flush_rules();
        $wp_rewrite->flush_rules();

    }
}
add_action( 'pt-ocdi/after_import', 'cherie_after_demo_import' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function cherie_before_content_import( $selected_import ) {
    $shop_page_id  = get_page_by_title( 'Shop' );
    $blog_page_id  = get_page_by_title( 'a Blog page' );
    $shop_my_account_page_id  = get_page_by_title( 'My account' );
    $shop_checkout_page_id  = get_page_by_title( 'Checkout' );
    $shop_cart_page_id  = get_page_by_title( 'Cart' );

    if($blog_page_id){
        wp_delete_post($blog_page_id->ID);
    }
    if($shop_page_id){
        wp_delete_post($shop_page_id->ID, true);
    }
    if($shop_my_account_page_id){
        wp_delete_post($shop_my_account_page_id->ID);
    }
    if($shop_checkout_page_id){
        wp_delete_post($shop_checkout_page_id->ID);
    }
    if($shop_cart_page_id){
        wp_delete_post($shop_cart_page_id->ID);
    }

    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
    $wp_rewrite->flush_rules();
}
add_action( 'pt-ocdi/before_content_import', 'cherie_before_content_import' );