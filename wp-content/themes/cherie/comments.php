<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="blog-comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
        <h2 class="comments-title art-h6">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				esc_html_e( 'One Comment', 'cherie' );
			} else {
				printf( // WPCS: XSS OK.
				/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'cherie' ) ),
					number_format_i18n( $comment_count ),
					get_the_title()
				);
			}
			?>
        </h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

        <ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size' => 80,
				'callback' => 'cherie_theme_comments'
			) );
			?>
        </ol><!-- .comment-list -->

		<?php the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cherie' ); ?></p>
			<?php
		endif;
	endif; // Check for have_comments().

	comment_form(array(
		'fields' => array(
			'author' => '<div class="art-line-fields"><p class="comment-form-author"><input id="author" name="author" placeholder="'. esc_html__('Name *', 'cherie') .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"></p>',
			'email'  => '<p class="comment-form-email"><input id="email" name="email" placeholder="'. esc_html__('Email *', 'cherie') .'" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"></p>',
			'url'    => '<p class="comment-form-url"><input id="url" name="url" placeholder="'. esc_html__('Website', 'cherie') .'" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"></p></div>',
		),
		'comment_notes_before' => esc_html__('Your email address will not be published. Required fields are marked *', 'cherie'),
		'title_reply' => esc_html__( 'Leave a Reply', 'cherie' ),
		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="'. esc_html__('Comment *', 'cherie') .'" aria-required="true"></textarea></p>',
		'class_submit' => 'art-button art-button-dark'
	));
	?>

</div><!-- #comments -->