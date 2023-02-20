<?php
$cherie_header_show_border = '';

if( cherie_get_theme_mod('header_display_border', true) == 'header_border_show' ) { $cherie_header_show_border = ' art-header-show-border'; }

if( function_exists('is_shop') && is_shop() ) {
    $woo_shop_page_id = get_option( 'woocommerce_shop_page_id' );
    if( cherie_get_theme_mod('header_display_border',true, $woo_shop_page_id) == 'header_border_show' ) { $cherie_header_show_border = ' art-header-show-border'; }
}

if( cherie_is_blog() ) {
    $cherie_blog_page_id = get_option( 'page_for_posts');
    if( cherie_get_theme_mod('header_display_border', true, $cherie_blog_page_id) == 'header_border_show' ) { $cherie_header_show_border = ' art-header-show-border'; }
}

if( is_404() || ( function_exists('is_product') && is_product() ) ) {
	$cherie_header_show_border = ' art-header-show-border';
}

if( cherie_get_theme_mod('header_type_color', true) != null && cherie_get_theme_mod('header_type_color', true) != 'dark_header_text' ) {
    $cherie_header_classes = '';
} else {
    $cherie_header_classes = ' art-dark-header-text';
}
?>

<header class="art--header art-header-one<?php echo esc_attr($cherie_header_classes); ?><?php echo esc_attr($cherie_header_show_border); ?>">
	<div class="art-header-one-content" <?php if(cherie_get_theme_mod('header_bg_color')){ echo 'style="background-color:'. cherie_get_theme_mod('header_bg_color') .'"'; } ?>>
		<div class="art-navigation-container">

			<div class="left-content">
				<!-- Start Logo-->
				<div class="art--logo-container">

					<a class="light-logotype" href="<?php echo esc_url(home_url('/')); ?>">
						<?php if (cherie_get_theme_mod( 'site_logo')){ ?>
							<img src="<?php echo esc_url(cherie_get_theme_mod( 'site_logo')); ?>" alt="<?php esc_attr_e('Site Logotype','cherie')?>" class="img-logotype">
						<?php } else { ?>
							<h3 class="logotype-text"><?php esc_attr(bloginfo('title')); ?></h3>
						<?php } ?>
					</a>

					<a class="dark-logotype" href="<?php echo esc_url(home_url("/")); ?>">
						<?php if (cherie_get_theme_mod( 'site_logo_dark')){ ?>
							<img src="<?php echo esc_url(cherie_get_theme_mod( 'site_logo_dark')); ?>" alt="<?php esc_attr_e('Site Logotype Dark','cherie')?>" class="img-logotype">
						<?php } else { ?>
							<h3 class="logotype-text-dark"><?php esc_attr(bloginfo('title')); ?></h3>
                        <?php } ?>
					</a>

				</div>
				<!--Logo End-->
			</div>

			<div class="center-content">
				<!-- Nav Menu Start-->
				<nav class="art-mega-menu qrt-nav-menu">
					<?php if ( has_nav_menu( 'general-menu' ) ) :
						wp_nav_menu([
							'theme_location'    => 'general-menu',
							'class'             => 'header-menu nav-menu',
							'container'         => false,
							'id'                => 'general-menu',
							'depth'             => 8,
							'fallback_cb'       => 'cherie_menu_fallback'
						]);
                    endif;
					?>

				</nav>
				<!-- Nav Menu End-->
			</div>

			<div class="right-content">

                <?php get_template_part('template-parts/social_networks/social_networks'); ?>

                <?php if ( has_nav_menu( 'mobile-menu' ) ): ?>
                    <div class="info_block_hamburger">
                        <button class="hamburger hamburger--collapse-r" type="button">
                                <span class="hamburger-box">
                                  <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                <?php endif; ?>

			</div>

		</div>
	</div>
</header>