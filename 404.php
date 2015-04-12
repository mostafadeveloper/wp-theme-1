<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
get_sidebar('left');
 ?>

	<!-- main content -->
	<!-- post(news) -->
	<div class="col-md-8">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'simplenews' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'simplenews' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	</div><!-- col-md-8 -->

<?php 
get_sidebar('right');
get_footer(); 
?>
