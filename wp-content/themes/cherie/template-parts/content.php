<div <?php post_class('cf'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">

    <div class="art_content_story">
        <div class="inner_content">
            <div class="art-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php wp_link_pages(array(
            'before'        => '<p class="page-inner-pagination">'.'<span class="pagination-text">' . esc_html__('Pages:', 'cherie').'</span>',
            'after'	        => '</p>',
            'link_before'   => '',
            'link_after'    => '',
            'pagelink'      => '<span class="page-numbers">'.'%'.'</span>', 

        )) ?>
    </div>

</div>