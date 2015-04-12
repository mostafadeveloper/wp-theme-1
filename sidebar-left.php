
<!-- main -->
	<div class="row">
	<!-- left sidebar -->
	<div class="col-md-2 ads">
	<h1><?php _e('Advertisement','simplenews'); ?></h1>
	
	<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
	
	<!--<div class="panel panel-primary">-->
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
	<!--</div>-->
	<?php endif; ?>
	
	<!--<div class="col-md-12 ad">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/custom_news_assets/img1.jpg" class="img-responsive">
	</div>-->
	<!--<div class="col-md-12 ad">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/custom_news_assets/img1.jpg" class="img-responsive">
	</div>-->
	</div>