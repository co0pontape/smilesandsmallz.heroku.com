<?php $page = "stoutnyc"; ?>
<?php include("include/header.php"); ?>

<link rel="stylesheet" type="text/css" href="http://www.smilesandsmallz.com/css/jquery.lightbox-0.4.css" media="screen" />
<script type="text/javascript" src="http://www.smilesandsmallz.com/js/jquery.lightbox-0.4.js"></script>
<script type="text/javascript">
	$(function() {
		$('div.stoutnyc_img a').lightBox(); // Select all links in the page
	});
</script>
<style type="text/css">
	#content_box {
		margin: 0px auto;
		margin-top: 25px;
		width: 600px;
	}
	#stoutnyc_container {
		margin: 25px 40px;
	}
	.stoutnyc_img {
		width: 150px;
		height: 150px;
		float: left;
		margin: 10px 15px;
	}
</style>
<div id="content" class="<?php echo $page; ?>">

	<div id="content_box">
		Special thanks to Steve Lau! Go check out his work <a href="http://stevenlauphotographies.com/" target="_blank">here</a>.
	</div>

	<div class="page_links">
		<div class="page_link">
			<a href="stoutnyc.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">Page 1</a>
		</div>
		<div class="page_link">
			<a href="stoutnyc.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=2">Page 2</a>
		</div>	
	</div>	

	<div id="stoutnyc_container">
		
		<?php
			$pg = $_GET['pg'];
			if($_GET['pg']=="2"){
				$start = 101;
				$end = 156;
			} else {
				$start = 1;
				$end = 100;			
			}
			for ($i=$start; $i<=$end; $i++) {
				echo '<div class="stoutnyc_img">';
				echo '<a href="http://www.smilesandsmallz.com/stoutnyc/'.$i.'.jpg">';
				echo '<img src="http://www.smilesandsmallz.com/stoutnyc/'.$i.'.jpg" width="150" height="150" />';
				echo '</a>';
				echo '</div>';
			}
		?>
		
	</div>						
	
	<div class="page_links">
		<div class="page_link">
			<a href="stoutnyc.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">Page 1</a>
		</div>
		<div class="page_link">
			<a href="stoutnyc.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=2">Page 2</a>
		</div>	
	</div>		

</div>

<?php include("include/footer.php"); ?>