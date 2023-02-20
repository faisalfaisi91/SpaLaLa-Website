<?php

if ( ! function_exists( 'cherie_comment_text' ) ) :
    function cherie_comment_text($text = null) {
        if($text == null) {
            $text = get_comment_text();
        }
        return cherie_return_text( $text );
    }
endif;