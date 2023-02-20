<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
 <div class="sidebar-container" >
    <aside class="sidebar cf">
        <div class="sidebar_container">
            <?php dynamic_sidebar( 'main-sidebar' ); ?>
        </div>
    </aside>
 </div>
<?php } ?>