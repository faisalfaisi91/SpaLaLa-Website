<!--Sidebar Mobile Menu Start--> 
<div class="art-mobile-menu-wrapper">
    <!--Sidebar Overlay Start-->
    <div class="art-sidebar-overlay art--mobile-menu-icon"></div>
    <!--Sidebar Overlay End-->
    <div class="art-nav-container">
        <!--Mobile Nav menu Wrapper Start-->
        <div class="art--mobile-menu-navigation-wrapper">

            <!--Mobile Nav menu Start-->
            <nav class="art--mobile-menu-navigation">
                <?php
                if ( has_nav_menu( 'mobile-menu' ) ) {
                    wp_nav_menu([
                        'theme_location'    => 'mobile-menu',
                        'menu_class'	    => 'art--mobile-menu',
                        'id'                => 'hamburger-menu',
                        'container'         => false,
                        'fallback_cb'       => 'cherie_menu_fallback'
                    ]);
                }
                ?>
            </nav>
            <!--Mobile Nav menu End-->
        </div>
        <!--Mobile Nav menu Wrapper End-->
    </div>
</div>
<!--Sidebar Mobile Menu End-->