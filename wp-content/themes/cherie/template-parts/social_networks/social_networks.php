<div class="art-social-container">
    <?php if (cherie_get_theme_mod( 'my-social-list-setting')): ?>
        <?php foreach ( cherie_get_theme_mod( 'my-social-list-setting') as $bokeh_social_item ): ?>
            <a href="<?php echo esc_url( $bokeh_social_item['link_url'] ); ?>"><i class="fa <?php echo esc_attr($bokeh_social_item['social_icon_itself']); ?>" aria-hidden="true"></i></a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>