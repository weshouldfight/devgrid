<!--
Plugin to display a GRID over your Website 
Requires Foundation XY-Grid
Version: 1.3 (2019-08-21)

USAGE
(1) Put the folder devgrid in your theme directory.
(2) Include this file (devgrid.php) right before the closing body tag.
Example: include( get_template_directory() . '/devgrid/devgrid.php');
-->

<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  SETTINGS -->
<?php
	

$nr_large_columns 	= 	6; 						// 2, 3, 4, 6 or 12. Default: 6
$nr_small_columns 	= 	2; 						// Default: 2

$color_of_grid 			= 	'#00FFFF'; 		// Default: #00FFFF
$opacity_of_grid 		=		'0.08'; 			// Default: 0.08


?>
<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  HTML GRID OVERLAY -->
<?php // don't change
$large_columns = 12/$nr_large_columns;
$small_columns = 12/$nr_small_columns;
?>


<section id="devgrid" class="section invisible">
	
	
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		  <div class="cell small-<?php echo $small_columns; ?> medium-<?php echo $large_columns; ?>">
		  </div>
		</div>
	</div>
	

<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  SCREEN SIZE -->	


	<div id="show-screensize">
		<p class="show-for-small-only">small screen</p>
		<p class="show-for-medium-only">medium screen</p>
		<p class="hide-for-medium-only hide-for-small-only">large screen</p>
		<p class="viewportsize"><span class="width"></span> x <span class="height"></span></p>
	</div>
	
	
</section>


<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  CSS STYLING -->	


<style>
	
#devgrid {
	position: fixed;
	top: 0;
	height: 100%;
	padding-top: 0;
	padding-bottom: 0;
	z-index: 8999;
	pointer-events: none;
}

#devgrid .cell {
	background-color: <?php echo $color_of_grid; ?>;
	opacity: <?php echo $opacity_of_grid; ?>;
	height: 100vh;
}

#devgrid.invisible {
	display: none;
	visibility: hidden;
	height: 0;
	width: 0;
}

#show-screensize {
	position: fixed;
	bottom: 0;
	right: 0;
	background: rgba(0,0,0,0.5);
	padding: 2px 0;
	z-index: 9000;
}

#show-screensize p {
	color: white;
	font-size: 12px;
	font-family: Courier, 'Courier New', monospace, sans-serif;
	margin: 0;
	padding: 0 7px;
}

</style>



<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  jQuery Hotkeys Plugin -->	


<script src="<?php bloginfo('template_url'); ?>/devgrid/jquery.hotkeys.js"></script>


<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  jQuery Toggle Grid -->	


<script type="text/javascript">
	
$( document ).ready(function() {
	
	$(document).bind('keydown', 'ctrl+g', function(e){ 
		e.preventDefault();
		$('#devgrid').toggleClass('invisible');
	});
	
	var viewportWidth = $(window).width();
	var viewportHeight = $(window).height();
	$(".viewportsize .width").html(viewportWidth);
	$(".viewportsize .height").html(viewportHeight);
	
	$(window).resize(function() {
		var viewportWidth = $(window).width();
		var viewportHeight = $(window).height();
		$(".viewportsize .width").html(viewportWidth);
		$(".viewportsize .height").html(viewportHeight);
	});


}); // Ende document ready

</script>
