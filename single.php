<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
get_header();
get_sidebar('left');
?>
	<!-- main content -->
	<!-- post(news) -->
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="col-md-8">
	<div class="meta pull-left">
	<a href="#" class="resetFont" style="display:none;">Reset Font</a>
	<a href="#" title="<?php _e('Print','simplenews'); ?>" class="print-post"><span class="glyphicon glyphicon-print"></span></a>
	<a href="<?php esc_url( the_permalink() ); ?>" title="<?php _e('Short link to news ','simplenews'); ?>" target="_blank"><span class="glyphicon glyphicon-link"></span></a>
	<a href="#" title="<?php _e('Email','simplenews'); ?>"><span class="glyphicon glyphicon-envelope"></span></a>
	<a href="#" title="<?php _e('PDF Save On Server','simplenews'); ?>"><span class="glyphicon glyphicon-floppy-disk text-success"></span></a>
	<a href="http://www.web2pdfconvert.com/engine?<?php echo esc_url( get_permalink() ); ?>" title="<?php _e('PDF Save Online','simplenews'); ?>" target="_blank"><span class="glyphicon glyphicon-floppy-disk text-success"></span></a>
	<a href="sms:?body=<?php echo the_title(); ?>?<?php echo esc_url( get_permalink() ); ?>" title="<?php _e('Send SMS','simplenews'); ?>"><span class="glyphicon glyphicon-send text-success"></span></a>
	<a href="#" title="<?php _e('Share','simplenews'); ?>" class="share-icon"><span class="glyphicon glyphicon-share text-danger"></span></a>&nbsp;&nbsp;
	<div class="share-networks"><a href="#">G+</a><a href="#">Facebook</a><a href="#">Twitter</a></div>
	<a href="#" title="<?php _e('Smaller','simplenews'); ?>" class="decreaseFont"><span class="glyphicon glyphicon-minus"></span></a>
	<a href="#" title="<?php _e('Bigger','simplenews'); ?>" class="increaseFont"><span class="glyphicon glyphicon-plus"></span></a>
	</div>
	<div class="row article">
	<div class="meta"><strong><?php _e('News ID','simplenews'); ?>:</strong><span><?php echo the_ID(); ?></span>&nbsp;<strong><?php _e('Publish Date','simplenews'); ?>:</strong><time><?php echo get_the_date('d-M-Y h:i'); ?></time></div>
	<h1 class="single"><?php the_title(); ?></h1>
	
	<?php global $post;   ?>
	<?php if(has_excerpt($post->ID)) { ?>
	<div class="col-md-12 news-excerpt">
	<?php the_excerpt(); ?>
	</div>
	<?php } ?>
	<div class="post-content">
	<?php global $authordata; ?>
	<?php $aid=$authordata->ID; ?>
	<?php if( $aid != "1" ) { //1 is id of admin or first created user?>
	<span>
	<?php echo the_author_meta('first_name'); ?>&nbsp;<?php echo the_author_meta('last_name'); ?>
	</span>	
	<?php } ?>
	<?php _e('Group','simplenews'); ?><?php the_category(' '); ?> - <?php bloginfo('name'); ?>
	<div class="cnt" style="font-size:18px;"><!-- post content text -->
	<?php
	the_content( sprintf(
				__( 'Continue reading %s', 'simplenews' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
			?>
	</div>
	</div>
	</div>
		<!-- single post comment -->
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
	<!-- single post comment -->
	
	
	</div>
	<?php endwhile; ?>
<?php
get_sidebar('right');
get_footer();
?>