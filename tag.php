<?php
/**
 * The template for displaying Tag pages
 */
get_header();
get_sidebar('left');
?>
	<!-- main content -->
	<!-- post(news) -->
	<div class="col-md-8">
<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'simplenews' ), single_tag_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					/* twentyfourteen_paging_nav(); */

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
	</div><!-- col-md-8 -->

<?php
get_sidebar('right');
get_footer();
?>