<?php
/* 
*	Template Name: Application Iframe
*
*
*
*/
?>
<?php get_header(); ?>
<?php get_sidebar('left');?>


	<!-- main content -->
	<!-- post(news) -->
	<div class="col-md-8">

	<iframe src="<?php echo esc_url( get_template_directory_uri() ); ?>/app-1/index.php" width="100%" height="1118px" border="0px" border-color="white"><?php _e('Your Browser Dont Support Iframe','simplenews'); ?></iframe>



	</div><!-- col-md-8 -->


<?php get_sidebar('right'); ?>
<?php get_footer(); ?>