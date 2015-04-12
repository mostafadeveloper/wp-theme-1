<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="row comments-area">
<div class="col-md-12">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title col-md-12">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'simplenews' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list col-md-12">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'simplenews' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'simplenews' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'simplenews' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'simplenews' ); ?></p>
		<?php endif; ?>
	
	<?php endif; // have_comments() ?>
	
	<!-- comment form -->

	
	
	<?php
	/*
	*	My Custom Comment
	*	@In wp-includes/comment-template.php:L 2200 & 2166
	*/
	$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
	//My Variables
	//Error: Review ,,, Ask From IRC Channal
	$placeholder_name = __('Name','simplenews');
	$placeholder_email = __('Email','simplenews');
	$placeholder_website = __('Website','simplenews');
	$placeholder_comment = __('Your Comment Here','simplenews');
$fields =  array(
	'author' => '<p class="comment-form-author form-group">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="author" name="author" type="text" class="form-control" placeholder="'. $placeholder_name .'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p class="comment-form-email form-group"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="email" name="email" type="text" class="form-control" placeholder="'. $placeholder_email .'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
	'url' => '<p class="comment-form-url form-group"><label for="url">' . __( 'Website', 'simplenews' ) . '</label>' .
	     '<input id="url" name="url" type="text" class="form-control" placeholder="'. $placeholder_website .'" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
	'tel' => '<p class="comment-form-tel form-group"><label for="tel">' . __( 'Telephone(Mobile-Phone)', 'simplenews' ) . '</label>' .
	     '<input id="tel" name="tel" type="text" class="form-control" placeholder="'. $placeholder_website .'" value="" size="30" /></p>',
	/*'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',*/
);
$comments_args = array(
	'fields' =>	$fields,
	'class_submit' => 'btn btn-primary',
	'comment_field' => '<p class="comment-form-comment form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea id="comment" name="comment" class="form-control" placeholder="'. $placeholder_comment .'" rows="10" aria-describedby="form-allowed-tags" aria-required="true"></textarea></p>',
	'label_submit' => __( 'Send Comment','simplenews' ), /*Default:post-comment*/
);
	?>	
	<?php comment_form($comments_args); ?>
	<?php //comment_text('3'); ?>
	<!-- comment form -->
	
</div>
</div><!-- #comments -->