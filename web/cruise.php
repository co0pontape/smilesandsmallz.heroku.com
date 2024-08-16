<?php $page = "cruise"; ?>
<?php include("include/header.php"); ?>

<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed: 'fast', // fast/slow/normal
			slideshow: 5000, // false OR interval time in ms 
			autoplay_slideshow: false, // true/false 
			opacity: 0.80, // Value between 0 and 1 
			show_title: true, // true/false 
			allow_resize: true, // Resize the photos bigger than viewport. true/false 
			default_width: 500,
			default_height: 344,
			counter_separator_label: '/', // The separator for the gallery counter 1 "of" 2 
			theme: 'pp_default', // light_rounded / dark_rounded / light_square / dark_square / facebook 
			horizontal_padding: 20, // The padding on each side of the picture 
			hideflash: false, // Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto 
			wmode: 'opaque', // Set the flash wmode attribute 
			autoplay: true, // Automatically start videos: True/False 
			modal: false, // If set to true, only the close button will close the window 
			deeplinking: true, // Allow prettyPhoto to update the url to enable deeplinking. 
			overlay_gallery: true, // If set to true, a gallery will overlay the fullscreen image on mouse over 
			keyboard_shortcuts: true, // Set to false if you open forms inside prettyPhoto 
			changepicturecallback: function(){}, // Called everytime an item is shown/changed 
			callback: function(){}, // Called when prettyPhoto is closed 
			ie6_fallback: true
		});
	});
</script>
<style type="text/css">
	#cruise_container {
		margin: 25px 40px;
	}
	.cruise_img {
		width: 150px;
		height: 150px;
		float: left;
		margin: 10px 15px;
	}
</style>
<div id="content" class="<?php echo $page; ?>">

	<div class="page_links">
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">Pictures 1</a>
		</div>
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=2">Pictures 2</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=3">Pictures 3</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=4">Pictures 4</a>
		</div>			
		<div class="page_link">
			<a href="bridal.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">Bridal Party Speech Video</a>
		</div>							
		<div class="page_link">
			<a href="video.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">Cruise Video</a>
		</div>			
	</div>	

	<div id="cruise_container">
		
		<?php
			$pg = $_GET['pg'];
			if($_GET['pg']=="4"){
				$start = 301;
				$end = 373;			
			} else if($_GET['pg']=="3"){
				$start = 201;
				$end = 301;
			} else if($_GET['pg']=="2"){
				$start = 101;
				$end = 193;
			} else {
				$start = 1;
				$end = 100;			
			}
			for ($i=$start; $i<=$end; $i++) {
				echo '<div class="cruise_img">';
				echo '<a href="'.$baseUrl.'cruise/'.$i.'.jpg" rel="prettyPhoto[pp_gal]">';
				echo '<img src="'.$baseUrl.'cruise/'.$i.'.jpg" width="150" height="150" />';
				echo '</a>';
				echo '</div>';
			}
		?>
		
	</div>						
	
	<div class="page_links">
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">Pictures 1</a>
		</div>
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=2">Pictures 2</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=3">Pictures 3</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=4">Pictures 4</a>
		</div>			
		<div class="page_link">
			<a href="bridal.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">Bridal Party Speech Video</a>
		</div>							
		<div class="page_link">
			<a href="video.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">Cruise Video</a>
		</div>			
	</div>		

</div>

<?php include("include/footer.php"); ?>