
<!-- footer -->
<div class="footer">


<?php
if(has_nav_menu('bottom')){
	
wp_nav_menu(array(
  'theme_location' => 'bottom', // this location must first register in function.php
  'container_class' => 'bottom-menu-wrapper', 
  'menu_class' => 'bottom-menu',
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

<!--</div>-->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/style/dist/js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/style/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
//$(document).off('.alert.data-api');
$(document).ready(function(){
	//print post
	$('a.print-post').click(function(){
		print();
	});
	
	//test for showing sharing-networks
	$('div.share-networks').hide();
	
	$('a.share-icon').click(function(){
		
		$('div.share-networks').toggle('fade');
		
	});
	/*
	*	jQuery Changing Post Font Size
	*	+ Cookie for save zoom
	*/
	// Reset Font Size
  var originalFontSize = $('div.cnt').css('font-size');
    $(".resetFont").click(function(){
    $('div.cnt').css('font-size', originalFontSize);
  });
  // Increase Font Size
  $(".increaseFont").click(function(){
    var currentFontSize = $('div.cnt').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*1.2;
    $('div.cnt').css('font-size', newFontSize);
    return false;
  });
  // Decrease Font Size
  $(".decreaseFont").click(function(){
    var currentFontSize = $('div.cnt').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*0.8;
    $('div.cnt').css('font-size', newFontSize);
    return false;
  });
  

});

</script>	

	<?php wp_footer(); ?>
  </body>

</html>