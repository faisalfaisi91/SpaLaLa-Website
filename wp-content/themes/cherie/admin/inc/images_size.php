<?php

// THIS INCLUDES THE THUMBNAIL IN OUR RSS FEED
function cherie_insert_feed_image($content) {
    global $post;

    if ( has_post_thumbnail( $post->ID ) ){
        $content = ' ' . get_the_post_thumbnail( $post->ID, 'medium' ) . " " . $content;
    }
    return $content;
}
add_filter('the_excerpt_rss', 'cherie_insert_feed_image');
add_filter('the_content_rss', 'cherie_insert_feed_image');