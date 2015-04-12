<?php 
/*
*	Main Content File
*/
?>
	<!-- <div class="row bc">
	<a href="#">خانه</a>><a href="#">سیاسی</a>
	</div> -->
	<!-- article -->
	<div class="row article">
	<div class="col-md-10 my-padding-one">
	<h2><a href="<?php echo esc_url(the_permalink()); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php global $post;   ?>
	<?php if(has_excerpt($post->ID)) { ?>
	<div class="col-md-12 news-excerpt">
	<?php the_excerpt(); ?>
	<a href="<?php echo esc_url( the_permalink() ); ?>" class="btn btn-xs"><?php _e('Read More','simplenews'); ?></a>
	</div>
	<?php } else { //write here a code ---> if post dont have excerpt then add a filter to get special character of post content and show ?>
	<div class="col-md-12 news-excerpt-home">
	<?php 
	// here we add filter to get some some first characters of content
	//add_filter('the_content', 'get_special_content_filter');
	echo "No EXCERPT";
	?>
	</div>
	<?php } ?>
	</div>
	
	<div class="col-md-2 my-padding-one">
	<div class="">
    <?php if( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail( 'large', array( 'alt' => get_the_title(), 'class' => 'img-responsive simplenews-thumb' ) ); ?> <?php //'post-thumbnail' ?>
	</a> 
	 <!--<a href="#"><img src="./custom_news_assets/img1.jpg" class="img-responsive simplenews-thumb"></a>-->
	<?php } else { ?>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/custom_news_assets/default-thumb.jpg" class="img-responsive simplenews-thumb">
	<?php } ?>
	</div>
	</div>
	</div>

	
