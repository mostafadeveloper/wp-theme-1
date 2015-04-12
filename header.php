<?php
/*
* Header File
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" dir="">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png">
    <title><?php bloginfo('name'); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/dist/custom_news.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/dist/custom_news_print.css" rel="stylesheet" media="print"/><!-- Print Post -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="./dist/js/html5shiv.js"></script>
      <script src="./dist/js/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
  </head>

  <body>
	
<div class="container">
<?php
if(has_nav_menu('top')){
	
wp_nav_menu(array(
  'theme_location' => 'top', // this location must first register in function.php
  'container_class' => 'row top-menu-wrapper', 
  'menu_class' => 'top-menu',
  //'menu_id' => 'nav',
  //'items_wrap' => 'a',
  //'before' => '<span class="dir">',
  //'after' => '</span>',
  //'link_before' => '0',
  //'link_after' => ' | ',
  //'walker' => new CSS_Menu_Horizon_Vertical_Walker()
));

}
?>
	<!-- header -->
	<div class="page-header my-header">
	<!--<h1>Title</h1>
	<p class="lead">another site</p>-->
	<div class="row row-header">
	<div class="col-md-8 ads">
	<div class="col-md-4 ad">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/custom_news_assets/img1.jpg" class="img-responsive"/>
	</div>
	<div class="col-md-4 ad">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/custom_news_assets/img1.jpg" class="img-responsive"/>
	</div>
	<div class="col-md-4 ad">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/custom_news_assets/img1.jpg" class="img-responsive"/>
	</div>
	</div>
	<div class="col-md-4">
	<?php 
	$description = get_bloginfo('description','display');
	?>
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
	<p class="lead"><?php echo $description; ?></p>
	<small>
	<?php 
	/*
	*	Display Date + Time of Today
	*/
	_e('Today ','simplenews');
	echo date_i18n(get_option('date_format') ,strtotime("11/15-1976"));
	?>
	</small>
	</div>
	</div>
	<div class="row middle-menu">
	<div class="col-md-12">
		<div class="col-md-4">
		<div class="text-right pull-left">
			<?php
			/*
			*	@By Mostafa
			*	Display Today Total posts
			*/
			$today = getdate();
			$todayposts=get_posts('year=' .$today["year"] .'&monthnum=' .$today["mon"] .'&day=' .$today["mday"] );
			_e('Today News Count:','simplenews'); echo count($todayposts);
			?>
		</div>
		<?php get_search_form(); ?>
		</div>
		<div class="col-md-8 middle-menu-wrap">
		<!-- middle-menu -->
		<ul class="nav nav-pills pull-right text-right">
		<li class="active pull-right"><a href="#">Political</a></li>
		<li><a href="#" class="pull-right">Social</a></li>
		<li><a href="#" class="pull-right">Economic</a></li>
		</ul>
		<?php 
		if(has_nav_menu('middle')){
wp_nav_menu(array(
  'theme_location' => 'middle', // this location must first register in function.php
  //'container_class' => 'row top-menu-wrapper', 
  'menu_class' => 'nav nav-pills pull-right text-right',
  //'menu_id' => 'nav',
  //'items_wrap' => 'a',
  //'before' => '<span class="dir">',
  //'after' => '</span>',
  //'link_before' => '0',
  //'link_after' => ' | ',
  'walker' => new My_MiddleMenu_Walker(),
));
}
?>	
		</div>
	</div>
	<!-- last headlines star -->
	<div class="col-md-12 lats-headlines">
	<marquee direction="right">
	<?php
	/*
	*	Marquee (News Ticker)
	*	@By Mostafa
	*	Get Last 10 Post & Show
	*/
	$query_last_posts = new WP_Query();
	$query_last_posts->query('posts_per_page=10');
	while ( $query_last_posts->have_posts() ) : $query_last_posts->the_post();
	?>
	»<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>&nbsp;&nbsp;
	<?php
	endwhile;
	// Reset Post Data
	wp_reset_postdata();
	?>
	</marquee>
	</div>
	<!-- last headline end -->
	</div>
	</div>