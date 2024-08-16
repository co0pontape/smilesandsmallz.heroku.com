<?php $page = "cruise"; ?>
<?php include("include/header.php"); ?>

<link rel="stylesheet" type="text/css" href="http://www.smilesandsmallz.com/css/jquery.lightbox-0.4.css" media="screen" />
<script type="text/javascript" src="http://www.smilesandsmallz.com/js/jquery.lightbox-0.4.js"></script>
<script type="text/javascript">
	$(function() {
		$('div.cruise_img a').lightBox(); // Select all links in the page
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
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">Page 1</a>
		</div>
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=2">Page 2</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=3">Page 3</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=4">Page 4</a>
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
				echo '<a href="http://www.smilesandsmallz.com/cruise/'.$i.'.jpg">';
				echo '<img src="http://www.smilesandsmallz.com/cruise/'.$i.'.jpg" width="150" height="150" />';
				echo '</a>';
				echo '</div>';
			}
		?>
		
	</div>						
	
	<div class="page_links">
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">Page 1</a>
		</div>
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=2">Page 2</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=3">Page 3</a>
		</div>	
		<div class="page_link">
			<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=4">Page 4</a>
		</div>			
	</div>		

</div>

<?php include("include/footer.php"); ?>