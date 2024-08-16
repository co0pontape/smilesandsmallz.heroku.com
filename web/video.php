<?php $page = "cruise"; ?>
<?php include("include/header.php"); ?>

<style type="text/css">
	#content_box {
		margin: 0px auto;
		margin-top: 25px;
		width: 600px;
	}
	#cruise_container {
		margin: 25px 40px;
		text-align: center;
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
	
	<div id="content_box">
		Special thanks to Myther Ganibe! Go check out his work <a href="http://www.mytherganibe.com/" target="_blank">here</a>.
	</div>	

	<div id="cruise_container">
		
		<iframe src="//player.vimeo.com/video/84399400?title=0&amp;byline=0&amp;color=ff9933" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
		
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